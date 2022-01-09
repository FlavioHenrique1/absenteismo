<?php 
if(isset($_POST['nome1'])){$nome1=filter_input(INPUT_POST,'nome1',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$nome1=null;}
if(isset($_POST['protuario'])){$protuario=filter_input(INPUT_POST,'protuario',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$protuario=null;}
