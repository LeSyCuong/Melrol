<?php
$data = [
    'title' => "Tìm kiếm",
];

include 'config/head.php';

$whereClauses = []; 
$params = []; 

if (isset($_POST['search']) && !empty($_POST['search'])) {
    $search = $_POST['search'];

    if (stripos($search, 'tất cả') !== false) {
        $sql = "SELECT * FROM content ORDER BY id DESC";
    } else {
        $whereClauses[] = "name LIKE :search"; 
        $params[':search'] = '%' . $search . '%';
        
        $whereClause = '';
        if (!empty($whereClauses)) {
            $whereClause = "WHERE " . implode(" AND ", $whereClauses);
        }
        $sql = "SELECT * FROM content $whereClause ORDER BY id DESC";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params); 

    $per_page = 4;
    $total_rows = $stmt->rowCount();
    $total_pages = ceil($total_rows / $per_page);

    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($current_page - 1) * $per_page;

    $sql .= " LIMIT $start, $per_page";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo 'Không có nội dung được tìm kiếm';
}

?>


<body>
    <p class="searchvv">
        Tìm kiếm với nội dung: <?= htmlspecialchars($search, ENT_QUOTES, 'UTF-8'); ?>
    </p>
    <div class="wrapper2">
        <?php
        if (count($products) > 0) {
            foreach ($products as $row) {
        ?>
        <a style="text-decoration: none; color: black;"
            href=" <?= htmlspecialchars($row['link'], ENT_QUOTES, 'UTF-8'); ?>">
            <div class="item-slide">
                <b style="font-size:50px;"><?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></b><br /><br />
                <img style="width:300px; height:300px; border-radius:0%;"
                    src="<?= htmlspecialchars($row['img'], ENT_QUOTES, 'UTF-8'); ?>" />

                <p>
                    <?= htmlspecialchars($row['content'], ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </div>
        </a>

        <?php
            }
        } else {
            echo "Không có nội dung nào.";
        }
        ?>
    </div>
    <?php
    if ($total_pages > 1) {
    ?>
    <div class="pagination">
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {
            $url = '?page=' . $i;
            foreach ($_GET as $key => $value) {
                if ($key != 'page') {
                    $url .= '&' . htmlspecialchars($key, ENT_QUOTES, 'UTF-8') . '=' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                }
            }
        ?>
        <a href="<?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>"
            class="<?= ($current_page == $i) ? 'active' : ''; ?>"><?= $i; ?></a>
        <?php
        }
        ?>
    </div>
    <?php
    }
    ?>

    <div class="cuoi">
        <div class="thang"></div>
        <div class="di">
            <p>It's time to change</p>
            <h4>Chúng tôi có thể<br />giúp bạn!</h4>
            <button class="buttonx">Liên hệ với chúng tôi</button>
        </div>
    </div>
    <div class="bg-w2"></div>
    <?php
include 'config/foot.php';
?>