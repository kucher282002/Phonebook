<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $newPeople = array('name' => $name,'phone' => $phone);

    $json = file_get_contents('phonebook.json');
    $data = json_decode($json, true);

    $phoneExists = false;
    foreach ($data as $people) {
        if ($people['phone'] == $phone) {
            $phoneExists = true;
            break;
        }
    }

    if ($phoneExists) {
        error_log("Номер уже был записан ранее");
        header("location: add.php");
    } 
    if (!$phoneExists) {
        $data[] = $newPeople;
        $newJson = json_encode($data);
        file_put_contents('phonebook.json', $newJson);
        header("location: index.php");
    }
?>