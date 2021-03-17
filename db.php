<?php

$servername = 'localhost';
$username='root';
$password = 'Laki12345';
$dbname = 'blog';

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo $e->getMessage();
}

function getDataFromDatabase($sql, $connection){
    
    $statement = $connection->prepare($sql);

    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    return $statement->fetchAll();
}

function getDataFromDatabaseSingleton($sql, $connection){
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement->fetch();
}

function getDataToDatabase($sql, $connection){
    $statement = $connection->prepare($sql);
    $statement->execute();
}

?>