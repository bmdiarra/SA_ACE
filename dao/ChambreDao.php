<?php
class ChambreDao extends Manager {


    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }
    
    public function add($obj){
        $sql="";
       return $this->executeUpdate($sql)!=0;
    }
    
    public function update($obj){

    }

    public function getChambre(){
        $sql="SELECT * FROM $this->tableName";
        return $this->executeSelect($sql)!=0;
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