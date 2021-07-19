<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="http://localhost/ltweb/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Template style -->
<link rel="stylesheet" href="public/css/dist/css/style.css">
<link rel="stylesheet" href="public/css/dist/et-line-font/et-line-font.css">
<link rel="stylesheet" href="public/css/dist/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="dist/weather/weather-icons.min.css">
<link type="text/css" rel="stylesheet" href="dist/weather/weather-icons-wind.min.css">

<body>
<?php
            require_once "./mvc/views/pages/".$data["Page"].".php";
        ?>
         
</body>

</html>