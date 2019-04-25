<?php
class Config {
    private static $instance = NULL;
    public static function getConnexion() {

        if (!isset(self::$instance)) {//self pour la var static
            try {
                self::$instance = new PDO('mysql:host=localhost;dbname=projet','root', '');//php data object
                self::$instance->setAttribute
                (PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);

            }catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
        return self::$instance;

    }
}

?>