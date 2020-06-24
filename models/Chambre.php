<?php
class Chambre implements IQuizz {
    //Attributs
       //Encapsulation
        protected  $id_chambre;
        protected  $num_chambre;
        protected  $num_batiment;
        protected  $type_chambre;
        

// public abstract  function hydrate($row);
  
     public   function __construct($row=null){
         if($row!=null){
             $this->hydrate($row);
         }

     }
    
     public  function hydrate($row){
        $this->id=$row['id_chambre']; 
        $this->nomComplet=$row['num_chambre']; 
         
     }
      //Methodes
        //Getters
        public function getIdChambre(){
            return $this->id_chambre;
        }

        public function getNumChambre(){
            return $this->num_chambre;
        }

        public function getNumBatiment(){
            return $this->num_batiment;
        }

        public function getTypeChambre(){
            return $this->type_chambre;
        }

        //Setters
    
        public function setIdChambre($id){
             $this->id_chambre=$id;
        }

        public function setNumChambre($matricule){
            $this->num_chambre=$matricule;
       }

        public function setNumBatiment($nom){
             $this->num_batiment=$nom;
        }

        public function setTypeChambre($prenom){
            $this->nom=$type_chambre;
       }

}