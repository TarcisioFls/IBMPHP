<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>1ª Igreja Batista em Muribeca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include_once './menu.php';
        ?>
        <form method="POST" action="cadastroMembro.php">
            <section class="container-fluid">
            <br/>
            <a href="index.php" <span>Pagina Inicial</span></a>
            <h3>Atualização dos Dados Pessoais</h3>
            <div class="panel panel-default">
                <table class="table-condensed">
                    <?php
                        ini_set('default_charset','UTF-8');

                        $id = isset($_POST ['id']) ? $_POST['id'] : '';
            //            $nome = isset($_POST ['nome']) ? $_POST['nome'] : '';
            //            $nomePai = isset($_POST ['nomePai']) ? $_POST['nomePai'] : '';
            //            $nomeMae = isset($_POST ['nomeMae']) ? $_POST['nomeMae'] : '';
            //            $dataNascimento = isset($_POST ['dataNascimento']) ? $_POST['dataNascimento'] : '';
            //            $dataConversao = isset($_POST ['dataConversao']) ? $_POST['dataConversao'] : '';
            //            $dataBatismo = isset($_POST ['dataBatismo']) ? $_POST['dataBatismo'] : '';
            //            $sexo = isset($_POST ['sexo']) ? $_POST['sexo'] : '';
            //            $estadoCivil = isset($_POST ['estadoCivil']) ? $_POST['estadoCivil'] : '';
            //            $conjuge = isset($_POST ['conjuge']) ? $_POST['conjuge'] : '';
            //            $quantidadeFilho = isset($_POST ['quantidadeFilho']) ? $_POST['quantidadeFilho'] : '';
            //            $rg = isset($_POST ['rg']) ? $_POST['rg'] : '';
            //            $cpf = isset($_POST ['cpf']) ? $_POST['cpf'] : '';
            //            $rua = isset($_POST ['rua']) ? $_POST['rua'] : '';
            //            $numero = isset($_POST ['numero']) ? $_POST['numero'] : '';
            //            $bairro = isset($_POST ['bairro']) ? $_POST['bairro'] : '';
            //            $estado = isset($_POST ['estado']) ? $_POST['estado'] : '';
            //            $cidade = isset($_POST ['cidade']) ? $_POST['cidade'] : '';
            //            $cep = isset($_POST ['cep']) ? $_POST['cep'] : '';
            //            $referencia = isset($_POST ['referencia']) ? $_POST['referencia'] : '';
            //            $status = isset($_POST ['status']) ? $_POST['status'] : '';
            //            $nivel = isset($_POST ['nivel']) ? $_POST['nivel'] : '';
            //            $fone1 = isset($_POST ['fone1']) ? $_POST['fone1'] : '';
            //            $fone2 = isset($_POST ['fone2']) ? $_POST['fone2'] : '';
            //            $email= isset($_POST ['email']) ? $_POST['email'] : '';

                       include "./conexao.php";

                        $queryAtualizar = "SELECT * FROM usuario WHERE id ='$id'";

                        $result2 = mysqli_query($conn, $queryAtualizar);
                        while ($query3 = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
                            echo "<tr>
                                        <td>
                                            <label for='id'>id</label>
                                        </td>                            
                                        <td>
                                            <input type='text' name='id' id='id' required='required' readonly='true' class='form-control' value='".$query3['id']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='nome'>Nome</label>
                                        </td>                            
                                        <td>
                                            <input type='text' name='nome' id='nome' required='required' class='form-control' value='".$query3['nome']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='nomePai'>Nome do pai</label>                    
                                        </td>
                                        <td>
                                            <input type='text' name='nomePai' id='nomePai' required='required' class='form-control' value='".$query3['nomePai']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='nomeMae'>Nome da Mãe</label>
                                        </td>
                                        <td>
                                            <input type='text' name='nomeMae' id='nomeMae' required='required' class='form-control' value='".$query3['nomeMae']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='dataNascimento'>Data de Nascimento</label>
                                        </td>
                                        <td>
                                            <input type='date' name='dataNascimento' id='dataNascimento' required='required' class='form-control' value='".$query3['dataNascimento']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='dataConversao'>Data de Conversão</label>
                                        </td>
                                        <td>
                                            <input type='date' name='dataConversao' id='dataConversao' required='required' class='form-control' value='".$query3['dataConversao']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='dataBatismo'>Data de Batismo</label>
                                        </td>
                                        <td>
                                            <input type='date' name='dataBatismo' id='dataBatismo' class='form-control' value='".$query3['dataBatismo']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='sexo'>Sexo</label>
                                        </td>
                                        <td>
                                            <select name='sexo' id='sexo' required='required' class='form-control'>
                                                <option  value='".$query3['sexo']."' label='".$query3['sexo']."'></option>
                                                <option value='Feminino' label='Feminino'></option>
                                                <option value='Masculino' label='Masculino'></option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='estadoCivil'>Estado Civil</label>
                                        </td>
                                        <td>
                                            <select name='estadoCivil' id='estadoCivil' class='form-control'>
                                                <option value='".$query3['estadoCivil']."' label='".$query3['estadoCivil']."'></option>
                                                <option value='Solteiro(a)' label='Solteiro(a)'></option>
                                                <option value='Casado(a)' label='Casado(a)'></option>
                                                <option value='Divorciado(a)' label='Divorciado(a)'></option>
                                                <option value='Viúvo(a)' label='Viúvo(a)'></option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='conjuge'>Cônjuge</label>
                                        </td>
                                        <td>
                                            <input type='text' name='conjuge' id='conjuge' class='form-control' value='".$query3['conjuge']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='quantidadeFilho'>Quantidade de Filhos</label>
                                        </td>
                                        <td>
                                            <input type='text' name='quantidadeFilho' id='quantidadeFilho' class='form-control' value='".$query3['quantidadeFilho']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='rg'>RG</label>
                                        </td>
                                        <td>
                                            <input type='text' name='rg' id='rg' class='form-control' value='".$query3['rg']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='cpf'>CPF</label>
                                        </td>
                                        <td>
                                            <input type='text' name='cpf' id='cpf' class='form-control' value='".$query3['cpf']."'>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <h3>Atualização dos Dados de Endereço</h3>
                            <div class='panel panel-default'>
                                <table class='table-condensed'>
                                    <tr>
                                        <td>
                                            <label for='rua'>Rua</label>
                                        </td>
                                        <td>
                                            <input type='text' name='rua' id='rua' required='required' class='form-control' value='".$query3['rua']."'>
                                        </td>
                                        <td>
                                            <label for='numero'>Número</label>
                                        </td>
                                        <td>
                                            <input type='text' name='numero' id='numero' class='form-control' value='".$query3['numero']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='bairro'>Bairro</label>
                                        </td>
                                        <td>
                                            <input type='text' name='bairro' id='bairro' class='form-control' value='".$query3['bairro']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='estado'>Estado</label>
                                        </td>
                                        <td>
                                            <select id='estado' name='estado' required='required' class='form-control'>
                                                <option  value='".$query3['estado']."' label='".$query3['estado']."'></option>
                                                <option value='Acre' label='Acre'></option>
                                                <option value='Alagoas' label='Alagoas'></option>
                                                <option value='Amazonas' label='Amazonas'></option>
                                                <option value='Amapá' label='Amapá'></option>
                                                <option value='Bahia' label='Bahia'></option>
                                                <option value='Ceará' label='Ceará'></option>
                                                <option value='Distrito Federal' label='Distrito Federal'></option>
                                                <option value='Espírito Santo' label='Espírito Santo'></option>
                                                <option value='Goiás' label='Goiás'></option>
                                                <option value='Maranhão' label='Maranhão'></option>
                                                <option value='Mato Grosso' label='Mato Grosso'></option>
                                                <option value='Mato Grosso do Sul' label='Mato Grosso do Sul'></option>
                                                <option value='Minas Gerais' label='Minas Gerais'></option>
                                                <option value='Pará' label='Pará'></option>
                                                <option value='Paraíba' label='Paraíba'></option>
                                                <option value='Paraná' label='Paraná'></option>
                                                <option value='Pernambuco' label='Pernambuco'></option>
                                                <option value='Piauí' label='Piauí'></option>
                                                <option value='Rio de Janeiro' label='Rio de Janeiro'></option>
                                                <option value='Rio Grande do Norte' label='Rio Grande do Norte'></option>
                                                <option value='Rondônia' label='Rondônia'></option>
                                                <option value='Rio Grande do Sul' label='Rio Grande do Sul'></option>
                                                <option value='Roraima' label='Roraima'></option>
                                                <option value='Santa Catarina' label='Santa Catarina'></option>
                                                <option value='Sergipe' label='Sergipe'></option>
                                                <option value='São Paulo' label='São Paulo'></option>
                                                <option value='Tocantins' label='Tocantins'></option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='cidade'>Cidade</label>
                                        </td>
                                        <td>
                                            <input type='text' name='cidade' id='cidade' class='form-control' value='".$query3['cidade']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='cep'>CEP</label>
                                        </td>
                                        <td>
                                            <input type='text' name='cep' id='cep' class='form-control' value='".$query3['cep']."'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='referencia'>Referência</label>
                                        </td>
                                        <td>
                                            <input type='text' name='referencia' id='referencia' required='required' class='form-control' value='".$query3['referencia']."'>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <h3>Atualização dos Dados do Perfil</h3>
                                <div  class='panel panel-default'>
                                <table class='table-condensed'>
                                    <tr>
                                    <label for='imagem'> Imagem do Membro </label>
                                    </tr>
                                    <tr>
                                    <input type='file' id='imagem'>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='status'>Status</label>
                                        </td>
                                        <td>
                                            <select name='status' id='status' class='form-control'>
                                                <option  value='".$query3['status']."' label='".$query3['status']."'></option>
                                                <option value='Ativo(a)' label='Ativo(a)'></option>
                                                <option value='Afastado(a)' label='Afatado(a)'></option>
                                                <option value='Em disciplina' label='Em disciplina'></option>
                                                <option value='Falecido' label='falecido'></option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for='nivel'>Nível</label>
                                        </td>
                                        <td>
                                            <select name='nivel' id='nivel' class='form-control'>
                                                <option  value='".$query3['nivel']."' label='".$query3['nivel']."'></option>
                                                <option value='Congregado' label='Congregado'></option>
                                                <option value='Membro' label='Membro'></option>
                                                <option value='Diacono(a)' label='Diacono(a)'></option>
                                                <option value='Pastor' label='Pastor'></option>                                    
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <h3>Atualização dos Dados de Contatos</h3>
                            <div  class='panel panel-default'>
                            <table class='table-condensed'>
                                <tr>
                                    <td>
                                        <label for='fone1'>Telefone Primario</label>
                                    </td>
                                    <td>
                                        <input type='text' name='fone1' id='fone1' class='form-control' value='".$query3['fone1']."'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for='fone2'>Telefone Para Recados</label>
                                    </td>
                                    <td>
                                        <input type='text' name='fone2' id='fone2' class='form-control'  value='".$query3['fone2']."'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for='email'>E-mail</label>
                                    </td>
                                    <td>
                                        <input type='email' name='email' id='email' class='form-control'  value='".$query3['email']."'>
                                    </td>
                                </tr>
                            </div>
                            </table>";
                        }    
                    ?>
            </section>
            <input type="submit" value="Atualizar Cadastro" class="btn">
            <input type="reset" value="Limpar" class="btn">
        </form>
    </body>
</html>
