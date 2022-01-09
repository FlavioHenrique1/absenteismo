<?php 
    use App\Model\ClassCrud;
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
                    <select name="Status[]" class="form-select" id="inputGroupSelect01">
                        <option disabled  selected>Selecionar...</option>
                        <option  class="verd" value="P">P</option>
                        <option class="verme" value="F">F</option>
                        <option class="cin" value="SUP">SUP</option>
                        <option value="EXT_ENC">EXT ENC</option>
                        <option value="FAC_ENC">FAC ENC</option>
                        <option class="BH" value="BH">BH</option>
                        <option value="FERIAS">FÉRIAS</option>
                        <option value="EXT">EXT</option>
                        <option value="DSR">DSR</option>
                        <option value="FERIADO">FERIADO</option>
                        <option class="cin" value="SUM">SUM</option>
                        <option value="FAC">FAC</option>
                        <option value="CURSO">CURSO</option>
                        <option value="TC_JOVEM">TC JOVEM</option>
                        <option value="F_JOVEM">F JOVEM</option>
                        <option value="DSR_JOVEM">DSR JOVEM</option>
                        <option value="FERIADO_JOVEM">FERIADO JOVEM</option>
                        <option value="FERIAS_JOVEM">FÉRIAS JOVEM</option>
                        <option value="JOVEM">JOVEM</option>
                        <option value="D">D</option>
                        <option value="DSR_OBT">DSR OBT</option>
                        <option value="INSS">INSS</option>
                        <option value="SUSP">SUSP</option>
                        <option value="TRANSF">TRANSF</option>
                    </select>
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
