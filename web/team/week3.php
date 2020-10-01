<?php 


$majors = Array();

Class Major 
{
    public $name;
    public $abbreviation;
}

$major = new Major();
$major->name = "Computer Science";
$major->abbreviation = "CS";
$majors[] = $major;

$major1 = new Major();
$major1->name = "Web Design and Development";
$major1->abbreviation = "WDD";
$majors[] = $major1;

$major2 = new Major();
$major2->name = "Computer Information Technology";
$major2->abbreviation = "CIT";
$majors[] = $major2;

$major3 = new Major();
$major3->name = "Computer Engineering";
$major3->abbreviation = "CE";
$majors[] = $major3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <main>
        <form action="./week3-result.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Email">
            <p>Major</p>
            <?php 
            foreach($majors as $major){
                echo '<input type="radio" name="major" value="' . $major->name . "-" . $major->abbreviation . '">
                <label for="' . $major->name . '">'. $major->name . "-" . $major->abbreviation . '</label>
                <br>';
            }            
            ?>
            <label for="comments">Comments</label>
            <br>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
            <p>What continents have you visited?</p>
            <input type="checkbox" id="north-america" name="continents[]" value="NA">
            <label for="north-america">North America</label>
            <br>
            <input type="checkbox" id="south-america" name="continents[]" value="SU">
            <label for="south-america">South America</label>
            <br>
            <input type="checkbox" id="europe" name="continents[]" value="EU">
            <label for="europe">Europe</label>
            <br>
            <input type="checkbox" id="asia" name="continents[]" value="AS">
            <label for="asia">Asia</label>
            <br>
            <input type="checkbox" id="australia" name="continents[]" value="AU">
            <label for="australia">Australia</label>
            <br>
            <input type="checkbox" id="africa" name="continents[]" value="AF">
            <label for="africa">Africa</label>
            <br>
            <input type="checkbox" id="antartica" name="continents[]" value="AN">
            <label for="antartica">Antartica</label>
            <br>
            <button class="submit-button" type="submit">Send My Info</button>
        </form>
    </main>
</body>
</html>