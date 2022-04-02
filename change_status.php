<?php
/**
 *User : Mohsen Roustapour
 *Date : 4/2/2022
 *Time : 4:49 PM
 */

$json = file_get_contents('todo.json');
$jsonArray = json_decode($json, true);

$todoName = $_POST['todo_name'];
$jsonArray[$todoName]['completed'] = !$jsonArray[$todoName]['completed'];

file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location: index.php');