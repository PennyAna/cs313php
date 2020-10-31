function get_db() {
   
    try {
        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = newPDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"], 
        $db["port"], 
        $db["user"], 
        $db["pass"], 
        ltrim($db["path"],"/") 
    ));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex) {
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    return $db;
}