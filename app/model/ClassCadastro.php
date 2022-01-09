<?php
namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{

    private $Db;

    #Cadastrará os clientes no sistema
    protected function cadastroClientes($codigo , $NumForm , $obs,$guia,$estoque,$loja,$Placa,$Transp,$moto,$resp,$dataS,$ip)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $dataLanc = date("d/m/Y H:i:s");
        $Id=0;
        $codigo=1;
        $status="pendente";
        $statusForm="Em andamento";
        $this->Db=$this->conexaoDB()->prepare("INSERT INTO `formulario`(`id`, `data`, `codigo`, `NumForm`, `obs`, `guia`, `estoque`, `loja`, `Placa`, `Transp`, `moto`, `status`, `resp`, `statusConf`,`dataLanc`,`usuarioAtivo`,`statusForm`) VALUES (:Id,:dataS,:codigo,:NumForm,:obs,:guia,:estoque,:loja,:Placa,:Transp,:moto,:status,:resp,:status,:dataLanc,:ip,:statusForm)");
        $this->Db->bindParam(":Id",$Id,\PDO::PARAM_INT);
        $this->Db->bindParam(":dataS",$dataS,\PDO::PARAM_STR);
        $this->Db->bindParam(":codigo",$codigo,\PDO::PARAM_STR);
        $this->Db->bindParam(":NumForm",$NumForm,\PDO::PARAM_STR);
        $this->Db->bindParam(":obs",$obs,\PDO::PARAM_STR);
        $this->Db->bindParam(":guia",$guia,\PDO::PARAM_STR);
        $this->Db->bindParam(":estoque",$estoque,\PDO::PARAM_STR);
        $this->Db->bindParam(":loja",$loja,\PDO::PARAM_STR);
        $this->Db->bindParam(":Placa",$Placa,\PDO::PARAM_STR);
        $this->Db->bindParam(":Transp",$Transp,\PDO::PARAM_STR);
        $this->Db->bindParam(":moto",$moto,\PDO::PARAM_STR);
        $this->Db->bindParam(":resp",$resp,\PDO::PARAM_STR);
        $this->Db->bindParam(":status",$status,\PDO::PARAM_STR);
        $this->Db->bindParam(":dataLanc",$dataLanc,\PDO::PARAM_STR);
        $this->Db->bindParam(":ip",$ip,\PDO::PARAM_STR);
        $this->Db->bindParam(":statusForm",$statusForm,\PDO::PARAM_STR);
        $this->Db->execute();
    }

#Acesso ao banco de dados com seleção
protected function selecionaClientes($Nome , $Sexo , $Cidade)
{
    $Nome='%'.$Nome.'%';
    $Sexo='%'.$Sexo.'%';
    $Cidade='%'.$Cidade.'%';
    $BFetch=$this->Db=$this->conexaoDB()->prepare("select * from teste where Nome like :nome and Sexo like :sexo and Cidade like :cidade");
    $BFetch->bindParam(":nome",$Nome,\PDO::PARAM_STR);
    $BFetch->bindParam(":sexo",$Sexo,\PDO::PARAM_STR);
    $BFetch->bindParam(":cidade",$Cidade,\PDO::PARAM_STR);
    $BFetch->execute();

    $I=0;
    while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
        $Array[$I]=['Id'=>$Fetch['Id'],'Nome'=>$Fetch['Nome'],'Sexo'=>$Fetch['Sexo'],'Cidade'=>$Fetch['Cidade']];
        $I++;
    }
    return $Array;
}
    #Deletar direto no banco
    protected function deletarClientes($Id)
    {
        $BFetch=$this->Db=$this->conexaoDB()->prepare("delete from teste where Id=:id");
        $BFetch->bindParam(":id",$Id,\PDO::PARAM_INT);
        $BFetch->execute();
    }
    public function NumFormBD()
    {
        $BFetch=$this->Db=$this->conexaoDB()->prepare("SELECT MAX(`NumForm`) FROM `formulario`");
        $BFetch->execute();
        $Fetch=$BFetch->fetchColumn();
        return $Fetch;
    }

}