<?php
require_once './model/ModelList.php';


class ControllerGeneral
{
    private ModelList $model;

    public function __construct()
    {
        $this->model = new ModelList;
    }

    public function afficherListe()
    {
        $affichage = $this->model->list();
        require_once './view/list/list.php';
    }
    public function add()
    {
        if (isset($_GET['code']) && isset($_GET['nom'])) {
            $code = $_GET['code'];
            $nom = $_GET['nom'];
            $this->model->setCode($code);
            $this->model->setNom($nom);
            $this->model->addProject();
            require_once './view/action/add_commit.php';
        } else {
            require_once './view/action/add.php';
        }
    }
    public function delete($commit)
    {
        if ($commit) {
            $code = $_GET['code'];
            $this->model->setCode($code);
            $this->model->deleteProject();
            require_once'./view/action/delete_confirmed.php';
        }else{
            require_once './view/action/delete.php';
            echo $commit;
        }
    }
    public function edit($commit)
    {
        if ($commit){
            $code = $_GET['code'];
            $nom = $_GET['nom'];
            $this->model->setNom($nom);
            $this->model->setCode($code);
            $this->model->saveProject();
            require_once './view/action/edit_confirmed.php';
        }
        else
        {
            $code = $_GET['code'];
            $this->model->setCode($code);
            $nom = $this->model->findNameProject();
            require_once './view/action/edit.php';
        }
    }
}
