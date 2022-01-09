<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCrud;

class ControllerHome extends ClassCrud{

    use \Src\Traits\TraitUrlParser;
    public function __construct()
    {
        if(count($this->parseUrl())==1)
        {
            $Render=new ClassRender();
            $Render->setTitle("Consolidado");
            $Render->setDescription("Consolidao");
            $Render->setKeywords("home");
            $Render->setDir("home");
            $Render->renderLayout();
        }
        
    }
    
    public function BuscarDados($tData=null){
        @session_start();

        $Setor= $_SESSION["setor_usuario"];
        if(isset($_POST['DataP'])){
            $v_Data = $_POST['DataP'];
            $Data= date('d/m/Y', strtotime($v_Data));
        }else{
            $Data = $tData;
        }
        $tt="";
       #Total Mes
        $tabela= "
        <table id='tbHome' class='table table-striped table-bordered' style='width:100%'>   
        <thead>
            <tr>
            <th>Prontuário</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Data Admissão</th>
            <th>Data</th>
            <th>Setor</th>
            <th>Turno</th>
            <th>Status</th>
            </tr>
        </thead>";
                $Setor=$_SESSION['setor_usuario'];   #filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
                $Turno=$_SESSION['turno_usuario'];
                $Crud=new ClassCrud();
                $BFetch = $Crud->selectDB(
                    "*",
                    "absenteismo ",
                    "where Setor=? and Turno=? and Data=?",
                    array($Setor,$Turno,$Data)
                );
                while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
                    if ($Fetch['Status']=="P"){
                        $Classe="Class=lverd";
                    }else{
                        if ($Fetch['Status']=="F"){
                            $Classe="Class=lverm";
                        }else{
                            $Classe="";
                        }
                    }
                   $Id=$Fetch['Id'];
                   if ($tData != null){
                    $tb="
                    <form name='LancAltAbs' id='LancAltAbs' action='".DIRPAGE."Home1/AlterarAb' method='post'>
                    <td>
                    <select name='Status[]' class='form-select' id='inputGroupSelect01'>
                        <option value='".$Fetch['Status']."' >".$Fetch['Status']."</option>
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
                </td>";
                    $tp="      
                    <th>
                        <input type='hidden' name='Id[]' value='". $Id."'>
                    </th>";
                    $tt="<button class='btn btn-warning btn-xs'>
                    <i class='fa fa-user-edit'>Alterar</i>
                    </button>
                </form>";
                }else{
                    $tp="<td ".$Classe.">".$Fetch['Status']."</td>";
                    $tb="";
                    $tt="";
                }
                    $tabela.="<tr>
                <td>". $Fetch['Prontuario']."</td>
                <td>". $Fetch['Nome']."</td>
                <td>".$Fetch['Funcao']."</td>
                <td>".$Fetch['Data_Admissao']."</td>
                <td>".$Fetch['Data']."</td>
                <td>".$Fetch['Setor']."</td>
                <td>".$Fetch['Turno']."</td>".$tb.$tp."
            </tr>";
                    }
            $tabela.="
            
            <tfoot>
            </tfoot>
            
        </table>".$tt."

    </div>
        ";
        echo $tabela;
    }

    public function AlterarAb(){
        $Id=$_POST['Id'];
    
        $n=new ClassCrud();
        for($i = 0; $i < count($Id); $i++) {
            if(isset($_POST['Status'])){
                $Status = $_POST['Status'];
                if(isset($Status[$i])){
                    $n->updateDB("absenteismo","Status=?","Id=?",array($Status[$i],$Id[$i]));
                    
                }else{  
                    
                }
            }
        }
        echo "Dados Alterado";
    }

}
