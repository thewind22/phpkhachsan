<?php



$pageTitle = "Reservation Page"; // Đặt tiêu đề tùy ý cho trang này

ob_start();


?>
<h2>Nội dung chính</h2>
            <p>Đây là nơi bạn có thể đặt nội dung chính của trang web của mình.</p>
            <p>Điều này có thể là một bài viết, sản phẩm, hoặc bất kỳ thông tin nào mà bạn muốn chia sẻ.</p>
            <?php
// Lấy nội dung đã được đệm ra
$content = ob_get_clean();

// Include file layout.php
include "views\layout.php";
?>
