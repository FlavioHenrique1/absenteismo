<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
class ControllerHistorico extends ClassRender implements InterfaceView{

    public function __construct()
    {
        $this->setTitle("Pagina Inicial");
        $this->setDescription("Esse é o nosso site");
        $this->setKeywords("mvc completo");
        $this->setDir("home");
        $this->renderLayout();
    }


}