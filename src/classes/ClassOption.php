<?php

namespace Src\Classes;

class ClassOption
{

    #Método para Incluir a Navbar
    public function InsetSetor($id)
    {
        $html = "
            <select name='Setor' id='" . $id . "' class='form-select'>
                <option disabled selected>Setor...</option>
                <option value='Administrativo1'>Administrativo1</option>
                <option value='Administrativo2'>Administrativo2</option>
                <option value='Qualidade'>Qualidade</option>
            </select>

           ";
        return $html;
    }
    public function InsertFuncao()
    {
        $html = "
       <div class='col-md-4'>
                                <label for='func'>Função:</label>
                                <select name='Funcao' id='Funcao' class='form-select' id='inputGroupSelect01'>
                                    <option disabled selected>Função...</option>
                                    <option value='Conferente'>Conferente</option>
                                    <option value='Operador'>Operador</option>
                                    <option value='Auxiliar_Administrativo'>Auxiliar_Administrativo</option>
                                    <option value='Analista'>Analista</option>
                                    <option value='Assistente_Administrativo'>Assistente_Administrativo</option>
                                    <option value='Assistente_de_Controle_Operacional'>Assistente_de_Controle_Operacional</option>
                                    <option value='Ajudante_de_Carga_e_Descarga'>Ajudante_de_Carga_e_Descarga</option>
                                    <option value='Assistente_de_Recursos_Humanos'>Assistente_de_Recursos_Humanos</option>
                                    <option value='Auxiliar_de_Limpeza'>Auxiliar_de_Limpeza</option>
                                    <option value='Auxiliar_de_Manutenção'>Auxiliar_de_Manutenção</option>
                                    <option value='Auxiliar_de_Prevenção_de_Perdas'>Auxiliar_de_Prevenção_de_Perdas</option>
                                    <option value='Auxiliar_de_Serviços_Gerais'>Auxiliar_de_Serviços_Gerais</option>
                                    <option value='Auxiliar_Operacional'>Auxiliar_Operacional</option>
                                    <option value='Encarregado'>Encarregado</option>
                                    <option value='Engenheira_de_Segurança_do_Trabalho'>Engenheira_de_Segurança_do_Trabalho</option>
                                    <option value='Jovem_Aprendiz'>Jovem_Aprendiz</option>
                                    <option value='Líder'>Líder</option>
                                    <option value='Medico_do_Trabalho'>Medico_do_Trabalho</option>
                                    <option value='Oficial_de_Manutenção'>Oficial_de_Manutenção</option>
                                    <option value='Operador_de_Empilhadeira'>Operador_de_Empilhadeira</option>
                                    <option value='Operador_de_Estoque'>Operador_de_Estoque</option>
                                    <option value='Operador_de_Logística'>Operador_de_Logística</option>
                                    <option value='Operador_de_Máquina'>Operador_de_Máquina</option>
                                    <option value='Operador_de_Teleatendimento'>Operador_de_Teleatendimento</option>
                                    <option value='Supervisor'>Supervisor</option>
                                    <option value='Técnico_de_Manutenção_Júnior_I'>Técnico_de_Manutenção_Júnior_I</option>
                                    <option value='Tecnico_de_Seguranca_do_Trabalho'>Tecnico_de_Seguranca_do_Trabalho</option>
                                    <option value='Tecnico_Laboratorio'>Tecnico_Laboratorio</option>
                                    <option value='Tecnica_de_Enfermagem_do_Trabalho'>Tecnica_de_Enfermagem_do_Trabalho</option>
                                </select>
                            </div>
       ";
    }
    public function InsertStatus($Status=null)
    {
        
        if($Status==null){
            $Status="Selecionar..";
            $n=" disabled selected";
        }else{
            $n="value='".$Status."'";
        }
        
        $html = "
    <div class='col-md-4'>
    <select name='Status[]' class='form-select' id='inputGroupSelect01'>
        <option ".$n." >".$Status."</option>
        <option  class='verd' value='P'>P</option>
        <option class='verme' value='F'>F</option>
        <option class='cin' value='SUP'>SUP</option>
        <option value='EXT_ENC'>EXT ENC</option>
        <option value='FAC_ENC'>FAC ENC</option>
        <option class='BH' value='BH'>BH</option>
        <option value='FERIAS'>FÉRIAS</option>
        <option value='EXT'>EXT</option>
        <option value='DSR'>DSR</option>
        <option value='FERIADO'>FERIADO</option>
        <option class='cin' value='SUM'>SUM</option>
        <option value='FAC'>FAC</option>
        <option value='CURSO'>CURSO</option>
        <option value='TC_JOVEM'>TC JOVEM</option>
        <option value='F_JOVEM'>F JOVEM</option>
        <option value='DSR_JOVEM'>DSR JOVEM</option>
        <option value='FERIADO_JOVEM'>FERIADO JOVEM</option>
        <option value='FERIAS_JOVEM'>FÉRIAS JOVEM</option>
        <option value='JOVEM'>JOVEM</option>
        <option value='D'>D</option>
        <option value='DSR_OBT'>DSR OBT</option>
        <option value='INSS'>INSS</option>
        <option value='SUSP'>SUSP</option>
        <option value='TRANSF'>TRANSF</option>
    </select>
    </div>
    ";
    return $html;
    }
}
