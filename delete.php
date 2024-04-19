<?php
    $key = $_POST['del'];

    $json = file_get_contents('phonebook.json');
    $data = json_decode($json, true);

    unset($data["$key"]);

    $newJson = json_encode($data);
    file_put_contents('phonebook.json', $newJson);
    
    header("location: index.php");
?>