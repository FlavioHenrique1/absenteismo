var DIRPAGE = "http://" + document.location.hostname + ":8080/absenteismo/";
$(document).ready(function () {
    $('#FormSelect').on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();

        $.ajax({
            url: DIRPAGE + 'cadastro/seleciona',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.Resultado').html(Dados);
            }
        });
    });
});

//Ajax do formulario de login

$('#FormLogin').on('submit', function (event) {
    event.preventDefault();
    var Dados = $(this).serialize();

    $.ajax({
        url: DIRPAGE + 'login/validarLogin',
        type: 'post',
        data: Dados,
        success: function (response) {
            response = JSON.parse(response);
            if (response["erro"]) {
                $("#mensagem").html(response["mensagem"]);
            } else {
                window.location = DIRPAGE;
            }
        },
    });
});

//Ajax do formulario de relatorio

$(document).ready(function () {
    $('#FormRelat').on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();
        $.ajax({
            url: DIRPAGE + 'formulario/lancarForm',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.ResultadoRel').html(Dados);
            }
        });
    });
});
//Ajas abs
$(document).ready(function () {
    $('#LancamentoAB').on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();
        $.ajax({
            url: DIRPAGE + 'Absenteismo/lancarForm',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.Resultados').html(Dados);
            }
        });
    });
});
//tabela
$(document).ready(function () {
    $('#tbHome').DataTable({
        "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Nada encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponivel",
            "infoFiltered": "(filtrando de from _MAX_ registros no total)"
        }
    });

});
//Ajas addUser
$(document).ready(function(){
    $('#FormAddAss').on('submit',function(event){
        event.preventDefault();
        $('.ResultadoP').append('');
        var Dados = $(this).serialize();
        $.ajax({
            url: DIRPAGE + 'Adicionar_Associados/LancarAssociados',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.ResultadoP').html(Dados);
            }
        });
    });
});

$(document).ready(function () {
    $('#FormData').on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();

        $.ajax({
            url: DIRPAGE + 'Consolidado_Geral/BuscarDados',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.Resultado').html(Dados);
            }
        });
    });
});

$(document).ready(function () {
    $('#FormDataH').on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();

        $.ajax({
            url: DIRPAGE + 'Home/BuscarDados',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.Resultado').html(Dados);
            }
        });
    });
    //Ajas Alterar abs
    $(document).ready(function () {
        $('#LancAltAbs').on('submit', function (event) {
            event.preventDefault();
            $('.ResultadoF').append('');
            var Dados = $(this).serialize();
            $.ajax({
                url: DIRPAGE + 'Home/AlterarAb',
                method: 'post',
                dataType: 'html',
                data: Dados,
                success: function (Dados) {
                    $('.ResultadoF').html(Dados);
                }
            });
        });
    });

    //Completar os dados ativos
    let el = document.getElementById("hLane1");
    el.onblur = function () {
        var Dados = $(this).serialize();
        var $Nome = $("input[name='Nome']");
        var $Data = $("input[name='dataadm']");
        var $Funcao = $("input[name='Funcao']");

        $.ajax({
            url: DIRPAGE + 'Adicionar_Associados/BuscarDadosAtivo',
            method: 'post',
            dataType: 'json',
            data: Dados,
            success: function (Dados) {
                if (Dados.Nome == "Prontuario não encontrado") {
                    $('.ResultadoP').html(Dados.Msg);
                } else {
                    $Nome.val(Dados.Nome);
                    $Data.val(Dados.Data);
                    $Funcao.val(Dados.Funcao);
                    $('.ResultadoP').html(Dados.Msg);
                }
            }
        });
    }

});

//Modal msg

$("#ModalPerfil1").click(function () {
    $("#modalExemplo1").modal('show');
});
$("#BtnMfechar").click(function () {
    window.location = DIRPAGE;
});

//Ajas Pesquisar abs Qualidade
$(document).ready(function () {
    $('#FormPesq').on('submit', function (event) {
        event.preventDefault();
        $('.ResultadoF').append('');
        var Dados = $(this).serialize();
        $.ajax({
            url: DIRPAGE + 'Qualidade/PesquisarDadosBD',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.ResultadoF').html(Dados);
            }
        });
    });
});

$(document).ready(function () {
    $('#LancAltQual').on('submit', function (event) {
        event.preventDefault();
        $('.ResultadoF').append('');
        var Dados = $(this).serialize();
        $.ajax({
            url: DIRPAGE + 'Qualidade/AlterarAbQua',
            method: 'post',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.ResultadoF').html(Dados);
            }
        });
    });
});
