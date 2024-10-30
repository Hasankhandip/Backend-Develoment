<?php

define('DB_NAME', 'C:\Users\User\OneDrive\Desktop\Backend Development\php 8\php 8.2\data\db.txt');

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
            'roll' => 11
        ),
        array(
            'id' => 4,
            'fname' => 'Dip',
            'lname' => 'Khan',
            'age' => 13,
            'class' => 5,
            'roll' => 12
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
            <th>Actiona</th>
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
