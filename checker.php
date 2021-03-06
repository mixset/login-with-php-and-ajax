<?php

session_start();

error_reporting(E_ALL ^ E_NOTICE);

$textMessages = [
    0 => 'Uzupełnij wszystkie pola formularza',
    1 => 'Wpisz poprawny adres E-mail.',
    2 => 'Wpisz poprawne dane.',
    3 => 'Za chwilę zostaniesz przekierowany.',
    4 => 'Nie wysłano formularza.',
];

$correctEmail = 'email@domain.com';
$correctPassword = '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8';

$data = array_map('trim', $_POST);
$data = filter_var_array($data, FILTER_SANITIZE_STRING);
$data['password'] = hash('sha256', $data['password']);

if(isset($_POST) && $data['action'] == 'login')
{
    if (empty($data['email']) || empty($data['password'])) {
        $array = [false, $textMessages[0]];
    }
    elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $array = [false, $textMessages[1]];
    }
    elseif ($data['email'] !== $correctEmail || $data['password'] !== $correctPassword) {
        $array = [false, $textMessages[2]];
    } else {
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];

        $array = [true, $textMessages[3]];
    }
} else {
    $array = [false, $textMessages[4]];
}

echo json_encode($array);
