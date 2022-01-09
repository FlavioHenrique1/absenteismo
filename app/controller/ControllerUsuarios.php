<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCrud;
use Src\Classes\ClassOption;

class ControllerUsuarios extends ClassCrud{
        
    use \Src\Traits\TraitUrlParser;
    public function __construct()
    {
        if(count($this->parseUrl())==1)
        {
            $Render=new ClassRender();
            $Render->setTitle('Lista de Usuarios');
            $Render->setDescription('Lista de Usuarios');
            $Render->setKeywords('Lista de Usuarios');
            $Render->setDir('Listar_Usuarios');
            $Render->renderLayout();
        }
    }
    public function AlterarDadosAssoc(){
        @session_start();

        $Id=$_POST['Id'];
        $_SESSION['Id_usuario']=$Id;
        $BFetch = $this->selectDB(
            "*",
            "dados ",
            "where Id=?",
            array($Id)
        );

        $Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC);
        $Prot=$Fetch['Prontuario'];
        $Nome=$Fetch['Nome'];
        $Setor=$Fetch['Setor'];
        $Funcao=$Fetch['Funcao'];
        $DataAdm=$Fetch['Data_Admissao'];
        $Turno=$Fetch['Turno'];
        $Tel=$Fetch['Tel'];
        $n=new ClassOption();
$g=$n->InsetSetor("adicionarSelect");

        echo"<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
        <link rel='stylesheet' href='".DIRCSS."'Style.css'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
        <script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
        <link rel='stylesheet' href='https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css'>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.5/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We' crossorigin='anonymous'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' integrity='sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==' crossorigin='anonymous' referrerpolicy='no-referrer' />
            <title>Alterar Dados</title>
        </head>
        <body>
            
        <section class='container-sm'>
                <div class='container-sm p-3 mb-2 bg-light'>
                    <div class='box-header'>
                        <div class='box-title'>
                            <h2 class='text-center'><i class='fa fa-user-plus' aria-hidden='true'></i> Cadastrar Associado</h2>
                        </div>
                        <hr>
                        <div class='Resultado' id='Resultado'></div>
                        <div class='box-body'>
                            <form name='FormAltAss' id='FormAltAss' class='FormAltAss' action=".DIRPAGE.'Listar_Associados/AlterarIdAssoc' ." method='post'>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <label for='name'>Nome Completo:</label>
                                        <input type='text' value='".$Nome."' name='Nome' id='Nome' class='form-control' disabled placeholder='Digite o nome completo' autofocus>
                                    </div>
                                    <div class='col-md-4'>
                                        <label for='Prontuario'>Prontuário:</label>
                                        <input type='number' name='Prontuario' value='".$Prot."' id='Prontuario' class='form-control' disabled placeholder='Digite o prontuário'>
                                    </div>
                                    <div class='col-md-4'>
                                        <label for='dataadmis'>Data de Admissão:</label>
                                        <input type='text' name='dataadm' id='dataadm' value='".$DataAdm."' class='form-control' disabled placeholder='Digite a data de admissão'>
                                    </div>
                                    <div class='col-md-4'>
                                        <label for='func'>Função:</label>
                                        <input type='text' name='Função' id='Função' value='".$Funcao."' class='form-control' disabled placeholder='Digite a data de admissão'>
 
                                    </div>
                                    <div class='col-md-4'>
                                        <label for='tele'>Telefone:</label>
                                        <input type='text' name='telef' id='telef' value='".$Tel."' class='form-control'  placeholder='Digite o numéro do telefone'>
                                    </div>
                                    <div class='col-md-4'>
                                        <label for='setorlb'>Setor:</label>".$g."
                                        
                                    </div>
                                    <div class='col-md-4'>
                                        <label for='tur'>Turno:</label>
                                        <select name='Turno' id='Turno' class='form-select' id='inputGroupSelect01'>
                                            <option disabled selected>Turno...</option>
                                            <option value='1º Turno'>1º Turno</option>
                                            <option value='2º Turno'>2º Turno</option>
                                            <option value='3º Turno'>3º Turno</option>
                                            <option value='Intermediário'>Intermediário</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class='row'>
                                    <div class='col text-right'>
                                    <a href='".DIRPAGE.'Listar_Associados'."' type='reset' class='btn btn-danger'>Cancelar</a>
                                    <input type='submit' value='Confirmar' name='confirmar' class='btn btn-success'>
                                    </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

        </div>
        </body>
        <script src='".DIRJS.'JQuery.js' ."'></script>
            <script src='".DIRJS.'Javascript.js'."'></script>
            <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
            <script src='https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js'></script>
            <script src='https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js'></script>
            <script src='https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js'></script>
        </html>
        ";
    }
    public function AlterarIdAssoc(){

        $this->recVariaveis();
        $this->updateDB(
            "dados",
            "Setor=?,Turno=?,Tel=?",
            "Id=?",
            array(
                $this->Setor,
                $this->Turno,
                $this->telef,
                $this->Id
            )
        );
        
        echo "<script>
        alert('Dados alterado com sucesso!');
        </script>";
        echo "<script>window.location='".DIRPAGE."Listar_Associados'</script>";
    }

    private function recVariaveis()
    {
        if(isset($_POST['Nome'])){ $this->Nome=filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Prontuario'])){ $this->Prontuario=filter_input(INPUT_POST, 'Prontuario', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Setor'])){ $this->Setor=filter_input(INPUT_POST, 'Setor', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['telef'])){ $this->telef=filter_input(INPUT_POST, 'telef', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Turno'])){ $this->Turno=filter_input(INPUT_POST, 'Turno', FILTER_SANITIZE_SPECIAL_CHARS); }
        @session_start();
        
        $this->Id=$_SESSION['Id_usuario'];
    }
    public function ExcluirAssoc()
    {

        $ID = $_POST['Id'];
        $this->deleteDB(
            "dados",
            "Id=?",
            array(
                $ID
            )
        );
        echo "<script>
        alert('Dados apagado com sucesso!');
        </script>";
        echo "<script>window.location='".DIRPAGE."Listar_Associados'</script>";
    }


}
