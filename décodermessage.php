<?php
function decodage($message)
{
    $key = strlen($message) /2 ;
    $message = substr($message, 5, $key);
    $message = str_replace('@', ' ', $message);
    $message = str_replace('#', ' ', $message);
    $message = str_replace('?', ' ', $message);
    echo strrev ($message);
   
    echo ' ' ;

}

decodage('0@sn9sirppa@#?ia\'Jgtvryko1');
decodage('q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj');
decodage('aopi?sgnirts@#?sedhtg+p9l!');
?>