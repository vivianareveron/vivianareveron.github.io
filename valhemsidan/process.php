<?php

$name = (isset($_POST['namn'])) ? $_POST['namn']:null;
echo $name;

$riksdag = $_POST["riksdag"];
$personRiksdag = $_POST["personRiksdag"];
$kommun = $_POST["kommun"];
$personKommun = $_POST["personKommun"];
$landsting = $_POST["landsting"];
$personLandsting = $_POST["personLandsting"];

try {
    $db = new PDO("mysql:host=localhost;dbname=thomassons_eval;", "thomassons_marie", "marie"); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    var_dump($db);
}
catch (Exception $exception){
    echo "Something went wrong, check error below: <br><br>";
    echo $exception;
}

try{
    $insert = $db->query("INSERT INTO valstatistik (riksdag, personRiksdag, kommun, personKommun, landsting, personLandsting) VALUES ('$riksdag', '$personRiksdag', '$kommun', '$personKommun', '$landsting', '$personLandsting')");
    /*$results=$db->query("SELECT * FROM valresultat");
    echo "Query Worked!";*/
}
catch(Exception $exception){
    echo "Query failed, see below: <br><br>";
    echo $exception;
}

/*while ($row = $result->fetch())
    
{
    echo "<h1>" .$row['namn']."</h1>";
    echo "<p>" .$row['distrikt']. "</p>";
    echo "<p>" .$row['eget']. "</p>";
}*/

header("Location: thankyou.php");



?>