<?php
$book = $_POST['txtBook'];
$chapter = $_POST['txtChapter'];
$verse = $_POST['txtVerse'];
$content = $_POST['txtContent'];
$topicIds = $_POST['chkTopics'];
require("dbConnect.php");
$db = get_db();
try {
    $query = INSERT INTO scripture(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content);
    $statement = $db->prepare($query);
    $statement->bindValue(':book', $book);
    $statement->bindValue(':chapter', $chapter);
    $statement->bindValue(':verse', $verse);
    $statement->bindValue(':content', $content);
    $statement->execute();
    $scriptureId = $db->lastInsertId("scripture_id_seq");
    foreach($topicIds as $topicId) {
        echo "Scriptureid: $scriptureId, topicId: $topicId"; 
        $statement = $db->prepare('INSERT INTO scripture_topic(scripture_id, topicId) VALUES(:scriptureId, :topicId');
        $statement->bindValue(':scriptureId', $scriptureId);
        $statement->bindValue(':topicId', $topicId);
        $statement->execute();
    }
}
catch(Exception $ex){
    echo "Error with DB. Details: $ex";
    die();
}
header("Location:showTopics.php");
die();
?>