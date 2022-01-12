<?php 
    use App\Model\ClassCrud;
    use Src\Classes\ClassOption;
    $n = new ClassOption();
    
?>
<br>

<div  name="Resultados" id="Resultados" class="Resultados"></div>
<form name="LancamentoAB" id="LancamentoAB" class="LancamentoAB" action="<?php echo DIRPAGE.'Absenteismo/lancarForm'; ?>" method="post">
<div class="container p-3 mb-2 bg-light" id="Selecao">
<table id="example" class="table table-striped table-hover" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Prontuário</th>
                <th>Name</th>
                <th>Cargo</th>
                <th>Data Admissão</th>
                <th>Data</th>
                <th>Setor</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
                <!--estrutura de loop-->
            <?php
                $Setor=$_SESSION['setor_usuario'];   #filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
                $Turno = $_SESSION["turno_usuario"];
                $Crud=new ClassCrud();
                $BFetch = $Crud->selectDB(
                    "*",
                    "dados ",
                    "where Setor=? and turno=?",
                    array($Setor,$Turno)
                );
                while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                    $Crud1=new ClassCrud();
                    $BFetch1 = $Crud1->selectDB(
                        "*",
                        "absenteismo ",
                        "where Prontuario=? and Data=?",
                        array(
                            $Fetch['Prontuario'],
                            date('d/m/Y')
                        )
                    );

                    if($Row=$BFetch1->rowCount()>0){
                        
                    }else{
            ?>
            <tr>
                
                <td><?php echo $Fetch['Prontuario'];?></td>
                <input type="hidden" name="Prontuario[]" value="<?php echo $Fetch['Prontuario'];?>">
                <td><?php echo $Fetch['Nome'];?></td>
                <input type="hidden" name="Nome[]" value="<?php echo $Fetch['Nome'];?>">
                <td><?php echo $Fetch['Funcao'];?></td>
                <input type="hidden" name="Funcao[]" value="<?php echo $Fetch['Funcao'];?>">
                <td><?php echo $Fetch['Data_Admissao'];?></td>
                <input type="hidden" name="Data_Admissao[]" value="<?php echo $Fetch['Data_Admissao'];?>">
                <td><?php echo date('d/m/Y');?></td>
                <td><?php echo $Fetch['Setor'];?></td>
                <input type="hidden" name="Setor[]" value="<?php echo $Fetch['Setor'];?>">
                <td>
                <?php
                   echo $n->InsertStatus();
                ?>
                </td>
            </tr>
            <?php
                    }
                }
            ?>
    </table>
    <?php 
    if($Row=$BFetch1->rowCount()>0){
        
    }else{
        
    ?>
    <input type="submit" id="salvar" name="salvar" class="btn btn-lg btn-secondary" value="Lançar">

    <?php
    }
        ?>
    </div>
         
    </form>
