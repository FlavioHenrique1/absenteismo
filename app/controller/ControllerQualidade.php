<?php
namespace App\Controller;

use Src\Classes\ClassRender;
class ControllerQualidade extends ClassRender{

    public function __construct()
    {
        $this->setTitle("Pagina Qualidade");
        $this->setDescription("Esse é o nosso site");
        $this->setKeywords("Absenteismo");
        $this->setDir("Qualidade");
        $this->renderLayout();
    }
    public function PesquisarDadosBD(){

        $this->recVariaveis();
        



    }
    private function recVariaveis()
    {
        if(isset($_POST['DataP'])){ $this->Data=filter_input(INPUT_POST, 'Data', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Pront'])){ $this->Pront=filter_input(INPUT_POST, 'Pront', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Turno'])){ $this->Turno=filter_input(INPUT_POST, 'Turno', FILTER_SANITIZE_SPECIAL_CHARS); }
        if(isset($_POST['Setor'])){ $this->Setor=filter_input(INPUT_POST, 'Setor', FILTER_SANITIZE_SPECIAL_CHARS); }
        
    }

}