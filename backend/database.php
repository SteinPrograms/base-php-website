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

function database_to_chart(){
    require("chartgeneration.php");

    $database   = cnxDB() ;
    
    if ($database == false) 
        {
            echo "Erreur de connexion à la base de données " ;
            return;
        }
                        

    $requete = "select * from portfolio" ;
    $result = mysqli_query($database,$requete);

    if ( $result == FALSE )
        {
            echo "Erreur d'exécution de la requete " ;
            return;

        }



    if  ( mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
                {
                    $requete2 = "select * from data where portfolioName = '".$row['name']."'" ;
                    $result2 = mysqli_query($database,$requete2);
                    $values = array();
                    $dates =array();
                    if  ( mysqli_num_rows($result2) > 0){
                        while ($row2 = mysqli_fetch_assoc($result2)){
                            $values[] =$row2['value'];
                            $dates[] =$row2['date'];
                        }
                        
                        chart($row["name"],json_encode($dates),json_encode($values));
                    }
                    
                    
                }  
        }
    else
        {
            echo "Il n'y a pas de graphiques à afficher" ;
        }
}

function database_launch_program(){

    $database   = cnxDB() ;
    
    if ($database == false) 
        {
            echo "Erreur de connexion à la base de données " ;
            return;
        }
                        
      
    $requete = "UPDATE `program` SET `status` = '1' WHERE `id` = '1' LIMIT 1;";
    if(mysqli_query($database,$requete)){
        echo "Status updated successfully !";
    }
    
    else{
        echo "Unable to update program status";
    }

    $database -> commit() ;
}

?>