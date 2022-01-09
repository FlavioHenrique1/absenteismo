<?php 
    use App\Model\ClassCrud;
?>

    <section class="container-sm">
        <div class="container-sm p-3 mb-2 bg-light">
            <div class="box-header">
                <div class="box-title">
                    <h2 class="text-center"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastrar Associado</h2>
                </div>
                <hr>
                <div class="ResultadoP" id="ResultadoP"></div>
                <div class="box-body">
                    <form name="FormAddAss" id="FormAddAss" class="FormAddAss" action="<?php echo DIRPAGE.'Adicionar_Associados/LancarAssociados' ?>" method="post">
                        <div class="row">
                        <div class="col-md-4">
                                <label for="Prontuario">Prontuário:</label>
                                <input type="number"  name="Prontuario" id="hLane1" class="form-control" required placeholder="Digite o prontuário">
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
                            <a href="<?php echo DIRPAGE.'Listar_Associados' ?>" type="reset" class="btn btn-danger">Cancelar</a>
                            <input type="submit" value="Confirmar" name="confirmar" class="btn btn-success">
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

</div>