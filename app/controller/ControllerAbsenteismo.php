<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCrud;


class ControllerAbsenteismo extends ClassCrud{

    use \Src\Traits\TraitUrlParser;
    public function __construct()
    {
        if(count($this->parseUrl())==1)
        {
            $Render=new ClassRender();
            $Render->setTitle("Absenteismo");
            $Render->setDescription("Faça seu cadastro.");
            $Render->setKeywords("cadastro de clientes, cadastro");
            $Render->setDir("selecao");
            $Render->renderLayout();
        }
    }
    public function lancarForm(){
        date_default_timezone_set('America/Sao_Paulo');
        #echo var_dump($_POST['Nome']);
        #echo var_dump($_POST['Status']);
        session_start();
        $Status = $_POST['Status'];
        $nome = $_POST['Nome'];
        $Prontuario = $_POST['Prontuario'];
        $funcao = $_POST['Funcao'];
        $dataAdm = $_POST['Data_Admissao'];
        $data = date('d/m/Y');
        $setor = $_POST['Setor'];
        $Mes = date('M');
        $Turno = $_SESSION["turno_usuario"];
        $resp = $_SESSION['Prontuario_usuario'];
        for($i = 0; $i < count($Status); $i++) {
            if ($Status[$i] <> "Selecionar..."){
                $this->insertDB(
                    "Absenteismo",
                    "?,?,?,?,?,?,?,?,?,?,?",
                    array(
                        "0",
                        $nome[$i],
                        $Prontuario[$i],
                        $funcao[$i],
                        $dataAdm[$i],
                        $setor[$i],
                        $data,
                        $Status[$i],
                        $Mes,
                        $Turno,
                        $resp
                    )
                );
                $erro =0;
            }else{
                $erro =1;
            }
        }
        if ($erro ==0){
            echo "<script>alert('Lancado com sucesso!');</script>";
            echo "<script>window.location='".DIRPAGE."Absenteismo'</script>";
        }else{
            echo "<script>alert('Favor Selecionar Status de todos os associados');</script>";
            echo "<script>window.location='".DIRPAGE."Absenteismo'</script>";
        }
    }




}