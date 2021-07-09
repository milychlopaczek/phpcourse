<?php
function connect()
{
    require 'lib/connect.php';
    try{
    $pdo = new PDO("mysql:dbname=$db; host=$host", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
    }
    catch(PDOException $e)
    {
        echo"Error ".$e->GetMessage() ;
    }
}
function get_pets($limit=null)
{
        $pdo=connect();
        $query ='SELECT * from pet';
        if($limit>0)
        {
            $query = $query.' LIMIT :rl';
            $stmt=$pdo->prepare($query);
            $stmt->bindParam('rl', $limit, PDO::PARAM_INT);
            $stmt->execute();
            $pets=$stmt->FetchAll();
            return $pets;
        }
        else
        {
            $stmt=$pdo->prepare($query);
            $stmt->execute();
            $pets=$stmt->FetchAll();
            return $pets;

        }
}

function save_pets($petsToSave)
{
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
}
function get_pet($id)
{
    $pdo=connect();
    $query = 'SELECT * FROM pet WHERE pet_id = :idVal';
    $stmt=$pdo->prepare($query);
    $stmt->bindParam('idVal', $id);
    $stmt->execute();
    return $stmt->Fetch();
}
