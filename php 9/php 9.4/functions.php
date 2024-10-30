<?php
error_reporting(E_ERROR | E_PARSE);
define('DB_NAME', 'C:\Users\User\OneDrive\Desktop\Backend Development\php 9\php 9.4\data\db.txt');

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
            <?php if (isAdmin() || isEditor()): ?>
                <th>Action</th>
            <?php endif; ?>
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
                <?php
                if (isAdmin()):
                ?>
                    <td>
                        <?php printf('<a href="index.php?task=edit&id=%s">Edit</a> | <a class="delete" href="index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id']); ?>
                    </td>
                <?php elseif (isEditor()): ?>
                    <td>
                        <?php printf('<a href="index.php?task=edit&id=%s">Edit</a>', $student['id']); ?>
                    </td>
                <?php endif; ?>
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

        $newId = getNewId($students);
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


function deleteStudent($id)
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach ($students as $offset => $student) {
        if ($student['id'] == $id) {
            unset($students[$offset]);
        }
    }
    $serializedData = serialize($students);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

function printRaw()
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    print_r($students);
}

function getNewId($students)
{
    $maxId = max(array_column($students, 'id'));
    return $maxId + 1;
}

//php 9.5 start
function isAdmin()
{
    return (
        'admin' == $_SESSION['role']
    );
}
function isEditor()
{
    return (
        'editor' == $_SESSION['role']
    );
}
function hasPrivilege()
{
    return (isAdmin() || isEditor());
}
//php 9.5 end

// 9.4 start
// $info = "";
// $task = $_GET['task'] ?? 'report';
// $error = $_GET['error'] ?? '0';
// if ('delete' == $task) {
//     $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     if ($id > 0) {
//         deleteStudent($id);
//         header('location:index.php?task=report');
//     }
// }
// if ('seed' == $task) {
//     seed();
//     $info = "Seeding is complete";
// }
// $fname = '';
// $lname = '';
// $roll = '';
// if (isset($_POST['submit'])) {
//     $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     if ($id) {
//         //update existing student
//         if ($fname != '' && $lname != '' && $roll != '') {
//             $result = updateStudent($id, $fname, $lname, $roll);
//             if ($result) {
//                 header('location:index.php?task=report');
//             } else {
//                 $error = 1;
//             }
//         }
//     } else {
//         // add a new student
//         if ($fname != '' && $lname != '' && $roll != '') {
//             $result = addStudent($fname, $lname, $roll);
//             if ($result) {
//                 header('location:index.php?task=report');
//             } else {
//                 $error = 1;
//             }
//         }
//     }
// }
// 9.4 end

// crud start


session_start(['cookie_lifetime' => 300]);

$error = false;

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
$fp = fopen("C:\Users\User\OneDrive\Desktop\Backend Development\php 9\php 9.4\data\users.txt", "r");
if ($username && $password) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    while ($data = fgetcsv($fp)) {
        if ($data[0] == $username && $data[1] == sha1($password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $data[2];
            header('location:index.php');
        }
    }
    if (!$_SESSION['loggedin']) {
        $error = true;
    }
}

if (isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    session_destroy();
    header('location:index.php');
}

//crud  end
