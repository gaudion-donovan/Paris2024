<?php
    class Utilisateur
    {
        protected $idutil, $nom, $prenom, $email, $mdp, $typecompte;

        public function __construct()
        {
            $this->idutil = 0;
            $this->nom = "";
            $this->prenom = "";
            $this->email = "";
            $this->mdp = "";
            $this->typecompte = "";
        }

        public function renseigner($tab)
        {
            if(isset($tab['idutil']))
            {
                $this->idutil = $tab['idutil'];
            }
            else
            {
                $this->idutil = 0;
            }
            $this->nom = $tab['nom'];
            $this->prenom = $tab['prenom'];
            $this->email = $tab['email'];
            $this->mdp = $tab['mdp'];
            $this->typecompte = $tab['typecompte'];
        }

        public function afficher()
        {
            return "<tr>
            <td>".$this->idutil."</td>
            <td>".$this->nom."</td>
            <td>".$this->prenom."</td>
            <td>".$this->email."</td>
            <td>".$this->typecompte."</td>
            <td><a href='index.php?action=X&idutil=".$this->idutil."'><img src='images/sup.png' width='20' height='20'/></a></td>
            <td><a href='index.php?action=E&idutil=".$this->idutil."'><img src='images/edit.png' width='20' height='20'/></a></td>
            </tr>";
        }

        public function verif_mdp($unMdp)
        {
            if(strlen($this->mdp) >=3 && $this->mdp == $unMdp)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function serialiser()
        {
            $tab = array();
            $tab['idutil'] = $this->idutil;
            $tab['nom'] = $this->nom;
            $tab['prenom'] = $this->prenom;
            $tab['email'] = $this->email;
            $tab['mdp'] = $this->mdp;
            $tab['typecompte'] = $this->typecompte;
            return $tab;
        }

        public function getIdUtil()
		{
			return $this->idutil;
		}
		public function getNom()
		{
			return $this->nom;
		}
		public function getPrenom()
		{
			return $this->prenom;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getMdp()
		{
			return $this->mdp;
		}
		public function getTypeCompte()
		{
			return $this->typecompte;
		}
		public function setIdUtil($idutil)
		{
			$this->idutil = $idutil;
		}
		public function setNom($nom)
		{
			$this->nom = $nom;
		}
		public function setPrenom($prenom)
		{
			$this->prenom = $prenom;
		}
		public function setEmail($email)
		{
			$this->email = $email;
		}
		public function setMdp($mdp)
		{
			$this->mdp = $mdp;
		}
		public function setTypeCompte($typecompte)
		{
			$this->typecompte = $typecompte;
		}
    }
?>