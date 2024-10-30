<?php
$data = [
  'title' => "Liên hệ",
  'lienhe' => 'active'
];

include 'config/head.php';

$tb = [];
$terms_error = '';
$error_message = ''; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $category = $_POST['category'];
    $messenger = trim($_POST['messenger']);
    $terms = isset($_POST['terms']);

    if (empty($name)) {
        $tb['name-err']['rong'] = ['Vui lòng điền tên!'];
    }

    if (empty($email)) {
        $tb['email-err']['rong'] = ['Vui lòng điền email!'];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $tb['email-err']['format'] = ['Email không đúng định dạng!'];
    }

    if (!$terms) {
        $terms_error = 'Vui lòng đồng ý với điều khoản!';
    }

    if (!empty($tb) || !empty($terms_error)) {
      
        if (!empty($terms_error)) {
          $tb['err']['faild'] = 'Gặp lỗi trong quá trình gửi thông tin!';
        }

    } else {
        $stmt = $pdo->prepare("INSERT INTO contact (name, email, subject, category, messenger, error) VALUES (?, ?, ?, ?, ?, NULL)");
        $success = $stmt->execute([$name, $email, $subject, $category, $messenger]);

        if ($success) {
            $tb['suc']['finish'] = 'Gửi thông tin thành công! Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.';
        } else {
            $tb['err']['faild'] = 'Gặp lỗi trong quá trình gửi thông tin!';
        }
    }
}
?>

<body>
    <main>
        <div class="bg">
            <div class="text-lh">
                <h1>Liên hệ</h1>
                <p>Cùng nhau lên ý<br />tưởng tuyệt vời<br />cho dự án của bạn</p>
            </div>
            <img src="https://melrol.com/wp-content/uploads/2023/01/copernico-PXilGoBofu8-unsplash-1.jpg" alt="" />
            <div class="song">
                <img src="/templates/img/bg-song.jpg" alt="" />
            </div>
        </div>
    </main>

    <div class="contact-form">
        <h2>Liên hệ với chúng tôi</h2>
        <p>
            Liên hệ với chúng tôi qua biểu mẫu liên hệ dưới đây để thảo luận<br />về
            dự án của bạn, ý tưởng của bạn.
        </p>

        <?php if (isset($tb['suc']['finish'])) { ?>
        <p style="color:green;"><?php echo $tb['suc']['finish']; ?></p>
        <?php } elseif (isset($tb['err']['faild'])) { ?>
        <p style="color:red;"><?php echo $tb['err']['faild']; ?></p>
        <?php } ?>

        <form action="" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <p>Tên quý khách*</p>
                    <input type="text" id="name" name="name" required />
                    <?php if (isset($tb['name-err']['rong'])): ?>
                    <p class="error"><?php echo $tb['name-err']['rong'][0]; ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <p>Email*</p>
                    <input type="email" id="email" name="email" required />
                    <?php if (isset($tb['email-err']['rong'])): ?>
                    <p class="error"><?php echo $tb['email-err']['rong'][0]; ?></p>
                    <?php elseif (isset($tb['email-err']['format'])): ?>
                    <p class="error"><?php echo $tb['email-err']['format'][0]; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <p>Chủ đề</p>
                    <input type="text" id="subject" name="subject" />
                </div>
                <div class="form-group">
                    <p>Chuyên mục</p>
                    <select id="category" name="category">
                        <option value="web-design">Thiết kế Website</option>
                        <option value="branding">Branding</option>
                        <option value="app">Ứng dụng</option>
                        <option value="design">Design</option>
                        <option value="marketing">Marketing</option>
                        <option value="support">Hỗ trợ</option>
                        <option value="khac">Khác</option>
                    </select>
                </div>
            </div>

            <label for="message">Tin nhắn để lại</label>
            <textarea id="message" name="messenger" rows="4"></textarea>

            <div>
                <label for="terms">
                    <input type="checkbox" id="terms" name="terms" required />Tôi đồng ý
                    với điều khoản tại <a href="#">Điều khoản riêng tư</a></label>
                <?php if ($terms_error): ?>
                <p class="error"><?php echo $terms_error; ?></p>
                <?php endif; ?>
            </div>

            <button type="submit" id="submit-button">Xác nhận</button>
        </form>
    </div>

    <?php
include 'config/foot.php';
?>