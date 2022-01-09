<?php
namespace Src\Classes;

class ClassHeader extends ClassMsg{

  
   #Método para Incluir a Navbar
   public function InsetNavbar()
   {

    $Id=$_SESSION['id_usuario'];
    $Permissao=$_SESSION['nivel_usuario'];
    $Prontuario=$_SESSION['Prontuario_usuario'];
    $Nome=$_SESSION['nome_usuario']; 
    $Senha=$_SESSION['senha_usuario'];
    $Setor=$_SESSION['setor_usuario']; 
    $Turno=$_SESSION['turno_usuario'];
    $Data= date('d/m/Y');
     $Msg=$this->Msg($Setor,$Turno,$Data);
     $QtdMsg= count($Msg);
       $html="
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
    <div class='container-fluid'>
      <a class='navbar-brand'><img src='".DIRIMG."Imagem1.png' 'width='100px' height='25px'></a>
      <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
          <li class='nav-item'>
            <a class='nav-link active aria-current='page' href='".DIRPAGE."'>Home</a>
          </li>

          <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
              Opções
            </a>
            <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
            <li><a class='dropdown-item' href='".DIRPAGE."Consolidado_Geral'>Consolidado Geral</a></li>  
            <li><a class='dropdown-item' href='".DIRPAGE."Absenteismo'>Absenteísmo</a></li>";
              if($Permissao==='admin'){
                #$html.="<li><a class='dropdown-item' href='".DIRPAGE."formulario'>Gerar relatório</a></li>";
              }
              
              $html.="<li><hr class='dropdown-divider'></li>
              <li><a class='dropdown-item' href='".DIRPAGE."Listar_Associados'>Listar de Associados</a></li>
            </ul>
          </li>
          <li class='nav-item'>
            <a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Disabled</a>
          </li>
          <li class='nav-item'>
          <a class='nav-link' href='#' data-bs-toggle='modal' data-bs-target='#ModalPerfil1' id='ModalPerfil1'>
            <i class='fa fa-envelope-o'>
              <span class='badge badge-danger'>".$QtdMsg."</span>
            </i>
            Mensagem
          </a>
        </li>
        </ul>
        <!-- Modal -->
        <div class='modal fade' id='modalExemplo1' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Mensagens</h5>
                  <span aria-hidden='true'>&times;</span>
              </div>
              <div class='modal-body'>";
              foreach ($Msg as $value) {
                $html.="<p>".$value."</p> <hr> ";
              }
                $html.="</div>
              <div class='modal-footer'>
                <button type='button' id='BtnMfechar' class='btn btn-primary'>Fechar</button>
              </div>
            </div>
          </div>
        </div>
        <div class='d-flex mr-4'>
          <img class='img-profile rounded-circle' src='".DIRIMG."User.png'  width='40px' height='40px'>
          <div class='collapse navbar-collapse' id='navbar'>
            <ul class='navbar-nav '>
                <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>"
                  .$Nome.
                "</a>
                <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                  <li><a class='dropdown-item' href='#' data-bs-toggle='modal' data-bs-target='#ModalPerfil'>Editar Dados</a></li>
                  <li><hr class='dropdown-divider'></li>
                  <li><a class='dropdown-item' href='".DIRPAGE."login/DestruirSession'>Sair</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>";
  echo $html;
   }
   
   #Iserir Modal 
   public function InsertModal(){

    $html = "
    <div class='modal fade' id='ModalPerfil' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Editar Dados</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            <form method='post' action='login/atualizarDados'name='FormAlter' id='FormAlter'>
                <div class='mb-3'>
                  <label for='exampleFormControlInput1' class='form-label'>Nome</label>
                  <input type='text' class='form-control' name='Nome' placeholder='Nome' value='".$_SESSION['nome_usuario']."' required autofocus>
              </div>
              <div class='mb-3'>
                  <label for='exampleFormControlInput1' class='form-label'>Prontuario</label>
                  <input type='text' class='form-control' name='Prontuario' placeholder='Prontuário' value='". $_SESSION['Prontuario_usuario']."'>  
                  <input type='hidden' class='form-control' name='Id' placeholder='Id' value='". $_SESSION['id_usuario']."'>
                  </div>
                  <div class='mb-3'>
                  <label for='exampleFormControlInput1' class='form-label'>Setor</label>";
                  $n = new ClassOption();
                  $html.=$n->InsetSetor("adicionarSelect");
                  $html.="</div>
                  <div class='mb-3'>
                  <label for='exampleFormControlInput1' class='form-label'>Turno</label>
                  <select name='Turno' id='Turno' class='form-select' id='inputGroupSelect01'>
                                    <option disabled selected>Turno...</option>
                                    <option value='1º Turno'>1º Turno</option>
                                    <option value='2º Turno'>2º Turno</option>
                                    <option value='3º Turno'>3º Turno</option>
                                    <option value='Intermediário'>Intermediário</option>
                                </select>
                    </div>
              <div class='mb-3'>
                  <label for='exampleFormControlInput1' class='form-label'>Senha</label>
                  <input type='text' class='form-control' name='Senha' placeholder='Senha'value='"  .$_SESSION['senha_usuario']."'>
              </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                    <button type='submit' class='btn btn-primary'>Salvar Alterações</button>
                </div>
          </form>
        </div>
      </div>
    </div>";
    echo $html;
   }

  




}
