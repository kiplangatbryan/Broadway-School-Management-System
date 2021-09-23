<?php

$emojis = [
    'happy' => 😃, 
    'sad' => 😢,
    'clap' => 👏👏,
    'tick' => ✔,
];

function render_emoji($key){
    if (isset($emojis[$key]))
        return $emojis[$key];
    return false;

}



?>