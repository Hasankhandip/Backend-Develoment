<?php
header('X-XSS-Protection:0');
include_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 4.4</title>
    <!-- roboto font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <!-- normalize css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!-- miligram css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <!-- REQUEST Method start -->
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Our First Form</h1>
                <p>
                    <?php
                    $fname = '';
                    $lname = '';
                    $checked = '';

                    if (isset($_REQUEST['cbi']) && $_REQUEST['cb1'] == 1) {
                        $checked = 'checked';
                    }
                    ?>

                    <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>
                    <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>
                </p>
                <p>
                    First Name: <?php echo $fname; ?> <br>
                    Last Name: <?php echo $lname; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked ?>>
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>

                    <div>
                        <label class="label">Select Some Fruits</label>

                        <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked('orange') ?>>
                        <label class="label-inline">Orange</label><br>
                        <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked('mango') ?>>
                        <label class="label-inline">Mango</label><br>
                        <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('banana') ?>>
                        <label class="label-inline">Banana</label><br>
                        <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked('lemon') ?>>
                        <label class="label-inline">Lemon</label><br>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- REQUEST Method end -->
</body>

</html>