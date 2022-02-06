<?php

namespace Src\Classes;
use App\Model\ClassCrud;

class ClassOption extends ClassCrud{

    #Método de incluir setores
    public function InsetSetor($id)
    {

        $html="<select name='Setor' id='" . $id . "' class='form-select'>
                <option disabled selected>Setor...</option>";
        
        $BFetch = $this->selectDB(
            "*",
            "setores ",
            "",
            array()
        );
        while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
            $html.="<option value='".$Fetch['setor']."'>".$Fetch['setor']."</option>";
        }
        $html.="</select>";
        return $html;
    }
    

    #Inserir Funções no sistema
    public function InsertFuncao()
    {
        $html = "
        <div class='col-md-4'>
            <label for='func'>Função:</label>
            <select name='Funcao' id='Funcao' class='form-select' id='inputGroupSelect01'>
            <option disabled selected>Função...</option>";
            $BFetch = $this->selectDB(
                "*",
                "funcao ",
                "",
                array()
            );
            while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
                $html.="<option value='".$Fetch['funcao']."'>".$Fetch['funcao']."</option>";
            }
            $html.="
            </select>
        </div>
       ";
       return $html;
    }



    public function InsertStatus($Status=null)
    {
        
        if($Status==null){
            $Status="Selecionar..";
            $n=" disabled selected";
        }else{
            $n="value='".$Status."'";
        }
        
        $html = "
    <div class='col-md-4'>
    <select name='Status[]' class='form-select' id='inputGroupSelect01'>
        <option ".$n." >".$Status."</option>
        <option  class='verd' value='P'>P</option>
        <option class='verme' value='F'>F</option>
        <option class='cin' value='SUP'>SUP</option>
        <option value='EXT_ENC'>EXT ENC</option>
        <option value='FAC_ENC'>FAC ENC</option>
        <option class='BH' value='BH'>BH</option>
        <option value='FERIAS'>FÉRIAS</option>
        <option value='EXT'>EXT</option>
        <option value='DSR'>DSR</option>
        <option value='FERIADO'>FERIADO</option>
        <option class='cin' value='SUM'>SUM</option>
        <option value='FAC'>FAC</option>
        <option value='CURSO'>CURSO</option>
        <option value='TC_JOVEM'>TC JOVEM</option>
        <option value='F_JOVEM'>F JOVEM</option>
        <option value='DSR_JOVEM'>DSR JOVEM</option>
        <option value='FERIADO_JOVEM'>FERIADO JOVEM</option>
        <option value='FERIAS_JOVEM'>FÉRIAS JOVEM</option>
        <option value='JOVEM'>JOVEM</option>
        <option value='D'>D</option>
        <option value='DSR_OBT'>DSR OBT</option>
        <option value='INSS'>INSS</option>
        <option value='SUSP'>SUSP</option>
        <option value='TRANSF'>TRANSF</option>
    </select>
    </div>
    ";
    return $html;
    }
}
