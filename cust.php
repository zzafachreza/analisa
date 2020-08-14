<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:./');
}


include_once 'header.php';

?>
Customer

<?php

include_once 'footer.php';

?>
