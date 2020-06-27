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
        $sql="UPDATE $this->tableName SET num_batiment = '{$obj['num_batiment']}', type_chambre = '{$obj['type_chambre']}' WHERE id_chambre = '{$obj['id_chambre']}' ";
        var_dump($sql);

       /* $sql="UPDATE $this->tableName SET num_batiment= :num_batiment, type_chambre= :type_chambre WHERE id=:id_chambre ";
        $sql->execute(array(
            'id_chambre' => $obj['id_chambre'],
            'num_batiment' => $obj['num_batiment'],
            'type_chambre' => $obj['type_chambre']
        ));*/
        
        $this->executeUpdate($sql);
        //var_dump($this->executeUpdate($sql));
    }

    

    public function getChambre(){
        return $this->findAll(); 
    }

    public function deleteChambre($id){
        return $this->delete($id);
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