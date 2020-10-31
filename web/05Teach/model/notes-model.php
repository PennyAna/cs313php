<?php

/*
 * Notes model
 */

//Retrieve query results from database
function getAllNotes(){
    // Create a connection object using the heroku connection function
    $db = herokuConnect();
    // The SQL statement
    $sql = 'SELECT * FROM scriptures';
    // Create the prepared statement using the heroku connection
    $stmt = $db->prepare($sql);
    // Run the query
    $stmt->execute();
    // Retrieve the results of the query
    $response = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $response;
}

function getScripturesByBook($bookName){
    // Create a connection object using the heroku connection function
    $db = herokuConnect();
    // The SQL statement
    $sql = "SELECT * FROM scriptures WHERE book ILIKE '%$bookName%'";
    // Create the prepared statement using the heroku connection
    $stmt = $db->prepare($sql);
    // The next line replaces the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    //$stmt->bindValue(':book', $bookName, PDO::PARAM_STR);
    // Query the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $response;
}

function getScriptureById($scriptureId){
    // Create a connection object using the heroku connection function
    $db = herokuConnect();
    // The SQL statement
    $sql = 'SELECT * FROM scriptures WHERE id = :scriptureId';
    // Create the prepared statement using the heroku connection
    $stmt = $db->prepare($sql);
    // The next line replaces the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':scriptureId', $scriptureId, PDO::PARAM_STR);
    // Query the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $response;
}

?>