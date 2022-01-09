<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCadastro;

class ControllerCadastro extends ClassCadastro{

    protected $Id;
    protected $Nome;
    protected $Sexo;
    protected $Cidade;

    use \Src\Traits\TraitUrlParser;
    public function __construct()
    {
        if(count($this->parseUrl())==1)
        {
            $Render=new ClassRender();
            $Render->setTitle("Cadastro");
            $Render->setDescription("Faça seu cadastro.");
            $Render->setKeywords("cadastro de clientes, cadastro");
            $Render->setDir("cadastro");
            $Render->renderLayout();
        }
    }

    #Receber variáveis
    private function recVariaveis()
    {
        if(isset($_POST['Id'])){ $this->Id=$_POST['Id']; }
        if(isset($_POST['Nome'])){ $this->Nome=filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Sexo'])){ $this->Sexo=filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Cidade'])){ $this->Cidade=filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS); }
    }

    #Chamar o método de cadastro da ClassCadastro
    public function cadastrar()
    {
        $this->recVariaveis();
        #$this->cadastroClientes($this->Nome, $this->Sexo,$this->Cidade);
        echo "Cadastro efetuado com sucesso!";
    }

    #Selecionar e exibir os dados do banco de dados
public function seleciona()
{
    $this->recVariaveis();
    $B=$this->selecionaClientes($this->Nome, $this->Sexo,$this->Cidade);

    echo "
        <form name='FormDeletar' id='FormDeletar' action='".DIRPAGE."cadastro/deletar' method='post'>
        <table border='1'>
            <tr>
                <td>Ação</td>
                <td>Nome</td>
                <td>Sexo</td>
                <td>Cidade</td>
            </tr>
            ";
            foreach($B as $C){
            echo "
            <tr>
                <td><input type='checkbox' id='Id' name='Id[]' value='$C[Id]'</td>
                <td>$C[Nome]</td>
                <td>$C[Sexo]</td>
                <td>$C[Cidade]</td>
            </tr>
            
            ";
            }
            echo "
            <input type='submit' value='Deletar'>
        </table>
        </form>
    ";
}

    #Deletar dados do DB
    public function deletar()
    {
        $this->recVariaveis();
        foreach($this->Id as $IdDeletar)
        {
            $this->deletarClientes($IdDeletar);
        }
    }

}