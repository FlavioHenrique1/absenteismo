<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php

use App\Controller\ControllerLogin;

echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <meta name="author" content="Flávio">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css';?>">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script>
    <script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo DIRIMG.'icon.png';?>" type="image/x-icon" />

    <?php echo $this->addHead(); ?> 
</head>
<body class="Bod">
        <?php  
                @session_start();
                date_default_timezone_set('America/Sao_Paulo');
                $n=new App\Controller\ControllerLogin();
            if($_GET['url']!='login'){
                if(!isset($_SESSION['nivel_usuario'])){    
                        $n->DestruirSession();
                }else{
                    if($_SESSION['time'] >= time()-1200){
                        $_SESSION['time']=time();
                    }else{
                        $n->DestruirSession();
                    }
                }
                $n = new Src\Classes\ClassHeader();
                $n->InsetNavbar();
                $n->InsertModal();
                $n = new Src\Classes\ClassBreadcrumb();
                $n->addBreadcrumb();

            }

        ?>
        
        <br><br>
        <?php echo $this->addHeader(); ?> 

        <?php echo $this->addMain(); ?>
   
</body>
<?php echo $this->addFooter(); ?>

</html>