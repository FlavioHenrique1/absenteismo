<?php 
    use App\Model\ClassCrud;
?>
<div class="container p-3 mb-2 bg-light">
    <table id="tbHome" class="table table-striped table-bordered" style="width:100%">   
        <thead>
            <tr>
                <th>Prontuário</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Data Admissão</th>
                <th>Data</th>
                <th>Setor</th>
                <th>Turno</th>
                <th>Status</th>
            </tr>
        </thead>
        <?php
                $Setor=$_SESSION['setor_usuario'];   #filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
                $Turno=$_SESSION['turno_usuario'];
                $Crud=new ClassCrud();
                $BFetch = $Crud->selectDB(
                    "*",
                    "absenteismo ",
                    "where Setor=? and Turno=?",
                    array($Setor,$Turno)
                );
                while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
                    if ($Fetch['Status']=="P"){
                        $Classe="Class=lverd";
                    }else{
                        if ($Fetch['Status']=="F"){
                            $Classe="Class=lverm";
                        }else{
                            $Classe="";
                        }
                    }

            ?>
            <tr>
                
                <td><?php echo $Fetch['Prontuario'];?></td>
                <td><?php echo $Fetch['Nome'];?></td>
                <td><?php echo $Fetch['Funcao'];?></td>
                <td><?php echo $Fetch['Data_Admissao'];?></td>
                <td><?php echo $Fetch['Data'];?></td>
                <td><?php echo $Fetch['Setor'];?></td>
                <td><?php echo $Fetch['Turno'];?></td>
                <td  <?php echo $Classe ; ?> > <?php echo $Fetch['Status'];?></td>
            </tr>
            <?php
                    }
            ?>
        <tfoot>

        </tfoot>
    </table>
</div>