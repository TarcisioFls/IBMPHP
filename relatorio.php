<?php
    include_once "./menu.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>Buscar de Membros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>        
        <form method="POST" action="buscarMembro.php">
            <section class="container-fluid">
                <h3>Busca</h3>
                <div class="panel panel-default">
                    <table class="table-condensed">
                        <tr>
                            <td>
                                <label for="nome">Nome do Membro</label>
                            </td>
                            <td>
                                <input type="text" name="nome" id="nome"  class="form-control">
                            </td>
                        </tr>
<!--                        <tr>
                            <td>
                                <label for="dataNascimentoIni">Data de Nascimento</label>
                            </td>
                            <td>
                                <input type="date" name="dataNascimentoIni" id="dataNascimentoIni"  class="form-control">
                            </td>
                            <td>
                                <label for="dataNascimentoFim">Até</label>
                            </td>
                            <td>
                                <input type="date" name="dataNascimentoFim" id="dataNascimentoFim" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="dataConversaoIni"> Data de Conversão</label>
                            </td>
                            <td>
                                <input type="date" name="dataConversaoIni" id="dataConversaoIni" class="form-control">
                            </td>
                            <td>
                                <label for="dataConversaoFim">Áte</label>
                            </td>
                            <td>
                                <input type="date" name="dataConversaoFIm" id="dataConversaoFim" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="dataBatismoIni">Data de Batismo</label>
                            </td>
                            <td>
                                <input type="date" name="dataBatismoIni" id="dataBatismoIni" class="form-control">
                            </td>
                            <td>
                                <label for="dataBatismoFim">Áte</label>
                            </td>
                            <td>
                                <input type="date" name="dataBatismoFim" id="dataBatismoFim" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="sexo">Sexo</label>
                            </td>
                            <td>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="" label=""></option>
                                    <option value="Feminino" label="Feminino"></option>
                                    <option value="Masculino" label="Masculino"></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="estadoCivil">Estado Civil</label>
                            </td>
                            <td>
                                <select name="estadoCivil" id="estadoCivil" class="form-control">
                                    <option value="" label=""></option>
                                    <option value="Solteiro(a)" label="Solteiro(a)"></option>
                                    <option value="Casado(a)" label="Casado(a)"></option>
                                    <option value="Divorciado(a)" label="Divorciado(a)"></option>
                                    <option value="Viúvo(a)" label="Viúvo(a)"></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="bairro">Bairro</label>
                            </td>
                            <td>
                                <input type="text" name="bairro" id="bairro" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="estado">Estado</label>
                            </td>
                            <td>
                                <select id="estado" name="estado" required="required" class="form-control">
                                    <option value="" label=""></option>
                                    <option value="Acre" label="Acre"></option>
                                    <option value="Alagoas" label="Alagoas"></option>
                                    <option value="Amazonas" label="Amazonas"></option>
                                    <option value="Amapá" label="Amapá"></option>
                                    <option value="Bahia" label="Bahia"></option>
                                    <option value="Ceará" label="Ceará"></option>
                                    <option value="Distrito Federal" label="Distrito Federal"></option>
                                    <option value="Espírito Santo" label="Espírito Santo"></option>
                                    <option value="Goiás" label="Goiás"></option>
                                    <option value="Maranhão" label="Maranhão"></option>
                                    <option value="Mato Grosso" label="Mato Grosso"></option>
                                    <option value="Mato Grosso do Sul" label="Mato Grosso do Sul"></option>
                                    <option value="Minas Gerais" label="Minas Gerais"></option>
                                    <option value="Pará" label="Pará"></option>
                                    <option value="Paraíba" label="Paraíba"></option>
                                    <option value="Paraná" label="Paraná"></option>
                                    <option value="Pernambuco" label="Pernambuco"></option>
                                    <option value="Piauí" label="Piauí"></option>
                                    <option value="Rio de Janeiro" label="Rio de Janeiro"></option>
                                    <option value="Rio Grande do Norte" label="Rio Grande do Norte"></option>
                                    <option value="Rondônia" label="Rondônia"></option>
                                    <option value="Rio Grande do Sul" label="Rio Grande do Sul"></option>
                                    <option value="Roraima" label="Roraima"></option>
                                    <option value="Santa Catarina" label="Santa Catarina"></option>
                                    <option value="Sergipe" label="Sergipe"></option>
                                    <option value="São Paulo" label="São Paulo"></option>
                                    <option value="Tocantins" label="Tocantins"></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="cidade">Cidade</label>
                            </td>
                            <td>
                                <input type="text" name="cidade" id="cidade" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="cep">CEP</label>                                
                            </td>
                            <td>
                                <input type="text" name="cep" id="cep" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="status">Status</label>
                            </td>
                            <td>
                                <select name="status" id="status" class="form-control">
                                    <option value="" label=""></option>
                                    <option value="Ativo(a)" label="Ativo(a)"></option>
                                    <option value="Afastado(a)" label="Afatado(a)"></option>
                                    <option value="Em disciplina" label="Em disciplina"></option>
                                    <option value="Falecido" label="Falecido"></option>
                                </select>
                            </td>
                        </tr>                        
                        <tr>
                            <td>
                                <label for="nivel">Nivel</label>
                            </td>
                            <td>
                                <select name="nivel" id="nivel" class="form-control">
                                    <option value="" label=""></option>
                                    <option value="Congregado" label="Congregado"></option>
                                    <option value="Membro" label="Membro"></option>
                                    <option value="Diacono(a)" label="Diacono(a)"></option>
                                    <option value="Pastor" label="Pastor"></option>                                    
                                </select>
                            </td>
                        </tr>   
-->                            
                    </table>
                </div>
                <input type="submit" value="Buscar" class="btn">
                <input type="reset" value="Limpar" class="btn">
            </section>
        </form>        
    </body>
</html>