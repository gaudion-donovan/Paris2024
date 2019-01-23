<?php
    class Evenement
    {
        private $idevent, $nom;
        
        public function __construct()
        {
            $this->idevent = 0;
            $this->nom = "";
        }

        public function renseigner($tab)
        {
            if(isset($tab['idevent']))
            {
                $this->idevent = $tab['idevent'];
            }
            else
            {
                $this->idevent = 0;
            }
            $this->nom = $tab['nom'];
        }

        public function afficher()
        {
            return "<tr>
            <td>".$this->idevent."</td>
            <td>".$this->nom."</td>
            <td><a href='index.php?action=X&idutil=".$this->idevent."'><img src='images/sup.png' width='20' height='20'/></a></td>
            <td><a href='index.php?action=E&idutil=".$this->idevent."'><img src='images/edit.png' width='20' height='20'/></a></td>
            </tr>";
        }
    }
?>