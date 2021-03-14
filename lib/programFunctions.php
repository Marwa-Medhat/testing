<?php
// require_once("newsession.php");
// require_once("config.php");
class programFunctions
{
    static function increase_counter()
    {
    $counter = programFunctions::display_counter();
    $counter++;
    $file = fopen("file","w");
    fwrite($file , $counter);
    fclose($file);
    
    
    }
    static function display_counter()
    {
    if(file_exists("file"))
    {
        $counter = (int)file_get_contents("file");
    }
    else 
    {
        $counter = 0;
    }
     return $counter;
    }

}