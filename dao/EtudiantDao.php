<?php
class EtudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiant";
        $this->className="Etudiant";
    }

    public function add($obj){
        if(isset($obj['nom_etu']) && isset($obj['prenom_etu']) && isset($obj['email_etu']) && isset($obj['telephone_etu']) ){
        $sql="INSERT INTO $this->tableName (nom_etu,prenom_etu,email_etu,telephone_etu,datenaiss_etu,type_etudiant,loger,type_bourse,adresse_etu) VALUES ({$obj['nom_etu']},{$obj['prenom_etu']},{$obj['email_etu']},{$obj['telephone_etu']},{$obj['datenaiss_etu']},{$obj['type_etudiant1']},{$obj['loger']},{$obj['valeur_bourse']},{$obj['adresse_etu']})";

        return $this->executeUpdate($sql)!=0;
        }

      /*  prenom_etu:$prenom_etu,nom_etu:$nom_etu,email_etu:$email_etu,telephone_etu:$telephone_etu,adresse_etu:$adresse_etu,datenaiss_etu:$datenaiss_etu,type_bourse1:$type_bourse1,valeur_bourse:$valeur_bourse,loger:$loger,adresse_etu:$adresse_etu*/

       
    }
    
    public function update($obj){

    }

    public function getChambre(){

    }
    
    public function findByLoginAndPwd($login,$pwd){
        $sql="select * from $this->tableName where login='$login'  and pwd='$pwd' ";
        $data=$this->executeSelect($sql);
        if(count($data)==0){
              return null;
        }
        return count($data)==1?$data[0]:$data;
    
    }
   





}