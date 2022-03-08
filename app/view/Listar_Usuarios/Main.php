<?php

use App\Model\ClassCrud;

?>

<div class="container-sm p-3 mb-2 bg-light">

    <section>
        <h3>
            <span><i class="fa fa-users"></i> Lista de Associados</span>
        </h3>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <div class="row margin-bottom-20">
                    <div class="col-md-12 text-right">
                        <a href="<?php echo DIRPAGE . "Adicionar_Associados" ?>" title="Novo Cadastro" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <table id="example" class="table table-striped table-hover table-sm" style="width:100%">
        <thead class="table table-sm">
            <caption>Lista de usuários</caption>
            <tr class="table-dark">
                <th>Prontuário</th>
                <th class="text-center">Name</th>
                <th class="text-center">Função</th>
                <th class="text-center">Data Admissão</th>
                <th class="text-center">Setor</th>
                <th colspan="3" class="text-center">Opção</th>
            </tr>
        </thead>
        <tbody>
            <!--estrutura de loop-->
            <?php
            $Setor = $_SESSION['setor_usuario'];   #filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
            $Crud = new ClassCrud();
            $BFetch = $Crud->selectDB(
                "*",
                "dados ",
                "where Setor=?",
                array($Setor)
            );
            while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {

            ?>
                <tr>
                    <th><?php echo $Fetch['Prontuario']; ?></th>
                    <th class="text-center"><?php echo $Fetch['Nome']; ?></< /th>
                    <th class="text-center"><?php echo $Fetch['Funcao']; ?></< /th>
                    <th class="text-center"><?php echo $Fetch['Data_Admissao']; ?></< /th>
                    <th class="text-center"><?php echo $Fetch['Setor']; ?></th>
                    <th>
                        <input type="hidden" name="Id" value="<?php echo $Fetch['Id']; ?>">
                        <a class="btn btn-warning btn-xs view_data" href='#' data-bs-toggle='modal' data-bs-target='#ModalPerfilUser' id='<?php echo $Fetch['Id']; ?>'>
                            <i class="fa fa-user-edit"></i>
                        </a>
                    </th>
                    <th>
                        <form action="<?php echo DIRPAGE . 'Listar_Associados/ExcluirAssoc' ?>" method="post">
                            <form action="" method="post">
                                <input type="hidden" name="Id" value="<?php echo $Fetch['Id']; ?>">
                                <button class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                    </th>
                </tr>
            <?php

            }
            ?>

        </tbody>
    </table>
</div>

<div class='modal fade ModalViewPerfilUser' id='ModalViewPerfilUser' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg '>
        <div class='modal-content center'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Editar Dados</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <div class="imageUser">
                    <img class='img-profile rounded-circle' src='<?php echo DIRIMG . "baixados.png" ?>' width='100px' height='100px'>
                </div>
                <form action="" method="post">
                <form name="FormAddAss" id="FormAddAss" class="FormAddAss" action="<?php echo DIRPAGE.'Adicionar_Associados/LancarAssociados' ?>" method="post">
                        <div class="row">
                        <div class="col-md-4">
                                <label for="Prontuario">Prontuário:</label>
                                <input type="number"  name="Prontuario" id="hLane1" class="form-control" required  disabled placeholder="Digite o prontuário">
                            </div>
                            
                            <div class="col-md-4">
                                <label for="Setor">Setor:</label>
                                <?php 
                                    $n = new Src\Classes\ClassOption();
                                   echo $n->InsetSetor("adicionarSelect");
                                ?>
                            </div>
                            <div class="col-md-4">
                                <label for="tur">Turno:</label>
                                <select name="Turno" id="Turno" class="form-select" id="inputGroupSelect01">
                                    <option disabled selected>Turno...</option>
                                    <option value="1º Turno">1º Turno</option>
                                    <option value="2º Turno">2º Turno</option>
                                    <option value="3º Turno">3º Turno</option>
                                    <option value="Intermediário">Intermediário</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="tele">Telefone:</label>
                                <input type="text" name="telef" id="telef" class="form-control" placeholder="Digite o numéro do telefone">
                            </div>
                            <div class="col-md-4">
                                <label for="dataadmis">Data de Admissão:</label>
                                <input type="text" name="dataadm" id="dataadm" disabled class="form-control" required placeholder="Data de admissão">
                            </div>
                            <div class="col-md-4">
                                <label for="func">Função:</label>
                                <input type="text" name="Funcao" id="Funcao" class="form-control" disabled placeholder="Função">
                            </div>
                            <div class="col-md-12">
                                <label for="name">Nome Completo:</label>
                                <input type="text" name="Nome" id="Nome"   class="form-control" disabled placeholder="Nome completo" autofocus>
                            </div>
    

                        </div>
                        <br>
                        <div class="row">
                            <div class="col text-right">
                            <a data-bs-dismiss='modal' aria-label='Close' class="btn btn-danger">Cancelar</a>
                            <input type="submit" value="Confirmar" name="confirmar" class="btn btn-success">
                            </div>
                    </form>
      
            </form>
            </div>
        </div>
    </div>
</div>