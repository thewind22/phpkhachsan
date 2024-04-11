<?php
include 'models\Reservation.php';

class ReservationController {
    private $reservationModel;
    private $connection;  

    public function __construct() {
        include 'models\db_connection.php';
        $this->connection = $connection;  // Store the connection
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
    
                // Attempt to add the reservation
                $this->reservationModel->addReservation($userId, $roomId, $bookingDate, $checkInDate, $checkOutDate, $status);
    
                // If successful, redirect with a success message
                header("Location: index.php?success_message=Reservation+added+successfully");
                exit;
            } catch (Exception $ex) {
                // If there's an error, redirect with an error message
                header("Location: index.php?error_message=" . urlencode($ex->getMessage()));
                exit;
            }
        }
    
        include 'views\reservation\reservations.php';
    }
    
}