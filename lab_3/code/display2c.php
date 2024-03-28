<?php
session_start();

if (isset($_SESSION['userData'])) {
    $userData = $_SESSION['userData'];

    echo '<ul>';
    foreach ($userData as $key => $value) {
        echo '<li>' . $key . ': ' . $value . '</li>';
    }
    echo '</ul>';
} else {
    echo 'No data found.';
}
?>