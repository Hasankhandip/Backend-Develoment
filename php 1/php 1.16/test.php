 <?php

    $n = 12;
    $r = $n % 2;

    switch ($r) {
        case 0:
            echo "{$n} is an even number \n";
            break;
        default:
            echo "{$n} is a odd number \n";
    }


    $color = "green";
    switch ($color) {
        case "red":
            echo "red is our favorite color \n";
            break;
        case "green":
            echo "green is our favorite color \n";
            break;
        case "blue":
            echo "blue is not our favorie color \n";
            break;
        default:
            echo "This color is ok \n";
    }

    switch ($color) {
        case "red":
        case "green":
            echo "{$color} is our favorite color \n";
            break;
        case "blue":
            echo "blue is not our favorie color \n";
            break;
        default:
            echo "This color is ok \n";
    }

    // similar code
    if ("red" == $color || "green" == $color) {
        echo "{$color} is our favorite color \n";
    }
