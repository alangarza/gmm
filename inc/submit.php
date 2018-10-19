<?php
if(isset($_POST['submit'])){
    $generoArr = $_POST['genero'];
    $edadArr = $_POST['edad'];
    $estadoArr = $_POST['estado'];

    if(!empty($generoArr)){
        for($i = 0; $i < count($generoArr); $i++){
            if(!empty($generoArr[$i])){
                $genero = $generoArr[$i];
                $edad = $edadlArr[$i];
                $estado = $estadolArr[$i];

                
                //database insert query goes here

                
            }
        }
    }
}
echo($generoArr);

?>
