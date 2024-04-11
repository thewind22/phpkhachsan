<?php

include 'controllers/ReservationController.php';


$reservationController = new ReservationController();


session_start();


$userId = isset($_GET['UserID']) ? $_GET['UserID'] : null;
$action = isset($_GET['action']) ? $_GET['action'] : null;
switch ($action) {
    case 'addReservation':
        $reservationController->addReservation();
        break;
    
    default:
        echo 'Invalid action.';
        break;
}
?>
