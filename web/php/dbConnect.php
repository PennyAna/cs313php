function get_db() {
   
    try {
        $db = parse_url(getenv("dbname=ec2-3-214-46-194.compute-1.amazonaws.com port=5432 user=gpyxtqyzcuqcjk password=60bc1426f9ccbafd71126491edc3d9c56c89e00e42febcd843ffc7eccb901049 sslmode=require"));
    ));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex) {
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    return $db;
}