<?php 

class Session {

    /**
     * Ouvre une session
     */
    public function __construct() {
        session_start();
    }

    /**
     * Ajoute un élément de clé key à la session
     * @param mixed $key la clé de l'élément
     * @param mixed $value la valeur de l'élément 
     * @return void
     */
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * Retourne l'élément de clé key s'il existe 
     * @param mixed $key la clé de l'élément à récupérer
     * @throws InvalidArgumentException déclenché si la clé n'existe pas
     */
    public function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            throw new InvalidArgumentException("La clé $key n'existe pas");
        }
    }
        

    /**
     * Suuprime l'ément de clé key s'il existe
     * @param mixed $key
     * @throws \InvalidArgumentException déclenché si la clé n'existe pas
     * @return void
     */
    public function delete($key) {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        } else {
            throw new InvalidArgumentException("La clé $key n'existe pas");
        }
    }

    /**
     * Ferme la session
     * @return void
     */
    public function close() {
        session_destroy();
    }

    /**
     * Débug le contenu de la session
     * @return void
     */
    public function dumpSession() {
        foreach($_SESSION as $element) {
            var_dump($element);
        }
    }

    /**
     * Vérifie si un élement de clé key existe dans la session ou non
     * @param mixed $key
     * @return bool
     */
    public function has($key): bool {
        return isset($_SESSION[$key]);
    }

}