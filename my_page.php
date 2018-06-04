<?php

session_start();

error_reporting(E_ALL ^ E_NOTICE);

header('Content-Type: text/html; charset=UTF-8');

if(isset($_SESSION['ip']) && isset($_SESSION['email'])) {
    echo '<p>Oto twoje dane:</p>';
    echo '<p>E-mail: '.$_SESSION['email'].'</p>';
    echo '<p>Twoje IP: '.$_SESSION['ip'].'</p>';
    echo '<p>User Agent: '.$_SESSION['user_agent'].'</p>';
} else {
    echo 'Brak sesji! Próba włamania!';
    header('refresh:2;url=index.html');
}