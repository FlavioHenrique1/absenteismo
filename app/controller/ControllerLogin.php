<?php

namespace App\Controller;
use App\Model\ClassLogin;
use Src\Classes\ClassRender;



class ControllerLogin extends ClassLogin{

    public $Id;
    public $Nome;
    public $Senha;
    public $Prontuario;


    use \Src\Traits\TraitUrlParser;
    public function __construct()
    {
    
        if(count($this->parseUrl())==1){
            $Render=new ClassRender();
            $Render->setTitle('Login');
            $Render->setDescription('Faça seu Login');
            $Render->setKeywords('Login,Login do website,area restrita');
            $Render->setDir('Login');
            $Render->renderLayout();
        }
    }

    #Validar o login do usuario
    public function validarLogin()
    {
        $campos = Array("Usuario", "Senha","Setor","Turno");
        $valido = $this->ValidarDados($campos);

        if($valido==false){
            echo json_encode(array("erro" => 1, "mensagem" => "Preencher todos os campos para entrar."));
        }else{
            $Usuario=$_POST['Usuario'];
            $Senha=$_POST['Senha'];
            $Setor=$_POST['Setor'];
            $Turno=$_POST['Turno'];
            $Validacao=$this->validarUsuario($Usuario,$Senha,$Setor,$Turno);
            if($Validacao==true){
                echo json_encode(array("erro" => 0));
                #echo "<script>window.location='".DIRPAGE."cadastro'</script>";
            }else{
                echo json_encode(array("erro" => 1, "mensagem" => "Prontuário e/ou senha incorretos."));
            }
        }
    }

        #Validar o login do usuario
        public function atualizarDados()
        {

            $campos = Array("Nome", "Prontuario", "Senha","Setor","Turno");
            $valido= $this->ValidarDados($campos);
            $Id=$_POST['Id'];
            if(isset($_POST['Nome'])){$this->Nome=filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);}else{$erro=1;}
            if(isset($_POST['Prontuario'])){$this->Prontuario=filter_input(INPUT_POST,'Prontuario', FILTER_SANITIZE_SPECIAL_CHARS); }
            if(isset($_POST['Senha'])){$this->Senha=filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_SPECIAL_CHARS); }
            if(isset($_POST['Setor'])){$this->Setor=filter_input(INPUT_POST, 'Setor', FILTER_SANITIZE_SPECIAL_CHARS);}
            if(isset($_POST['Turno'])){$this->Turno=filter_input(INPUT_POST, 'Turno', FILTER_SANITIZE_SPECIAL_CHARS);}
            if($valido == false){
                echo "<script>
                alert('preencher Todos os dados obrigatorio');
                </script>";
                echo "<script>window.location='".DIRPAGE."'</script>";
            }else{
                $Alter=$this->alterarUsuario($this->Nome,$this->Senha,$Id,$this->Prontuario,$this->Setor,$this->Turno);
                $Validacao=$this->validarUsuario($this->Prontuario,$this->Senha,$this->Setor,$this->Turno);
                echo "<script>window.location='".DIRPAGE."'</script>";
            }
        }
        public function ValidarDados($campos){
            $valido = true;
            foreach ($campos as $campo){
                if (empty($_POST[$campo])){
                    $valido = false;
                }
            }
            return $valido;
        }
    


    #Destruir a sessão
    public function DestruirSession(){
        @session_start();
        foreach(array_keys($_SESSION) as $Key){
            unset($_SESSION[$Key]);
        }
        echo "<script>window.location='".DIRPAGE."login'</script>";

    }

}