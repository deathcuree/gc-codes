<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Integration Activity</title>
</head>

<body>
    <h1>Welcome to our PHP Integration Activity!</h1>

    <p><?php echo "This is a dynamic paragraph generated using PHP."; ?></p>

    <p>
        <?php
        date_default_timezone_set('Asia/Manila'); // Set the time zone to Philippine time

        $currentTime = date("H:i");

        // clue: use if-else condition using the variables
        ?>
    </p>

    <footer>
        <?php echo "Copyright © Gordon College " . date("Y") . " by: Grace Nicao S. Andaya"; ?>
    </footer>
</body>

</html>