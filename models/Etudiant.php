<?php
class Etudiant implements IQuizz {
    //Attributs
       //Encapsulation
        protected  $id;
        protected  $matricule;
        protected  $nom;
        protected  $prenom;
        protected  $pwd;
        protected  $login;
        protected  $profil;
        protected  $id_chambre;
        protected  $email;
        protected  $datenaissance;
        protected  $loger;
        protected  $type_bourse;

// public abstract  function hydrate($row);
  
     public   function __construct($row=null){
         if($row!=null){
             $this->hydrate($row);
         }

     }
    
     public  function hydrate($row){
        $this->id=$row['id']; 
        $this->nomComplet=$row['nomComplet']; 
        $this->profil=$row['profil']; 
     }
      //Methodes
        //Getters
        public function getId(){
            return $this->id;
        }

        public function getMatricule(){
            return $this->matricule;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getChambre(){
            return $this->id_chambre;
        }

        public function getPwd(){
            return $this->pwd;
        }

        public function getLogin(){
            return $this->login;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getDatenaissance(){
            return $this->datenaissance;
        }

        public function getLoger(){
            return $this->loger;
        }

        public function getTypebourse(){
            return $this->type_bourse;
        }

        public function getProfil(){
            return $this->profil;
        }

        //Setters
    
        public function setId($id){
             $this->id=$id;
        }

        public function setMatricule($matricule){
            $this->matricule=$matricule;
       }

        public function setNom($nom){
             $this->nom=$nom;
        }

        public function setPrenom($prenom){
            $this->nom=$prenom;
       }

        public function setPwd($pwd){
            $this->pwd=$pwd;
        }

        public function setLogin($login){
             $this->login=$login;
        }

        public function setChambre($chambre){
           $this->id_chambre=$statut;
        }

        public function setEmail($email){
            $this->email=$avatar;
        }

        public function setProfil($profil){
            $this->profil=$profil;
        }

        public function setDatenaissance($profil){
            $this->datenaissance=$profil;
        }

        public function setLoger($loger){
            $this->loger=$loger;
        }

        public function setType_bourse($typebourse){
            $this->type_bourse=$typebourse;
        }
}