<?php
    $dev_input = 0;
    $pwd_chars = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ|\!$%&/'*#@=?^";

    function is_set($input, $alphabet_pwd)
    {
        if (isset($input)) 
        {
            $input = $_GET["text"];
            $alphabet_pwd = str_split($alphabet_pwd, 1);

            for ($i = 0; $i < $input; $i++) {
                $single_char = $alphabet_pwd[array_rand($alphabet_pwd)];
                echo $single_char;
            }
        }
    }
?>