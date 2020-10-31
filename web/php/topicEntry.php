<?php
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic Entry</title>
</head>
<body>
    <div>
    <h1>Enter New Scriptures and Topics</h1>
    <form id="mainForm" action="insertTopic.php" method="POST">
        <input type="text" id="txtBook" name="txtBook"></input>
        <label for="txtBook">Book</label>
        <br><br>
        <input type="text" id="txtChapter" name="txtChapter"></input>
        <label for="txtChapter">Chapter</label>
        <br><br>
        <input type="text" id="txtVerse" name="txtVerse"></input>
        <label for="txtVerse">Verse</label>
        <br><br>
        <label for="txtContent">Content:</label><br>
        <textarea id="txtContent" name="txtContent" rows="4" cols="50"></textarea>
        <br><br>
        <label>Topics:</label><br>
        <?php
        try {
            $statement = $db->prepare('SELECT id, name FROM topic');
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $id = $row['id'];
                $name = $row['name'];
                echo "<input type='checkbox' name='chkTopics[]' id='chkTopics$id' value='$id'>";
                echo "label for='chkTopics$id'>$name</label><br>";
                echo "\n";
            }
        }
        catch(PDOException $ex){
            echo "Error connecting to DB. Details: $ex";
            die();
        }
        ?>
        <br>
        <input type="submit" value="Add to Database">
        </form>
    </div>
</body>
</html>