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
                        <a href="<?php echo DIRPAGE."Adicionar_Associados" ?>" title="Novo Cadastro" class="btn btn-success"><i class="fa fa-plus"></i> Novo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <table id="example" class="table table-striped table-hover" style="width:100%">
        <thead class="table table-sm">
        <caption>Lista de usuários</caption>
            <tr>
                <th>Prontuário</th>
                <th class="text-center">Name</th>
                <th class="text-center">Função</th>
                <th class="text-center">Data Admissão</th>
                <th class="text-center">Data</th>
                <th class="text-center">Setor</th>
                <th colspan="3" class="text-center">Opção</th>
            </tr>
        </thead>
        <tbody>
             <!--estrutura de loop-->
             <?php
                $Setor=$_SESSION['setor_usuario'];   #filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
                $Crud=new ClassCrud();
                $BFetch = $Crud->selectDB(
                    "*",
                    "dados ",
                    "where Setor=?",
                    array($Setor)
                );
                while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
   
            ?>
        <tr>
                <th><?php echo $Fetch['Prontuario'];?></th>
                <th class="text-center"><?php echo $Fetch['Nome'];?></</th>
                <th class="text-center"><?php echo $Fetch['Funcao'];?></</th>
                <th class="text-center"><?php echo $Fetch['Data_Admissao'];?></</th>
                <th class="text-center"><?php echo $Fetch['Setor'];?></th>
                <th>Status</th>
                <th>
                    <form action="<?php echo DIRPAGE.'Listar_Associados/AlterarDadosAssoc'?>" method="post">
                    <input type="hidden" name="Id" value="<?php echo $Fetch['Id'];?>">
                        <button class="btn btn-warning btn-xs">
                            <i class="fa fa-user-edit"></i>
                        </button>
                    </form>
                </th>
                <th>
                <form action="<?php echo DIRPAGE.'Listar_Associados/ExcluirAssoc'?>" method="post"><form action="" method="post">
                <input type="hidden" name="Id" value="<?php echo $Fetch['Id'];?>">
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
