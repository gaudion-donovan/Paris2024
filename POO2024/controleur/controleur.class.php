<?php
    require_once("modele/modele.class.php");

    class Controleur
    {
        protected $unModele;

        public function __construct($serveur, $bdd, $user, $mdp)
        {
            $this->unModele = new Modele($serveur, $bdd, $user, $mdp);
        }

        public function setTable($uneTable)
        {
            $this->unModele->setTable($uneTable);
        }

        public function selectAll()
        {
            return $this->unModele->selectAll();
        }

        public function insert($tab)
        {
            $this->unModele->insert($tab);
        
        
        }

        public function selectWhere($where)
        {
            return $this->unModele->selectWhere($where);
        }

        public function delete($id)
        {
            $this->unModele->delete($id);
        }
    }
?>