<?php
class connexion
{
    public function connectbase()
    {
        $dbm=new PDO ('mysql:host=localhost;dbname=projet','root','root');
        return $dbm;
    }
}

?>