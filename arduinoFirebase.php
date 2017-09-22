<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://plant-monitor-9e424.firebaseio.com/';
// --- Use your token from Firebase here
$token = 'cgsxyH1YNAc6TPhqeEuHqdzDOjPWr7MbE3R1RKP9';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/';
/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);