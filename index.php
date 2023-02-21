<?php
/* function generatePassword($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters))];
        }

        return $password;
    }

    $password = '';

    if (isset($_GET['length'])) {
        $password = generatePassword($_GET['length']);
        // echo '<p>Your password is: ' . $password . '</p>';
    }*/


include  __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW random</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div>

        <h1>Password Generator</h1>
        <form method="get">
            <label for="length">Password length:</label>
            <input type="text" placeholder="Inserisci un numero" name="length" id="length" required>
            <button type="submit">Generate</button>

            <?php echo '<p>La password generata è:  <span>' . $password . ' </span></p>' ?>

        </form>
    </div>

</body>

</html>