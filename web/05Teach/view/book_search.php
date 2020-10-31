<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Book Search | Scripture References</title>
</head>
<body>
    <header>
        <a href="index.php?action=home"><h1>Scripture Resources</h1></a>
    </header>
    <main>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <h1>Search By Book</h1>
        <p>Enter the name of a book to see all the references from that book.</p>
        <div class="inputDiv">
            <label class="required" for="bookName">Book Name: </label>
            <input type="text" id="bookName" placeholder="Book Name" name="bookName"required>
        </div>
        <input type="hidden" name="action" value="search-by-book">
        <a href='index.php?action=home' class="formButton">Go Back</a>
        <button class="formButton" type="submit">Search</button>
    </form>
    </main>
</body>
</html>