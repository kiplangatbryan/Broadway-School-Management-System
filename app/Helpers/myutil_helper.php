<?php


    function build_url($path_array, $key){
       
        for ($i=0; $i <= $key; $i++){
            global $base_link;
            $base_link = $base_link.'/'.$path_array[$i];
        }
        return $base_link;
    }


   

?>