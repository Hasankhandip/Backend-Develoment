<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 4.2</title>
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

    <!-- GET Method start -->
    <!-- <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Our First Form</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, cum! Earum ratione voluptatum tenetur temporibus dolore animi soluta ullam cupiditate mollitia, quo qui, obcaecati deserunt!</p>
                <p>
                    <?php /* if (isset($_GET['fname']) && !empty($_GET['fname'])) : ?>
                        First Name: <?php echo $_GET['fname']; ?> <br>
                    <?php endif ?>
                    <?php if (isset($_GET['lname']) && !empty($_GET['lname'])) : ?>
                        Last Name: <?php echo $_GET['lname']; ?> <br>
                    <?php endif */ ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div> -->
    <!-- GET Method End -->

    <!-- POST Method start -->
    <!-- <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Our First Form</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, cum! Earum ratione voluptatum tenetur temporibus dolore animi soluta ullam cupiditate mollitia, quo qui, obcaecati deserunt!</p>
                <p>
                    <?php /* if (isset($_POST['fname']) && !empty($_POST['fname'])) : ?>
                        First Name: <?php echo $_POST['fname']; ?> <br>
                    <?php endif ?>
                    <?php if (isset($_POST['lname']) && !empty($_POST['lname'])) : ?>
                        Last Name: <?php echo $_POST['lname']; ?> <br>
                    <?php endif */ ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div> -->
    <!-- POST Method end -->

    <!-- REQUEST Method start -->
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Our First Form</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, cum! Earum ratione voluptatum tenetur temporibus dolore animi soluta ullam cupiditate mollitia, quo qui, obcaecati deserunt!</p>
                <p>
                    <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) { ?>
                        First Name: <?php echo $_REQUEST['fname']; ?> <br>
                    <?php } ?>
                    <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) { ?>
                        Last Name: <?php echo $_REQUEST['lname']; ?> <br>
                    <?php } ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="post">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- REQUEST Method end -->
</body>

</html>