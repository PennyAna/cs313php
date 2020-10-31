<?php
$dbUser = 'ta_user';
$dbPassword = 'ta_pass';
$dbName = 'scripture_ta';
$dbHost = 'localhost';
$dbPort = '5432';
try 
{
    //create PDO connection
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    //makes PDO give an exception when problems
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
    //in production, do not want to echo exception details
    echo "error connecting to DB. Details: $ex";
    die();   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scripture List</title>
</head>
<body>
    <h1>Scripture Resources</h1>
    <?php
    //for example, query executed here and data echoed as iterate query
    //in practical use, query db in completely separate file/function/build list of objects that held components of each scripture
    //then call that function from this page and iterate list that was returned and print each
    //prep statement
    //avoiding using SELECT *, considered good practice so no data we don't want, esp if changes later
    $statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
    $statement->execute();
    //go thru result
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        //var row now holds complete record for that row, access diff vals by name
        echo '<p>';
        echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
        echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
        echo '</p>';
    }
    ?>
    </div>
</body>
</html>