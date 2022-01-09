<?php
namespace App\Model;

use App\Model\ClassConexao;

class ClassCrud extends ClassConexao{
    #Atributos
    private $Crud;
    private $Contador;

    #Preparação das declarativas 

    private function preparedStatements($Query,$Parametros){
        $this->countParametros($Parametros);
        $this->Crud=$this->conexaoDB()->prepare($Query);
       if($this->Contador >0){
            for ($i=1;$i<= $this->Contador;$i++){
                $this->Crud->bindValue($i,$Parametros[$i-1]);
            }
        }
        $this->Crud->execute();
    }

    #Contador de parametros
    private function countParametros($Parametros)
    {
        $this->Contador=count($Parametros);
    }


    #Inserção no banco de dados

    public function insertDB($Tabela,$condicao,$Parametros){
        $this->preparedStatements("insert into {$Tabela} values ({$condicao})",$Parametros);
        return $this->Crud;
    }
      #Seleção no banco de dados

      public function selectDB($Campos,$Tabela,$condicao,$Parametros){
        $this->preparedStatements("select {$Campos} from {$Tabela} {$condicao}", $Parametros);
        return $this->Crud;
    }
    #Deletar dados no DB
    public function deleteDB($Tabela , $condicao , $Parametros){
        $this->preparedStatements("delete from {$Tabela} where {$condicao} ", $Parametros);
        return $this->Crud;
    }
    #Atualização no banco de dados
    public function updateDB($Tabela , $Set , $condicao , $Parametros){
        $this->preparedStatements("update {$Tabela} set {$Set} where {$condicao} ",$Parametros);
        return $this->Crud;
    }


}
