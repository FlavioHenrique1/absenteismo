<?php 
    use App\Controller\ControllerConsolidado;
?>

<div class="container p-3 mb-2 bg-light">
    <div><h4>Selecione a data para visualizar</h4></div>
    <div class="input-group mb-3">
    <form name="FormData" id="FormData" class="form-inline" method="post" action="<?php echo DIRPAGE.'Consolidado_Geral/BuscarDados'?>"> 
        <input type="date" class="form-control" name="DataP" >
        <input type="submit" value="Pesquisar" class="btn btn-primary">
    </form>
    </div>
    <div><h4>Meta: 3%</h4></div>
    <div id="Resultado" class="Resultado"><?php
        $n=new ControllerConsolidado();
        $data = date('d/m/Y');
    $n->BuscarDados(); ?></div>
</div>