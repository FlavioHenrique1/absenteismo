<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCrud;
use mysqli;

class ControllerAddUsuarios extends ClassCrud{

    use \Src\Traits\TraitUrlParser;
    public $error;
    public function __construct()
    {
        if(count($this->parseUrl())==1)
        {
            $Render=new ClassRender();
            $Render->setTitle("Adicionar a lista de usuarios");
            $Render->setDescription("Adicionar de Usuarios");
            $Render->setKeywords("Adicionar de Usuarios");
            $Render->setDir("adicionar_associado");
            $Render->renderLayout();
        }
    }
    public function validarDados(){
        $campos = Array("Prontuario", "Turno","Setor");
                
        foreach ($campos as $campo){
            
            if (empty($_POST[$campo])){
                $error= "<p>Campo $campo em branco</p>";
                return false;
            }
            return true;
        }

    }
    private function recVariaveis()
    {
        if(isset($_POST['Nome'])){ $this->Nome=filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Prontuario'])){ $this->Prontuario=filter_input(INPUT_POST, 'Prontuario', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['dataadm'])){ $this->dataadm=filter_input(INPUT_POST, 'dataadm', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Funcao'])){ $this->funcao=filter_input(INPUT_POST, 'Funcao', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['telef'])){ $this->telef=filter_input(INPUT_POST, 'telef', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Turno'])){ $this->Turno=filter_input(INPUT_POST, 'Turno', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Setor'])){ $this->Setor=filter_input(INPUT_POST, 'Setor', FILTER_SANITIZE_SPECIAL_CHARS); }
        
    }
    public function LancarAssociados(){

        if ($this->validarDados()==false){
            echo "Favor preencher todos os campos!";
            }else{
            $erro = false;
            $this->recVariaveis();
            $BFetch=$this->selectDB("*","dados","where Prontuario=?",array($this->Prontuario));
            $Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC);
                if($Fetch['Status'] == "Ativo"){
                    echo "<script>alert('Usuário Ja tem cadastro no sistema!');</script>";
                }else{
                    @session_start();
                    $this->updateDB(
                        "dados",
                        "Status=? , Setor=? , Turno=? , Tel=? , Alterado=?",
                        "Prontuario=?",
                        array(
                            "Ativo",
                            $this->Setor,
                            $this->Turno,
                            $this->telef,
                            $_SESSION['Prontuario_usuario']." ".date('d/m/Y'),
                            $this->Prontuario
                            
                        )
                    );
                    echo "<script>alert('Dados inseridos com sucesso!');</script>";
                    echo "<script>window.location='".DIRPAGE."Adicionar_Associados'</script>";
                }
        }
    }
    public function BuscarDadosAtivo()
    {
        if(isset($_POST['Prontuario'])){
            $matricula= $_POST['Prontuario'];
            $BFetch=$this->selectDB("*","dados","where Prontuario=?",array($matricula));
            $Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC);
            if($Row=$BFetch->rowCount()>0){
                $Dados['Nome']= $Fetch['Nome'];
                $Dados['Funcao']=$Fetch['Funcao'];
                $Dados['Data']=$Fetch['Data_Admissao'];
                if($Fetch['Status']=='Ativo'){
                    $Dados['Msg']="<script>var r=confirm('Prontuário ja cadastrado deseja realizar a transferencia ?');
                if (r==true){

                    }else{
                        window.location='".DIRPAGE."Adicionar_Associados'}
                </script>";
                }
            }else{
                $Dados['Msg']='Prontuario não encontrado';
            }
            echo json_encode($Dados);
        }
    }
}