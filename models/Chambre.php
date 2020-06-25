<?php
class Chambre implements IQuizz {
    //Attributs
       //Encapsulation
        public  $id_chambre;
        public  $num_chambre;
        public  $num_batiment;
        public  $type_chambre;
        

// public abstract  function hydrate($row);
  
     public   function __construct($row=null){
         if($row!=null){
             $this->hydrate($row);
         }

     }
    
     public  function hydrate($row){
        $this->id_chambre=$row['id_chambre']; 
        $this->num_chambre=$row['num_chambre'];
        $this->num_batiment=$row['num_batiment'];
        $this->type_chambre=$row['type_chambre']; 
         
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