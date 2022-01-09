
<body class="bg-light">

<div class="container">
    <div class="row">
        
        <div class="" name="">

            <div class="account-wall">
            <h1 class="text-center login-title" id="mensagem" >Faça Login para Continuar</h1>
            
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" method="post" action="login/validarLogin" name="FormLogin" id="FormLogin">
                <?php 
                    $n = new Src\Classes\ClassOption();
                   echo $n->InsetSetor("loginSelect");
                ?>
                <select name='Turno' id='loginSelect' class='form-select'>
                    <option disabled selected>Turno...</option>
                    <option value='1º Turno'>1º Turno</option>
                    <option value='2º Turno'>2º Turno</option>
                    <option value='3º Turno'>3º Turno</option>
                    <option value='Intermediário'>Intermediário</option>
                </select>
                <input type="number" name="Usuario" class="form-control m-2" placeholder="Prontuário" id="Usuario" required autofocus>
                <input type="password" name="Senha" class="form-control m-2" placeholder="Senha" id="Senha" required>
                <div class="d-grid gap-2">
                <button id="btentrar" class="btn btn-lg btn-primary" type="submit">
                    Entrar</button>
                </form>
                </div>
                
            </div>
            
            <!--a href="#" class="text-center new-account">Create an account </a-->
        </div>
    </div>
</div>