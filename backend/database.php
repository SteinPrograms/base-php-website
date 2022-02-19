<?php
function cnxDB(){
    try{
        $connexion = mysqli_connect("localhost", "hugodemenez", "password" , "stein");
    }
    catch(exception $e){
        return;
    }

    // si jamais la connexion n'était obtenue
    if ( ! $connexion )  
    {
        return;  // fin du programme en affichant un message d'erreur
    } 
    else{
        return $connexion;
    }
}


function database_update_program(){

    $database   = cnxDB() ;
    
    if ($database == false){
            echo "Erreur de connexion à la base de données " ;
            return;
        }

    $requete = "select * from program" ;
    $result = mysqli_query($database,$requete);

    if ( $result == FALSE ){
            echo "Erreur d'exécution de la requete " ;
            return;
        }

    if  ( mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                    $status = $row['status'];
                    if ($status == 0){
                        $requete = "UPDATE `program` SET `status` = 1 WHERE `id` = '1' LIMIT 1;";
                        if ($database->query($requete) === TRUE) {
                            echo "Program running successfully";
                        } else {
                            echo "Error updating record: " . $database->error;
                        }
                    }
                    else{
                        $requete = "UPDATE `program` SET `status` = 0 WHERE `id` = '1' LIMIT 1;";
                        if ($database->query($requete) === TRUE) {
                            echo "Program stopped successfully";
                        } else {
                            echo "Error updating record: " . $database->error;
                        }
                    }                    
                }  
        }
      $database->close();
}

?>