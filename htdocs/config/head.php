<?php 
include 'config/config.php'; 

$home = '';
$lienhe = '';
$thongtin = '';
$duan = '';
$dichvu = '';
$FAQ = '';

if (!empty($data) && is_array($data)) {
    $title = $data['title'] ?? 'Merol'; 
    $lienhe = $data['lienhe'] ?? ''; 
    $thongtin = $data['thongtin'] ?? '';
    $duan = $data['duan'] ?? ''; 
    $dichvu = $data['dichvu'] ?? ''; 
    $FAQ = $data['FAQ'] ?? '';
} else {
    $title = 'Merol';
    $home = 'active';
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="icon" href="https://melrol.com/wp-content/uploads/2023/09/cropped-83181679208-21692679166-32x32.png"
        sizes="32x32" />
    <link rel="icon" href="https://melrol.com/wp-content/uploads/2023/09/cropped-83181679208-21692679166-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://melrol.com/wp-content/uploads/2023/09/cropped-83181679208-21692679166-180x180.png" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css" />
    <link rel="stylesheet" href="/templates/css/styles.css" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="https://melrol.com/wp-content/uploads/2023/09/83181679208-removebg-preview1692679021.png" />
        </div>

        <nav>
            <ul>
                <li><a href="/" class="<?php echo $home; ?>">Trang chủ</a></li>
                <li><a href="/thongtin.php" class="<?php echo $thongtin; ?>">Thông tin</a></li>
                <li><a href=" #" class="<?php echo $duan; ?>">Dự án</a></li>
                <li><a href=" /dichvu.php" class="<?php echo $dichvu; ?>">Dịch vụ</a></li>
                <li><a href=" /lienhe.php" class="<?php echo $lienhe; ?>">Liên hệ</a></li>
                <li><a href="#" class="<?php echo $FAQ; ?>">FAQ</a></li>
            </ul>
        </nav>
        <div class=" search" onclick="toggleSearch(true)">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="search-bar-container" id="searchBarContainer">
            <button class="close-btn" onclick="toggleSearch(false)">×</button>
            <form action="search.php" method="POST">

                <input type="text" class="search-bar" id="search" name="search" placeholder="Tìm kiếm..." required />

            </form>
        </div>
        <script>
        function toggleSearch(open) {
            const searchBarContainer =
                document.getElementById("searchBarContainer");
            if (open) {
                searchBarContainer.style.top = "0";
            } else {
                searchBarContainer.style.top = "-100vh";
            }
        }
        </script>
    </header>