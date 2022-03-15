<?php
class ModelList
{
    private $code;
    private $nom;

    public function setCode($code)
    {
        $this->code=$code;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }

    public function list()
    {
        $db = new PDO('mysql:host=localhost;dbname=abi_db', 'abi_app', 'zR8a#8upO');
        $data = $db->prepare('SELECT * FROM projets');
        $data->execute();
        $test = $data->fetchAll(PDO::FETCH_ASSOC);
        return $test;
    }

    public function addProject()
    {
        $db = new PDO('mysql:host=localhost;dbname=abi_db', 'abi_app', 'zR8a#8upO');
        $data = $db->prepare('INSERT INTO projets (code, nom) VALUES ( ? , ? )');
        $array = [$this->code , $this->nom];
        $data->execute($array);
    }
    public function findNameProject()
    {
        $db = new PDO('mysql:host=localhost;dbname=abi_db', 'abi_app', 'zR8a#8upO');
        $data = $db->prepare('SELECT nom FROM projets WHERE projets.code ="'.$this->code.'"');
        $data->execute();
        $res = $data->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function saveProject()
    {
        $db = new PDO('mysql:host=localhost;dbname=abi_db', 'abi_app', 'zR8a#8upO');
        $data = $db->prepare('UPDATE projets SET nom = ? WHERE code = ?');
        $array =[$this->nom , $this->code];
        $data->execute($array);
    }
    public function deleteProject()
    {
        $db = new PDO('mysql:host=localhost;dbname=abi_db', 'abi_app', 'zR8a#8upO');
        $data = $db->prepare('DELETE FROM `projets` WHERE projets.code="'.$this->code.'"');
        $data->execute();
    }
}
