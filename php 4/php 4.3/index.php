<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 4.3</title>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, cum! Earum ratione voluptatum tenetur temporibus dolore animi soluta ullam cupiditate mollitia, quo qui, obcaecati deserunt!</p>
                <p>
                    <?php
                    $fname = '';
                    $lname = '';
                    ?>

                    <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                        // $fname = htmlspecialchars($_REQUEST['fname']);
                        // $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_URL);
                        // $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
                        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    } ?>
                    <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        // $lname = htmlspecialchars($_REQUEST['lname']);
                        // $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_URL);
                        // $fname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
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

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- REQUEST Method end -->
</body>

</html>