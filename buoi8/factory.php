<?php
interface Film{
    function getName();
}

class RomanticFilm implements Film{
    private $name = 'romantic';
    function getName(){
        return $this->name;
    }
}
class ActionFilm implements Film{
    private $name = 'action';
    function getName(){
        return $this->name;
    }
}


class FilmFactory{
    const ROMANTIC = 'romantic';
    const ACTION = 'action';

    public static $film = 'romantic';

    static function Film($film){
        self::$film = $film;
        if(self::$film == self::ROMANTIC){
            return new RomanticFilm;
        }
        else{
            return new ActionFilm;
        }
    }
}

$actionFilm = FilmFactory::Film('action');

$romanticFilm = FilmFactory::Film('romantic');

$r = new RomanticFilm();

echo "<pre>";
var_dump($romanticFilm);
var_dump($r);

?>