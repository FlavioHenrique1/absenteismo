<?php
namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes{

    use TraitUrlParser;

    private $Rota;

    #Metodo de retorno da rota
    public function getRota(){
        $url=$this->parseUrl();
        $I=$url[0];

        $this->Rota=array(
            ""=>"ControllerHome",
            "Home"=>"ControllerHome",
            "sitemap"=>"ControllerSitemap",
            "carro"=>"ControllerCarros",
            "contato"=>"ControllerContato",
            "cadastro"=>"ControllerCadastro",
            "login"=>"ControllerLogin",
            "Absenteismo"=>"ControllerAbsenteismo",
            "Listar_Associados"=>"ControllerUsuarios",
            "Adicionar_Associados"=>"ControllerAddUsuarios",
            "Consolidado_Geral"=>"ControllerConsolidado",
            "Qualidade"=>"ControllerQualidade",
            "Home1"=>"ControllerHome1"
        );
        if(array_key_exists($I,$this->Rota)){
            if(file_exists(DIRREQ."app/controller/{$this->Rota[$I]}.php")){
                return $this->Rota[$I];
            }else{
                return "ControllerHome";
            }
        }else{
            return "Controller404";
        }
    }
}