function get_db() {
    $db = NULL;
    try {
        //default Heroku Postgres configuration URL
        $dbURL = getenv('DATABASE_URL');
        }
        //get var parts of DB connect from URL
        $dbopts = parse_url($dUrl);
        $dbHost = $dbopts["host"];
        $dbPort = dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"], '/');
        //create PDO connection_aborted
        $db = new PDO(pgsql:host=$dbHost;port=$dbPort;dbname=$dbName, $dbUser, $dbPassword);
        //makes PDO give exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex) {
        //do not do this in production
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    return $db;
}