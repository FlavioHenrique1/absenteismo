<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassCrud;
use Src\Classes\ClassOption;


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
                   $Status=$Fetch['Status'];
                   $n = new ClassOption();
                   if ($tData != null){
                    $tb="
                    <form name='LancAltAbs' id='LancAltAbs' action='".DIRPAGE."Home1/AlterarAb' method='post'>
                    <td>".$n->InsertStatus($Status)."</td>";
                    $tp="      
                    <td style='visibility:hidden;'>
                        <input type='hidden' name='Id[]' value='". $Id."'>
                    </td>";
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
