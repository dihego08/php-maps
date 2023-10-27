<?php
$conn = mysqli_connect('localhost', 'u132236064_react', 'leopoldocarabobo12A@');
$database = mysqli_select_db($conn, 'u132236064_react');

$encodedData = file_get_contents('php://input');  // take data from react native fetch API
$decodedData = json_decode($encodedData, true);