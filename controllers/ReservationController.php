<?php
include 'models/Reservation.php';

class ReservationController {
    
    private $reservationModel;
    private $connection;  

    public function __construct() {
        include 'models/db_connection.php';
        $this->connection = $connection;  // Lưu trữ kết nối
        $this->reservationModel = new Reservation($connection);
    }

    public function addReservation() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $roomId = $_POST['RoomID'];
                $userId = $_POST['UserID'];
                $bookingDate = $_POST['BookingDate'];
                $checkInDate = $_POST['CheckInDate'];
                $checkOutDate = $_POST['CheckOutDate'];
                $status = $_POST['Status'];
    
                // Thêm đặt phòng
                $this->reservationModel->addReservation($userId, $roomId, $bookingDate, $checkInDate, $checkOutDate, $status);
    
                // Nếu thành công, chuyển hướng với thông báo thành công
                header("Location: index.php?success_message=Reservation+added+successfully");
                exit;
            } catch (Exception $ex) {
                // Nếu có lỗi, chuyển hướng với thông báo lỗi
                header("Location: index.php?error_message=" . urlencode($ex->getMessage()));
                exit;
            }
        }

        // Lấy RoomID từ URL
        if (!isset($_GET['RoomID']) || empty($_GET['RoomID'])) {
            // Nếu không có RoomID trong URL, chuyển hướng người dùng về trang không hợp lệ
            header("Location: error.php");
            exit;
        }
        $roomId = $_GET['RoomID'];

        include 'views/reservation/reservations.php';
    }
}
?>
