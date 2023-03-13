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