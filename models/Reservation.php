<?php
class Reservation {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }
    public function addReservation($userId, $roomId, $bookingDate, $checkInDate, $checkOutDate, $status) {
        $query = "INSERT INTO Reservations (UserID, RoomID, BookingDate, CheckInDate, CheckOutDate, Status) VALUES ('$userId', '$$roomId', '$bookingDate', '$checkInDate','$checkOutDate','$status')";
        mysqli_query($this->connection, $query);
    }
}
    