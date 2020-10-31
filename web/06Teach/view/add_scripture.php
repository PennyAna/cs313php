<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
    <title>Home | Scripture References</title>
</head>
<body>
    <header>
        <a href="index.php?action=home"><h1>Scripture Resources</h1></a>
    </header>
    <main>
        <h1><?php echo $message; ?></h1>
        <?php echo $scripturesList; $message = ""?>
        <form id="scriptureform">
            <label for="book">Book</label>
            <input type="text" id="book" name="book">
            <label for="chapter">Chapter</label>
            <input type="text" id="chapter" name="chapter">
            <label for="verseFrom">Verse</label>
            <input type="text" id="verseFrom" name="verseFrom">
            <label for="content">Content</label>
            <input type="text" id="content" name="content">
            <?php echo $topicBoxes; ?>
            <button id="save-scripture">Save Scripture</button>
        </form>
    </main>
</body>
</html>