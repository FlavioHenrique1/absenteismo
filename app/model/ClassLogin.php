<?php
namespace App\Model;
class ClassLogin extends ClassConexao{
    
    #Validar o usuario no banco
    protected function validarUsuario($nome,$senha,$Setor,$Turno)
    {
        $BFetch=$this->conexaoDB()->prepare("select * from users where Prontuario=:nome and senha=:senha");
        $BFetch->bindParam(":nome",$nome,\PDO::PARAM_STR);
        $BFetch->bindParam(":senha",$senha,\PDO::PARAM_STR);
        $BFetch->execute();
        $Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC);
        
        if($Row=$BFetch->rowCount()>0){
            session_start();
            $_SESSION['id_usuario'] = $Fetch['id'];
            $_SESSION['nivel_usuario'] = $Fetch['permissao'];
            $_SESSION['Prontuario_usuario'] = $Fetch['Prontuario'];
            $_SESSION['nome_usuario'] = $Fetch['nome']; 
            $_SESSION['senha_usuario'] = $Fetch['senha'];
            $_SESSION['setor_usuario'] = $Setor;
            $_SESSION['turno_usuario'] = $Turno;
            $_SESSION['time']=time();
            $_SESSION['canary']=[
                "birth" => time()
            ];
            $_SESSION['login']=true;
            return true;
        }else{
            return false;
        }

    }
    #alterar o usuario no banco
    protected function alterarUsuario($Nome,$Senha,$Id,$Prontuario,$setor,$Turno)
    {
        $BFetch=$this->conexaoDB()->prepare("UPDATE `users` SET `Prontuario`=:Prontuario,`nome`=:nome,`senha`=:senha, `Turno`=:Turno, `setor`=:setor WHERE `id`=:Id");
        $BFetch->bindParam(":nome",$Nome,\PDO::PARAM_STR);
        $BFetch->bindParam(":senha",$Senha,\PDO::PARAM_STR);
        $BFetch->bindParam(":Id",$Id,\PDO::PARAM_STR);
        $BFetch->bindParam(":Prontuario",$Prontuario,\PDO::PARAM_STR);
        $BFetch->bindParam(":setor",$setor,\PDO::PARAM_STR);
        $BFetch->bindParam(":Turno",$Turno,\PDO::PARAM_STR);
        $BFetch->execute();
        
    }

    


}