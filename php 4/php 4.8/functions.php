<?php
$allowedTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg'

);
if ($_FILES['photo']) {
    $totalFiles = count($_FILES['photo']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        if (in_array($_FILES['photo']['type'], $allowedTypes)) {
            move_uploaded_file($_FILES['photo']['tmp_name']['$i'], "files/" . $_FILES['photo']['name']['$i']);
        }
    }
}
