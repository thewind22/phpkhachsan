<?php

// Thiết lập tiêu đề của trang
$pageTitle = "Room Details ";

// Bắt đầu đệm đầu ra
ob_start();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Room Details</h1>
            <div class="card">
                <div class="card-body">
                    <p><strong>Room Number:</strong> <?php echo $room['RoomNumber']; ?></p>
                    <p><strong>Room Type:</strong> <?php echo $room['RoomType']; ?></p>
                    <p><strong>Price:</strong> <?php echo $room['Price']; ?></p>
                    <p><strong>Status:</strong> <?php echo $room['Status']; ?></p>
                    <a class="btn btn-warning btn-sm" href="index2.php?action=addReservation&RoomID=<?php echo $room['RoomID']; ?>">mua</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// Lấy nội dung đã được đệm ra
$content = ob_get_clean();

// Include file layout.php
include "views\layout.php";
?>

