<?php
    require_once ("../controleur/controleur.class.php");

    class Client extends Utilisateur
    {
        private $adresse, $statut;

        public function __construct()
        {
            parent::__construct();
            $this->adresse = "";
            $this->statut = "";
        }

        public function renseigner($tab)
        {
            parent::renseigner($tab);
            $this->adresse = tab['adresse'];
            $this->statut = tab['statut'];
        }

        public function afficher()
        {
            return parent::afficher()."<tr><th>Adresse</th><td>".$this->adresse."</td></tr>
            <tr><th>Statut</th></td><td>".$this->statut."</td></tr>";
        }

        public function serialiser()
        {
            $tab = array();
            $tab = parent::serialiser();
            $tab['adresse'] = $this->adresse;
            $tab['statut'] = $this->statut;
            return $tab;
        }

        public function getAdresse()
		{
			return $this->adresse;
        }
        
		public function getStatut()
		{
			return $this->statut;
        }
        
        public function setAdresse()
		{
			$this->adresse = $adresse;
        }
        
		public function setStatut()
		{
			$this->statut = $statut;
		}
    }
?>