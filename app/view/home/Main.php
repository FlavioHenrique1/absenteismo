<?php 
    use App\Controller\ControllerHome;
?>

<div class="container p-3 mb-2 bg-light">
    <div><h4>Selecione a data para visualizar</h4></div>
    <div class="input-group mb-3">
    <form name="FormDataH" id="FormDataH" class="form-inline" method="post" action="<?php echo DIRPAGE.'Home1/BuscarDados'?>"> <input type="date" class="form-control" name="DataP" ><input type="submit" value="Pesquisar" class="btn btn-primary"> </form>
    </div>
    <div class="ResultadoF"></div>
    <div id="Resultado" class="Resultado"><?php    
    $n=new ControllerHome();
    $data = date('d/m/Y');
    $n->BuscarDados($data); ?></div>
</div>
