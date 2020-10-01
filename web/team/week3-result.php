<?php

$userName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$userEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$userMajor = filter_input(INPUT_POST, 'major', FILTER_SANITIZE_STRING);
$userComments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);

$map = Array();
$map['NA'] = "North American";
$map['SU'] = "South American";
$map['EU'] = "Europe";
$map['AS'] = "Asia";
$map['AU'] = "Australia";
$map['AF'] = "Africa";
$map['AN'] = "Antartica";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Information</title>
</head>
<body>
    <main>
    <h1><?php echo $userName; ?></h1>
    <p>Send me an email to <a href="mailto:<?php echo $userEmail;?>"><?php echo $userEmail;?></a></p>
    <p>My major is <?php echo $userMajor; ?></p>
    <p>This is what I have to say: <?php echo $userComments; ?></p>
    <p>The continents I've visited are: <?php 
        if (isset($_POST['continents']) && !empty($_POST['continents'])) {
            foreach ($_POST['continents'] as $continent) {
                echo $map[$continent] . " ";
            }
        } else {
            echo "I don't travel that much...";
        }
         ?>.</p>
    </main>
</body>
</html>