<?php
    function generateString($len = 8){

        if($len<4){
        return "Error: to small pass, regenerate";
        }
        $chars="dsfjoweihfoweifnxzvnxzcEQWETHGFSAVCZXMzxclkvbmnwieqqwea1234567890";
        $numChars=strlen($chars);
        $str = '';
        for($i = 0; $i < $len; $i++){
        $str .= substr($chars, mt_rand(1,$numChars)-1, 1);   
        }
         return $str;
        }
?>