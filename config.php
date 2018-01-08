<?PHP
    
    $host = "localhost";
    $user = "appceftr_login";
    $password = "1q2w3e4R";
    $database = "appceftr_login";

    $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));    
 
    
?>