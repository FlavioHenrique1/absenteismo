<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassCrud;
use Src\Classes\ClassOption;


class ControllerQualidade extends ClassCrud{

    use \Src\Traits\TraitUrlParser;
    public function __construct()
    {
        if(count($this->parseUrl())==1)
        {
            $Render=new ClassRender();
            $Render->setTitle("Pagina Qualidade");
            $Render->setDescription("Pagina Qualidade");
            $Render->setKeywords("Qualidade");
            $Render->setDir("Qualidade");
            $Render->renderLayout();
        }
        
    }

    public function PesquisarDadosBD(){
        
        $this->recVariaveis();
        $Data=date("d/m/Y",strtotime($this->Data));

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

                    if($this->Pront == null){
                        $Crud=new ClassCrud();
                        $BFetch = $Crud->selectDB(
                            "*",
                            "absenteismo ",
                            "where Setor=? and Turno=? and Data=?",
                            array($this->Setor,$this->Turno,$Data)
                        );
                    }else{
                        $Crud=new ClassCrud();
                        $BFetch = $Crud->selectDB(
                            "*",
                            "absenteismo ",
                            "where Setor=? and Turno=? and Data=? and Prontuario=?",
                            array($this->Setor,$this->Turno,$Data,$this->Pront)
                        );
                    }
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
                        $tb="
                        <form name='LancAltAbsQua' id='LancAltAbsQua' class='LancAltAbsQua' action='".DIRPAGE."Qualidade/AlterarAbQua' method='post'>
                        <td>".$n->InsertStatus($Status)."</td>";
                        $tp="      
                        <td style='visibility:hidden;'>
                            <input type='hidden' name='Id[]' value='". $Id."'>
                        </td>";
                        $tt="<button class='btn btn-warning btn-xs'>
                        <i class='fa fa-user-edit'>Alterar</i>
                        </button>
                            </form>";
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
                
            </table>
    
        </div>
            ";
            echo $tabela.$tt;
    }

    private function recVariaveis()
    {
        if(isset($_POST['DataP'])){ $this->Data=filter_input(INPUT_POST, 'DataP', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Pront'])){ $this->Pront=filter_input(INPUT_POST, 'Pront', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Turno'])){ $this->Turno=filter_input(INPUT_POST, 'Turno', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Setor'])){ $this->Setor=filter_input(INPUT_POST, 'Setor', FILTER_SANITIZE_SPECIAL_CHARS); }
        
    }

    public function AlterarAbQua(){
       /* $Id=$_POST['Id'];
    
        $n=new ClassCrud();
        for($i = 0; $i < count($Id); $i++) {
            if(isset($_POST['Status'])){
                $Status = $_POST['Status'];
                if(isset($Status[$i])){
                    $n->updateDB("absenteismo","Status=?","Id=?",array($Status[$i],$Id[$i]));
                    
                }else{  
                    
                }
            }
        }*/
        echo "Dados Alterado";
    }

}