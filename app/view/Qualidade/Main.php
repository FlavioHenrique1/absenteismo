<div class="container p-3 mb-2 bg-light">
    <div>
        <h4>Preencha os campos abaixo para continuar</h4>
        <p>Prontuário não é obrigatorio</p>
    </div>
    <div class="input-group mb-3">
        <form name="FormPesq" id="FormPesq" class="form-inline" method="post" action="<?php echo DIRPAGE . 'Qualidade/PesquisarDadosBD' ?>">

            <div class="col-md-8">
                <input type="date" class="form-control" name="DataP">
                <?php
                $n = new Src\Classes\ClassOption();
                echo $n->InsetSetor("adicionarSelectQuali");
                ?>
                <select name="Turno" class="form-select" id="inputGroupSelect02">
                    <option disabled selected>Turno...</option>
                    <option value="1º Turno">1º Turno</option>
                    <option value="2º Turno">2º Turno</option>
                    <option value="3º Turno">3º Turno</option>
                    <option value="Intermediário">Intermediário</option>
                </select>
                <input type="number" class="form-control" name="Pront" placeholder="Prontuário" id="ProntPesq">
                <input type="submit" value="Pesquisar" class="btn btn-primary" id="BtnPesquisa">
            </div>
        </form>
    </div>
    <div class="ResultadoF"></div>
</div>