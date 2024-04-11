<?php



$pageTitle = "Reservation Page"; // Đặt tiêu đề tùy ý cho trang này

ob_start();


?>
 
<form action="index2.php?action=addReservation" method="POST"> 
    <input type="hidden" name="UserID" value="<?php echo isset($_SESSION['UserID']) ? $_SESSION['UserID'] : ''; ?>"> 
    <input type="hidden" name="RoomID" value="<?php echo $room['RoomID']; ?>"> 
    <label for="CheckInDate">Check In Date:</label> 
    <input type="date" name="CheckInDate" id="CheckInDate" required> 
 
    <label for="CheckOutDate">Check Out Date:</label> 
    <input type="date" name="CheckOutDate" id="CheckOutDate" required> 
 
    <label for="BookingDate">Booking Date:</label> 
    <input type="date" name="BookingDate" id="BookingDate" value="<?php echo date('Y-m-d'); ?>" required> 
 
    <label for="Status">Status:</label> 
    <input type="text" name="Status" id="Status" required> 
 
    <button type="submit">Book Now</button> 
</form> 
 
<?php 
$content = ob_get_clean(); 
include "views/layout.php"; 
?>
