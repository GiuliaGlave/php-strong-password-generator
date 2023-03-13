 <?php

    function GeneratedPassword($num) {

        $characters_allowed = "*?!%/=+@#._-0123456789abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ";

        $password = "";

        for ($i = 0; $i < $num; $i++) {
            $random_characters = rand(0, strlen($characters_allowed)-1);
            $password .= $characters_allowed[$random_characters];
        }

        return $password;
    };


?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Strong Password Generator</title>
 </head>

 <body>

     <form method="GET">
         <input type="total-characters" id="total-characters" name="total-characters">
         <button type="submit">genera pssword</button>
     </form>

     <p>

         <?php 
          
        if(isset($_GET["total-characters"])){

            $total_characters = $_GET["total-characters"];
            $generated_password = GeneratedPassword($total_characters);

            echo "<span>la nuova password è: $generated_password</span>" ;

        } else {
            echo "<span>inserisci il numero dei caratteri desiderati</span>";
        }
       


    ?></p>

 </body>

 </html>