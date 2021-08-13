<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'Guest';
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HTTP</title>
</head>

<body>

    <h1>Welcome <?php echo $name; ?>!</h1>


    <!-- Query String URL => http://localhost/sr9/http_get.php?name=scott&email=scott@gmail.com -->
    <!-- // action => ទីតាំងដែលត្រូវផ្ញើ ('http://localhost/filename.php'); -->
    <!-- // => default value (PHP_SELFT) -->


    <!-- // method => របៀប វិធីសាស្ត្រដែលត្រូវផ្ញើ (GET or POST) -->
    <!-- // => default value (GET) -->


    <!-- // localost/filename.php?name="input from user"&email="input from user"; -->
    <form action="http://localhost/sr9/servers.php" method='POST'>
        <lable>Name :</lable>
        <input type="text" name="name">
        <br />
        <lable>Email :</lable>
        <input type="email" name="email">
        <input type="hidden" name="code" value="testing">
        <br />
        <button>Send</button>
    </form>
</body>

</html>