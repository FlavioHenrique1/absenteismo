<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCrud;

class ControllerConsolidado extends ClassCrud{

    use \Src\Traits\TraitUrlParser;
    public function __construct()
    {
        if(count($this->parseUrl())==1)
        {
            $Render=new ClassRender();
            $Render->setTitle("Consolidado");
            $Render->setDescription("Consolidao");
            $Render->setKeywords("Consolidado");
            $Render->setDir("consolidado_geral");
            $Render->renderLayout();
        }
    }
    public function BuscarDados($Data=null){
        @session_start();
        $Setor= $_SESSION["setor_usuario"];
        if(isset($_POST['DataP'])){
            $v_Data = $_POST['DataP'];
            $Data= date('d/m/Y', strtotime($v_Data));
        }
       #Total Mes
        $v_data= $Data;
        $Data= date('d/m/Y', strtotime($v_data));
        $V_Mes=  date('M', strtotime($Data));
        $b = $this->selectDB("*"," absenteismo ","where Mes=? and Setor=? and Status= ?",array($V_Mes,$Setor,"P"));
        $P=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Mes=? and Setor=?",array($V_Mes,$Setor));
        $C=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Mes=?",array("F",$Setor,$V_Mes));
        $F=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Mes=?",array("INSS",$Setor,$V_Mes));
        $Inss=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Mes=?",array("COV-19",$Setor,$V_Mes));
        $Covid=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Mes=?",array("D",$Setor,$V_Mes));
        $D=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status like  ? and Setor=? and Mes=?",array("%SUM%",$Setor,$V_Mes));

        $SUM=$b->rowCount();
        $QLiq= $C - $Inss - $Covid;
        if ($QLiq <="0"){
            $A="0%";
        }else{
            $A = round(($F/$QLiq)*100, 2, PHP_ROUND_HALF_DOWN) ."%";
        }
        #-------------------------------------------------
        #Total dia
        $b = $this->selectDB("*"," absenteismo ","where Data=? and Setor=?",array($v_data,$Setor));
        $PD=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Data=? and Setor=? and Status= ?",array($v_data,$Setor,"P"));
        $PPD=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Setor=? and Data=?",array($Setor,$v_data));
        $CD=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Data=?",array("F",$Setor,$v_data));
        $FD=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Data=?",array("INSS",$Setor,$v_data));
        $InssD=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Data=?",array("COV-19",$Setor,$v_data));
        $CovidD=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Data=?",array("D",$Setor,$v_data));
        $DD=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status like  ? and Setor=? and Data=?",array("%SUM%",$Setor,$v_data));
        $SUMD=$b->rowCount();
        $QLiqD= $PD - $Inss - $Covid;
    if ($QLiqD <="0"){
            $AD = "0%";
    }else{
        $AD = round(($FD/$QLiqD)*100, 2, PHP_ROUND_HALF_DOWN) ."%";
    }
        #------------------------------------------------------
        #Total turno
        
        $turno = $_SESSION["turno_usuario"];
        $b = $this->selectDB("*"," absenteismo ","where Data=? and Setor=? and Turno=?",array($v_data,$Setor,$turno));
        $PT=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Data=? and Setor=? and Turno=? and Status= ?",array($v_data,$Setor,$turno,"P"));
        $PPT=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Setor=? and Data=? and Turno=?",array($Setor,$v_data,$turno));
        $CT=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Data=? and Turno=?",array("F",$Setor,$v_data,$turno));
        $FT=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Data=? and Turno=?",array("INSS",$Setor,$v_data,$turno));
        $InssT=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Data=? and Turno=?",array("COV-19",$Setor,$v_data,$turno));
        $CovidT=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status= ? and Setor=? and Data=? and Turno=?",array("D",$Setor,$v_data,$turno));
        $DT=$b->rowCount();
        $b = $this->selectDB("*"," absenteismo ","where Status like  ? and Setor=? and Data=? and Turno=?",array("%SUM%",$Setor,$v_data,$turno));
        $SUMT=$b->rowCount();
        $QLiqT= $PT - $Inss - $Covid;
        if ($QLiqT <="0"){
            $AT = "0%";
            $corT = "Class=lverm";
            $corD = "Class=lverm";
            $cor = "Class=lverm";
            echo "<h4 Class=lverm >Pendente preenchimento ".$turno." dia ".$v_data."</h4>";
        }else{
        $AT = round(($FT/$QLiqT)*100, 2, PHP_ROUND_HALF_DOWN) ."%";
        if($F==0){
            $cor = "Class=lverd";
        }else{
            if(($F/$QLiq)*100>=3){
                $cor = "Class=lverm";
            }else{
                $cor = "Class=lverd";
            }
        }
        if(($FD/$QLiqD)*100>=3){
            $corD = "Class=lverm";
        }else{
            $corD = "Class=lverd";
        }
        if(($FT/$QLiqT)*100>=3){
            $corT = "Class=lverm";
        }else{
            $corT = "Class=lverd";
        }
        }   
        
        $tabela= "
        <table id='tbHome' class='table table-striped table-bordered' style='width:100%'>   
        <thead>
            <tr>
                <th>".$v_data."</th>
                <th>Total Mês</th>
                <th>Total Dia</th>
                <th>Total ".$turno."</th>

            </tr>
        </thead>
                <tr>
                <th>Absenteísmo</th>
                <th ". $cor .">".$A."</th>
                <th ". $corD .">".$AD."</th>
                <th ". $corT .">".$AT."</th>
                </tr><tr>
                <th>Quadro Líquido</th>
                <th>".$QLiq."</th>
                <th>".$QLiqD."</th>
                <th>".$QLiqT."</th>
                </tr>
                <tr>
                <th>Faltas / Atestados</th>
                <th Class=lverm>".$F."</th>
                <th Class=lverm>".$FD."</th>
                <th Class=lverm>".$FT."</th>
                </tr>
                <tr>
                <th>Quadro Total</th>
                <th>".$C."</th>
                <th>".$CD."</th>
                <th>".$CT."</th>
                </tr>
                <tr>
                <th>Inativo(INSS)</th>
                <th>".$Inss."</th>
                <th>".$InssD."</th>
                <th>".$InssT."</th>
                </tr>
                <tr>
                <th>Sumido</th>
                <th>".$SUM."</th>
                <th>".$SUMD."</th>
                <th>".$SUMT."</th>
                </tr>
                <tr>
                <th>Demitido</th>
                <th>".$D."</th>
                <th>".$DD."</th>
                <th>".$DT."</th>
                </tr>
                <tr>
                <th>Afastado (COVID-19)</th>
                <th>".$Covid."</th>
                <th>".$CovidD."</th>
                <th>".$CovidT."</th>
                </tr>
                <tr>
                <th>Presente</th>
                <th Class=lverd>".$P."</th>
                <th Class=lverd>".$PPD."</th>
                <th Class=lverd>".$PPT."</th>
                </tr>
        <tfoot>
        <tr>
        </tr>
        </tfoot>
    </table>
        ";
        echo $tabela;
    }
}