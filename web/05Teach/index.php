<?php
session_start();
require_once 'library/connections.php';
require_once 'library/functions.php';
require_once 'model/notes-model.php';

$message = "";
$showButton = false;

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
  if ($action == NULL){
      $action = 'home';
  }
 }

switch ($action){
case 'home':
    $scriptures = getAllNotes();
    $scripturesList = scripturesGrid($scriptures);
    include 'view/home.php';
    break;
case 'search-view':
    include 'view/book_search.php';
break;
case 'search-by-book':
    $bookName = filter_input(INPUT_POST, 'bookName', FILTER_SANITIZE_STRING);
    $scriptures = getScripturesByBook($bookName);
    $message = "Search Results:";
    $showButton = true;
    if (empty($scriptures)){
        $message = "Nothing found...";
    }
    $scripturesList = scripturesGrid($scriptures);
    include 'view/home.php';
break;
case 'view-scripture':
    $scriptureId = filter_input(INPUT_GET, 'scripture-id', FILTER_SANITIZE_STRING);
    $scripture = getScriptureById($scriptureId);
    $message = "Scripture Details:";
    $showButton = true;
    if (empty($scripture)){
        $message = "Nothing found...";
    }
    $scripturesList = scriptureDetails($scripture);
    include 'view/home.php';
break;
default:
    $scriptures = getAllNotes();
    $scripturesList = scripturesGrid($scriptures);
    include 'view/home.php';
break;
}

?>