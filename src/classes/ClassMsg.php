<?php
namespace Src\Classes;
use App\Model\ClassCrud;

class ClassMsg extends ClassCrud{

    public function Msg($Setor,$Turno,$v_data){
        $b = $this->selectDB("*"," absenteismo ","where Data=? and Setor=? and Turno=?",array($v_data,$Setor,$Turno));
        $TotalDia=$b->rowCount();
        if($TotalDia<="0"){
            $Msg=array(
                "Pendente preenchimento ".$Turno." dia ".$v_data."</h4>"
            );
        }
            $BFetch=$this->selectDB("*","dados ","where Status=?",array("Pendente"));

            if($Row=$BFetch->rowCount()>0){
                while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
                    if(!isset($Msg)){
                        $Msg=array(
                            "Associados ".$Fetch['Nome']."  não acompanhado em nenhum Setor");
                    }else{
                    array_push($Msg,"Associados ".$Fetch['Nome']."  não acompanhado em nenhum Setor");   
                    }
                }
            }
        return $Msg;


    }

}