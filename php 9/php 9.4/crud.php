<?php
include_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 9.3</title>
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
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Simple Auth Example</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                if (true == $_SESSION['loggedin']) {
                    echo "Hello Admin, Wellcome";
                } else {
                    echo "Hello Stranger, Login Below";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                if ($error) {
                    echo "<blockquote>Username and Password didn't match</blockquote>";
                }
                if (false == $_SESSION['loggedin']) :
                ?>
                    <form action="index.php" method="POST">
                        <label for="username">Username</label>
                        <input type="text" name='username' id="username">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                        <button type="submit" class="button-primary" name="submit">Log In</button>
                    </form>
                <?php
                else:
                ?>
                    <form action="index.php" method="POST">
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" class="button-primary" name="submit">Log Out</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>