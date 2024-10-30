<!-- Video er sathe kaj mile nai, code work kore nah -->
<?php
include_once "functions.php";
$fruits = ["mango", "orange", "Banana", "apple", "lemon", "peach"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 4.5</title>
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
                <h2>Select/Dropdowns</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam eius minima ipsum atque mollitia. Non laudantium ad expedita eligendi voluptas?</p>
                <p>
                    <?php
                    // $sfruits = $_POST['fruits'] ?? array();
                    $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    if (isset($fruits) && count($sfruits) > 0) {
                        echo "You have selected:" . join(",", $sfruits);
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fruits">Select Some Fruits</label>
                    <select style="height: 200px;" name="fruits[]" id="fruits" multiple>
                        <option value="1" disabled selected>Select Some Fruits</option>
                        <?php displayOptions($fruits, $sfruits); ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>