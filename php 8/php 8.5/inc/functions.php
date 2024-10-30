<?php

define('DB_NAME', 'C:\Users\User\OneDrive\Desktop\Backend Development\php 8\php 8.5\data\db.txt');

function seed()
{
    $data = array(
        array(
            'id' => 1,
            'fname' => 'Shahin',
            'lname' => 'Ahmed',
            'age' => 12,
            'class' => 7,
            'roll' => 11
        ),
        array(
            'id' => 2,
            'fname' => 'Rahim',
            'lname' => 'Ahmed',
            'age' => 11,
            'class' => 7,
            'roll' => 12
        ),
        array(
            'id' => 3,
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'age' => 12,
            'class' => 7,
            'roll' => 13
        ),
        array(
            'id' => 4,
            'fname' => 'Dip',
            'lname' => 'Khan',
            'age' => 13,
            'class' => 5,
            'roll' => 14
        ),
        array(
            'id' => 5,
            'fname' => 'Hasan',
            'lname' => 'Khan',
            'age' => 15,
            'class' => 8,
            'roll' => 1
        )
    );
    $serializedData = serialize($data);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

function generateReport()
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($students as $student) {
        ?>
            <tr>
                <td>
                    <?php printf('%s %s', $student['fname'], $student['lname']); ?>
                </td>
                <td>
                    <?php printf('%s', $student['roll']); ?>
                </td>
                <td>
                    <?php printf('<a href="index.php?task=edit&id=%s">Edit</a> | <a href="index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id']); ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}

function addStudent($fname, $lname, $roll)
{
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach ($students as $student) {
        if ($student['roll'] == $roll) {
            $found = true;
            break;
        }
    }
    if (!$found) {

        $newId = count($students) + 1;
        $student = array(
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll
        );
        array_push($students, $student);
        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData, LOCK_EX);
        return true;
    }
    return false;
}

function getStudent($id)
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach ($students as $student) {
        if ($student['id'] == $id) {
            return $student;
        }
    }
    return false;
}

function updateStudent($id, $fname, $lname, $roll)
{
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach ($students as $student) {
        if ($student['roll'] == $roll && $student['id'] != $id) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll'] = $roll;
        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData, LOCK_EX);
        return true;
    }
    return false;
}
