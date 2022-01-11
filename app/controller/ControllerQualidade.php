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


}