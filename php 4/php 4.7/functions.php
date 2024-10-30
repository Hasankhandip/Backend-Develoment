<?php
$allowedTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg'

);
if ($_FILES['photo']) {
    if (in_array($_FILES['photo']['type'], $allowedTypes) !== false) {
        move_uploaded_file($_FILES['photo']['tmp_name'], "files/" . $_FILES['photo']['name']);
    }
}
