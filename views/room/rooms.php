<?php

// Thiết lập tiêu đề của trang
$pageTitle = "Room List";

// Bắt đầu đệm đầu ra
ob_start();

?>
<?php

?>
<!-- Nội dung của trang -->
<div class="container">
    <h1 class="mt-5"><?php echo $pageTitle; ?></h1>
    <a class="btn btn-primary mb-3" href="index.php?action=add">Add Room</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Room ID</th>
                <th>Room Number</th>
                <th>Room Type</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($rooms)) { ?>    
                <tr>
                    <td><?php echo $row['RoomID']; ?></td>
                    <td><?php echo $row['RoomNumber']; ?></td>
                    <td><?php echo $row['RoomType']; ?></td>
                    <td><?php echo $row['Price']; ?></td>
                    <td><?php echo $row['Status']; ?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href="index.php?action=details&RoomID=<?php echo $row['RoomID']; ?>">View</a>
                        <a class="btn btn-warning btn-sm" href="index.php?action=edit&RoomID=<?php echo $row['RoomID']; ?>">Edit</a>
                        <a class="btn btn-danger btn-sm" href="index.php?action=delete&RoomID=<?php echo $row['RoomID']; ?>" onclick="return confirm('Are you sure you want to delete this room?')">Delete</a>
           
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
// Lấy nội dung đã được đệm ra
$content = ob_get_clean();

// Include file layout.php
include "views\layout.php";
?>
