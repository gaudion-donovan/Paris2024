<?php
    class Modele
    {
        protected $unPDO, $uneTable;

        public function __construct($serveur, $bdd, $user, $mdp)
        {
            try
            {
                $this->unPDO = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
            }
            catch(PDOException $erreur)
            {
                echo "Erreur de connexion !";
                echo "Erreur: ".$erreur;
            }
        }

        public function setTable($uneTable)
        {
            $this->uneTable = $uneTable;
        }

        public function selectAll()
        {
            if($this->unPDO != null)
            {
                $requete = "select * from ".$this->uneTable.";";
                $select = $this->unPDO->prepare($requete);
                $select->execute();
                return $select->fetchAll();
            }
            else
            {
                return null;
            }
        }

        public function insert($tab)
        {
            if($this->unPDO != null)
            {
                $champs = array();
                $donnees = array();
                foreach($tab as $cle => $valeur)
                {
                    $champs[] = ":".$cle;
                    $donnes[":".$cle] = $valeur;
                }
                $lesChamps = implode(",", $champs);
                $requete ="insert into ".$this->uneTable." values ( ".$lesChamps." );";
                $insert = $this->unPDO->prepare($requete);
                $insert->execute($donnes);
            }
            else
            {
                return null;
            }
        }

        public function selectWhere($where)
        {
            if($this->unPDO != null)
            {
                $clauses = array();
                $donnees = array();
                foreach($where as $cle=>$valeur)
                {
                    $clauses[] = $cle."=:".$cle;
                    $donnees[":".$cle] = $valeur;
                }
                $lesClauses = implode(" and ", $clauses);
                $requete = "select * from ".$this->uneTable." where ".$lesClauses.";";
                $select = $this->unPDO->prepare($requete);
                $select->execute($donnees);
                return $select->fetch();
            }
            else
            {
                return null;
            }
        }

        public function delete($id)
        {
            if($this->unPDO != null)
            {
                $clauses = array();
                $donnees = array();
                foreach($id as $cle=>$valeur)
                {
                    $clauses[] = $cle."=:".$cle;
                    $donnees[":".$cle] = $valeur;
                }
                $lesClauses = implode(" and ", $clauses);
                $requete = "delete from ".$this->uneTable." where ".$lesClauses.";";
                $delete = $this->unPDO->prepare($requete);
                $delete->execute($donnees);
            }
        }
    }
?>