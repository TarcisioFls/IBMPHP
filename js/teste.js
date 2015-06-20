/*EDITADO POR GABI*/
/* ******************************************** */
/*  JS for Revolution slider  */
/* ******************************************** */
var slider;
var idComponente = "MainContent_";

jQuery(document).ready(function () {
    slider = jQuery('.banner').revolution({
        delay: 8000,
        startwidth: 1170,
        startheight: 550,
        hideThumbs: 10,
        navigationType: "none",
        hideArrowsOnMobile: "on",
        touchenabled: "on",
        onHoverStop: "on",
        navOffsetHorizontal: 0,
        navOffsetVertical: 20,
        stopAtSlide: -1,
        stopAfterLoops: -1,
        shadow: 0,
        fullWidth: "on",
        fullScreen: "off"
    });
});

/* ******************************************** */
/* plot js */
/* *************************************** */
$(function () {
    /* Chart data #1 */
    var d1 = [
		[0, 0],
		[1, 1.5],
		[2, 3.2],
		[3, 4.5],
		[4, 5.9],
		[5, 5],
		[6, 5.3],
		[7, 6],
		[8, 6.3],
		[9, 7],
		[10, 7.5],
		[11, 8]
	];
    var options = {
        series: {
            lines: {
                show: true,
                fill: true,
                lineWidth: 1,
                fillColor: {
                    colors: [{
                        opacity: 0.1
                    }, {
                        opacity: 0.35
                    }]
                }
            },
            points: {
                show: true,
                fill: true,
                lineWidth: 2,
                radius: 3,
                fillColor: "#fff"
            },
            shadowSize: 0
        },
        colors: ["#57d6e9"],
        grid: {
            hoverable: true,
            color: "#aaa",
            backgroundColor: "#fff",
            borderWidth: 1,
            borderColor: "#eee",
            labelMargin: 10
        },
        xaxis: {
            ticks: 6,
            font: {
                size: 12,
                color: ["#989898"]
            }
        },
        yaxis: {
            ticks: 3,
            font: {
                size: 12,
                color: ["#989898"]
            }
        },
        legend: {
            backgroundOpacity: 0,
            noColumns: 2,
            labelBoxBorderColor: "#fff"
        }
    };
    $("<div id='tooltip'></div>").css({
        position: "absolute",
        display: "none",
        "border-radius": "5px",
        padding: "5px 5px",
        color: "#999",
        "font-size": "11px",
        "background-color": "#fff",
        "border": "1px solid #ccc"
    }).appendTo("body");
    $(".plot-chart").bind("plothover", function (event, pos, item) {
        if (item) {
            var x = item.datapoint[0].toFixed(2),
				y = item.datapoint[1].toFixed(2);
            $("#tooltip").html(x + ", " + y)
				.css({
				    top: item.pageY + 5,
				    left: item.pageX + 5
				})
				.fadeIn(200);
        } else {
            $("#tooltip").hide();
        }
    });
    $.plot(".plot-chart", [{
        data: d1,
        label: "Revenue"
    }], options);
});
/* Code for GMap */
$('#map').gmap({
    'center': '37.434538, -121.89970399999999',
    'zoom': 10,
    'scrollwheel': false
}).bind('init', function () {
    $('#map').gmap('loadFusion', {
        'query': {
            'from': 297050
        }
    });
});


/* ******************************************** */
/* Valida os campos do Login */
/* *************************************** */
function validaFormLogin(obj) {

    //Nome
    if (document.getElementById(idComponente + "txtEmail").value == "") {
        alert("Informe o email cadastrado!")
        document.getElementById(idComponente + "txtEmail").focus()
        return false
    }

    //E-mail válido
    if (!evaluateEmail(document.getElementById(idComponente + "txtEmail").value)) {
        alert("O e-mail digitado não é válido.")
        document.getElementById(idComponente + "txtEmail").focus()
        return false
    }

    if (document.getElementById(idComponente + "txtPassword").value == "") {
        alert("Informe a sua senha de acesso.")
        document.getElementById(idComponente + "txtPassword").focus()
        return false
    }
    return true
}


/* ******************************************** */
/* Valida se o campo de recuperar Email está preenchido */
/* *************************************** */
function validaEmailRecuperacao(obj) {

    //Nome
    if (document.getElementById(idComponente + "txtRecuperarSenha").value == "") {
        alert("Informe o email cadastrado!")
        document.getElementById(idComponente + "txtRecuperarSenha").focus()
        return false
    }

    //E-mail válido
    if (!evaluateEmail(document.getElementById(idComponente + "txtRecuperarSenha").value)) {
        alert("O e-mail digitado não é válido.")
        document.getElementById(idComponente + "txtRecuperarSenha").focus()
        return false
    }
    return true
}



/* ******************************************** */
/*    //Valida e-mail */
/* ******************************************** */
function evaluateEmail(obj) {
    if (obj.search(/^[\w-]+(\.[\w-]+)*@(([A-Za-z\d][A-Za-z\d-]{0,61}[A-Za-z\d]\.)+[A-Za-z]{2,6}|\[\d{1,3}(\.\d{ 1,3}){3}\])$/) == -1) {
        return false;
    }
    else {
        return true;
    }
}


/* ******************************************** */
/* Verifica se uma data é válida
/* ******************************************** */
function validaData(campo, valor) {
    var date = valor;
    var ardt = new Array;
    var ExpReg = new RegExp("(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/[12][0-9]{3}");
    ardt = date.split("/");
    erro = false;
    if (date.search(ExpReg) == -1) {
        erro = true;
    }
    else if (((ardt[1] == 4) || (ardt[1] == 6) || (ardt[1] == 9) || (ardt[1] == 11)) && (ardt[0] > 30))
        erro = true;
    else if (ardt[1] == 2) {
        if ((ardt[0] > 28) && ((ardt[2] % 4) != 0))
            erro = true;
        if ((ardt[0] > 29) && ((ardt[2] % 4) == 0))
            erro = true;
    }
    if (erro) {
        alert("" + valor + ": A data de nascimento não é uma data válida!");
        campo.focus();
        campo.value = "";
        return false;
    }
    return true;
}


/* ******************************************** */
/* Valida Form Fale Conosco*/
/* ******************************************** */
function validaFormContato(obj) {

    if (document.getElementById(idComponente + "txtNome").value == "") {
        alert('Digite o seu nome');
        document.getElementById(idComponente + "txtNome").focus()
        return false
    }
    if (document.getElementById(idComponente + "txtTelefone").value == "" || document.getElementById(idComponente + "txtTelefone").value.length < 14) {
        alert('Digite o seu telefone para que se necessário possamos entrar em contato com você!');
        document.getElementById(idComponente + "txtTelefone").focus()
        return false
    }
    if (document.getElementById(idComponente + "txtEmail").value == "") {
        alert('O e-mail digitado está correto? Verifique.');
        document.getElementById(idComponente + "txtEmail").focus()
        return false
    } else if (!evaluateEmail(document.getElementById(idComponente + "txtEmail").value)) {
        alert('O e-mail digitado está correto? Verifique.');
        document.getElementById(idComponente + "txtEmail").focus();
        document.getElementById(idComponente + "txtEmail").select();
        return false;
    }

    if (document.getElementById(idComponente + "txtMensagem").value == "" || document.getElementById(idComponente + "txtMensagem").value.length < 10) {
        alert('Nos diga como podemos ajudá-lo. Seu texto deve ter no mínimo 10 caracteres!');
        document.getElementById(idComponente + "txtMensagem").focus()
        return false
    }
    
    return true
}

/* ******************************************** */
/* Valida o tipo de cliente
/* ******************************************** */

// Valida o número do Documento CPF ou Passaporte
function tipoDocumento() {

    var i = document.getElementById(idComponente + "txtPais").selectedIndex;
    if (document.getElementById(idComponente + "txtPais")[i].text == "Brasil") {
        document.getElementById("divLbCpf").innerHTML = "<label id=\"divLbCpf\" for=\"CPF\"><b>CPF</b></label>";
        document.getElementById("txtCpf").innerHTML = "<input name=\"ctl00$MainContent$txtCpf\" maxlength=\"14\" id=\"" + idComponente + "txtCpf\" class=\"form-control\" placeholder=\"Número do CPF.\" onkeypress=\"return MascaraNumerica()\" type=\"text\" onKeyUp=\"maskFormat('NNN.NNN.NNN-NN', this)\" onblur=\"maskFormat('NNN.NNN.NNN-NN', this)\">";
        document.getElementById("divCEP").className = "aparece";
    }
    else {
        document.getElementById("divLbCpf").innerHTML = "<label id=\"divLbCpf\" for=\"CPF\"><b>Passaporte</b></label>";
        //document.getElementById("divTxtCpf").innerHTML = "<input class=\"campo\" type=\"text\" name=\"divTxtCpf\" id=\"txt_cgcpf\" size=\"23\" maxlength=\"20\" value=\"\">"
        document.getElementById("txtCpf").innerHTML = "<input name=\"ctl00$MainContent$txtCpf\" maxlength=\"15\" id=\"" + idComponente + "txtCpf\" class=\"form-control\" placeholder=\"Número do Passaporte.\" onkeypress=\"return MascaraNumerica()\" type=\"text\">";
        document.getElementById("divCEP").className = "some";
    }
}




// Mascara apenas número
function MascaraNumerica() {
    if (event.keyCode < 48 || event.keyCode > 57) {
        event.keyCode = 0;
        return false;
    }
}



/**********************************************************************************/

function validaFormCadastro(obj) {

    //Nome
    if (document.getElementById(idComponente + "txtNome").value == "") {
        alert("Digite seu nome!")
        document.getElementById(idComponente + "txtNome").focus()
        return false
    }
    //Sobrenome
    if (document.getElementById(idComponente + "txtSobrenome").value == "") {
        alert("Digite seu sobrenome!")
        document.getElementById(idComponente + "txtSobrenome").focus()
        return false
    }

    var i = document.getElementById(idComponente + "txtPais").selectedIndex;
    if (document.getElementById(idComponente + "txtCpf").value == "") {
        if (document.getElementById(idComponente + "txtPais")[i].text == "Brasil") {
            alert("Digite seu CPF completo.")
            return false
        }
        if (document.getElementById(idComponente + "txtPais")[i].text != "Brasil") {
            alert("Digite seu Passaporte.")
            return false
        }
        document.getElementById(idComponente + "txtCpf").focus()
        return false
    }

    if (document.getElementById(idComponente + "txtPais")[i].text == "Brasil") {
        if (!validacpf(document.getElementById(idComponente + "txtCpf").value)) {
            alert("CPF Inválido.");
            return false
        }
    }
    //E-mail válido
    if (!evaluateEmail(document.getElementById(idComponente + "txtEmail").value)) {
        alert("O e-mail digitado não é válido.")
        document.getElementById(idComponente + "txtEmail").focus()
        return false
    }
    //Confirmação de e-mail
    if (document.getElementById(idComponente + "txtEmail").value != document.getElementById(idComponente + "txtEmail1").value) {
        alert("O e-mail digitado não confere com a confirmação.")
        document.getElementById(idComponente + "txtEmail").focus()
        return false
    }
    //Telefone
    if (document.getElementById(idComponente + "txtFoneResidencial").value == "") {
        alert("Digite um telefone residencial para contato.")
        document.getElementById(idComponente + "txtFoneResidencial").focus()
        return false
    }
    if (document.getElementById(idComponente + "txtFoneResidencial").value.length < 14) {
        alert("Telefone residencial inválido.")
        document.getElementById(idComponente + "txtFoneResidencial").focus()
        return false
    }
    if (document.getElementById(idComponente + "txtCelular").value == "") {
        alert("Digite um telefone celular para contato.")
        document.getElementById(idComponente + "txtCelular").focus()
        return false
    }
    if (document.getElementById(idComponente + "txtCelular").value.length < 14) {
        alert("Telefone celular inválido.")
        document.getElementById(idComponente + "txtCelular").focus()
        return false
    }

    if (document.getElementById(idComponente + "txtNascimento").value.length < 10) {
        alert("Informe a data do seu nascimento!")
        document.getElementById(idComponente + "txtNascimento").focus()
        return false
    }

    //Sexo
    if (document.getElementById(idComponente + "txtSexo").value == "0") {
        alert("Selecione o seu sexo.")
        document.getElementById(idComponente + "txtSexo").focus()
        return false
    }
    //Cep
    if (document.getElementById(idComponente + "txtPais")[i].text == "Brasil") {
        if (document.getElementById(idComponente + "txtCep").value.length < 9) {
            alert("CEP com número de caracteres insuficiente.");
            document.getElementById(idComponente + "txtCep").focus()
            return false
        }
    }
    //Logradouro
    if (document.getElementById(idComponente + "txtEndereco").value == "") {
        alert("Digite o seu logradouro.");
        document.getElementById(idComponente + "txtEndereco").focus();
        return false;
    }
    //Número
    if (document.getElementById(idComponente + "txtNumero").value == "") {
        alert("Digite o número do seu endereço.\nDigite 's/n' para número inexistente.");
        document.getElementById(idComponente + "txtNumero").focus();
        return false;
    }
    //Bairro
    if (document.getElementById(idComponente + "txtBairro").value == "") {
        alert("Digite o nome do seu bairro.");
        document.getElementById(idComponente + "txtBairro").focus();
        return false;
    }
    //Cidade
    if (document.getElementById(idComponente + "txtCidade").value == "") {
        alert("Digite o nome do seu cidade.");
        document.getElementById(idComponente + "txtCidade").focus();
        return false;
    }

    //Estado
    if (document.getElementById(idComponente + "txtUF").value == "") {
        alert("Digite o seu estado.");
        document.getElementById(idComponente + "txtUF").focus();
        return false;
    }

    //Estado (se Brasil)
    if (document.getElementById(idComponente + "txtPais").value == "BR") {
        if (document.getElementById(idComponente + "txtCidade").value == "") {
            alert("É necessário informar o seu estado, caso você resida no Brasil.");
            document.getElementById(idComponente + "txtCidade").focus();
            return false;
        }
    }

    //Senha
    if (document.getElementById(idComponente + "txtSenha1").value != "") {
        if (document.getElementById(idComponente + "txtSenha1").value != document.getElementById(idComponente + "txtSenha2").value) {
            alert("A senha digitada não confere com a confirmação.")
            document.getElementById(idComponente + "txtSenha1").focus()
            return false
        }
    } else {
        alert("Digite sua senha de acesso.")
        document.getElementById(idComponente + "txtSenha1").focus()
        return false
    }
    return true
}
/**********************************************************************************/



/* ******************************************** */
/* Valida o Form da Movimentacao Financeira */
/* *************************************** */
function validaFormMovimentacaoFinanceira(obj) {

    //Data inicial válida
    if (document.getElementById(idComponente + "selectPasse").value == "") {
        alert("Você precisa selecionar um passe válido!")
        document.getElementById(idComponente + "SelectPasse").focus()
        return false
    }
    if (document.getElementById(idComponente + "selectPasse").value == "0") {
        alert("Você precisa selecionar um passe válido!")
        document.getElementById(idComponente + "SelectPasse").focus()
        return false
    }
    return true
}


/* ******************************************** */
/* Valida o Form de Compra de Passes */
/* *************************************** */
function validaFormCompra(obj) {

    if (document.getElementById(idComponente + "txtNumeroCartao").value.length < 16) {
        alert("Digite só 16 caracteres do seu cartão de crédito!")
        document.getElementById(idComponente + "txtNumeroCartao").focus()
        return false
    }

    if (document.getElementById(idComponente + "txtNomeImpresso").value == "" || document.getElementById(idComponente + "txtNomeImpresso").value.length < 5) {
        alert("Digite o nome impresso no cartão!")
        document.getElementById(idComponente + "txtNomeImpresso").focus()
        return false
    }
    if (document.getElementById(idComponente + "txtCodSeguranca").value == "" || document.getElementById(idComponente + "txtCodSeguranca").value.length < 3) {
        alert("Digite o código de segurança cartão!")
        document.getElementById(idComponente + "txtCodSeguranca").focus()
        return false
    }
    
    return true
}


//Valida um CPF (apenas números)
function validacpf(cpfComMascara) {
    cpf = cpfComMascara.replace('.', '');
    cpf = cpf.replace('.', '');
    cpf = cpf.replace('-', '');
    valor = true;
    erro = new String;
    if (cpf.length < 11) erro += "Sao necessarios 11 digitos para verificacao do CPF! \n\n";
    var nonNumbers = /\D/;
    if (nonNumbers.test(cpf)) erro += "A verificacao de CPF suporta apenas numeros! \n\n";
    if (cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999") {
        erro += "Numero de CPF invalido!"
    }
    var a = [];
    var b = new Number;
    var c = 11;
    for (i = 0; i < 11; i++) {
        a[i] = cpf.charAt(i);
        if (i < 9) b += (a[i] * --c);
    }
    if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11 - x }
    b = 0;
    c = 11;
    for (y = 0; y < 10; y++) b += (a[y] * c--);
    if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11 - x; }
    if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10])) {
        erro += "Digito verificador com problema!";
    }
    if (erro.length > 0) {
        //alert(erro);
        return false;
    }
    return true;
}

//Limpa Todos os campos de um formulário
function clearForm(objForm) {
    for (i = 0; i <= (objForm.length - 1); i++) {
        vType = (objForm.item(i).name).substring(0, 3)
        switch (vType) {
            case "txt":
                (objForm.item(i)).value = ""
            case "chk":
                (objForm.item(i)).checked = false
            case "lst":
                (objForm.item(i)).selectedIndex = 0
        }
    }
}

//Aplica a mascara desejada a um campo texto
function maskFormat(mask, obj) {
    if (obj.value != "") {
        sObj = obj.value.toString()
        nString = ""

        // alterar formatacao da mascara para o nono digito, caso seja necessario
        if (sObj.length > 14) {
            mask = "(NN) NNNNN-NNNN";
        }

        for (i = 0; i < (sObj.length); i++) {
            if (!isNaN(sObj.charAt(i)) && (sObj.charAt(i) != " ")) {
                nString = nString + sObj.charAt(i)
            }
        }
        j = 0
        k = 0
        mString = ""
        while (j < nString.length && k < mask.length) {
            if (mask.charAt(k).toUpperCase() == "N") {
                mString = mString + nString.charAt(j)
                j = j + 1
            } else {
                mString = mString + mask.charAt(k)
            }
            k = k + 1
        }
        obj.value = mString
    }
}

//Aplica a mascara desejada a um campo texto - CNPJ
function maskFormatCNPJ(mask, obj) {
    if (obj.value != "") {
        sObj = obj.value.toString()
        nString = ""

        for (i = 0; i < (sObj.length); i++) {
            if (!isNaN(sObj.charAt(i)) && (sObj.charAt(i) != " ")) {
                nString = nString + sObj.charAt(i)
            }
        }
        j = 0
        k = 0
        mString = ""
        while (j < nString.length && k < mask.length) {
            if (mask.charAt(k).toUpperCase() == "N") {
                mString = mString + nString.charAt(j)
                j = j + 1
            } else {
                mString = mString + mask.charAt(k)
            }
            k = k + 1
        }
        obj.value = mString
    }
}


function maskFormatPlate(obj) {
    if (obj) {
        if (obj.value != "") {
            sObj = obj.value.toString()
            nString = ""
            mask = "LLL-NNNN"
            for (i = 0; i < (sObj.length); i++) {
                if (i < 3) {
                    letter = sObj.charAt(i).toUpperCase();
                    if ((letter >= "A") && (letter <= "Z") && (sObj.charAt(i) != " ")) {
                        nString = nString + letter
                    }
                } else {
                    if (!isNaN(sObj.charAt(i)) && (sObj.charAt(i) != " ")) {
                        nString = nString + sObj.charAt(i)
                    }
                }
            }
            j = 0
            k = 0
            mString = ""
            while (j < nString.length && k < mask.length) {
                if (mask.charAt(k).toUpperCase() == "N" || mask.charAt(k).toUpperCase() == "L") {
                    mString = mString + nString.charAt(j)
                    j = j + 1
                } else {
                    mString = mString + mask.charAt(k)
                }
                k = k + 1
            }
            obj.value = mString
        }
    }
}
//Mostra a dica do campo em um objeto SPAN de nome info
function msg_onfocus(msg) {
    info.innerHTML = msg
}

//Mostra o tamanho da caixa e texto ou textarea em um objeto SPAN passado em objCounter
function counter(obj, objCounter, maxLength) {
    if (obj.value.length > maxLength) {
        obj.value = (obj.value).substring(0, maxLength)
    }
    objCounter.innerHTML = "(" + (obj.value).length + "/" + maxLength + ")"
}

function validateFloat(Obj) {
    if (isNaN(Obj.value)) {
        val = Obj.value.toString()
        newval = ''
        for (i = 0; i <= val.length; i++) {
            if (!isNaN(val.substring(i, i + 1)) || val.substring(i, i + 1) == '.' || val.substring(i, i + 1) == ',') {
                if (val.substring(i, i + 1) == ',') {
                    newval = newval + '.'
                } else {
                    newval = newval + val.substring(i, i + 1)
                }
            }
        }
        Obj.value = newval
        Obj.focus()
    }
}

//Valida e-mail
function evaluateEmail(obj) {
    if (obj.search(/^[\w-]+(\.[\w-]+)*@(([A-Za-z\d][A-Za-z\d-]{0,61}[A-Za-z\d]\.)+[A-Za-z]{2,6}|\[\d{1,3}(\.\d{ 1,3}){3}\])$/) == -1) {
        return false;
    }
    else {
        return true;
    }
}

//Limpa Todos os campos de um formulário
function clearForm(objForm) {
    for (i = 0; i <= (objForm.length - 1); i++) {
        vType = (objForm.item(i).name).substring(0, 3)
        switch (vType) {
            case "txt":
                (objForm.item(i)).value = ""
            case "chk":
                (objForm.item(i)).checked = false
            case "lst":
                (objForm.item(i)).selectedIndex = 0
        }
    }
}

//Aplica a mascara desejada a um campo texto
function maskFormat(mask, obj) {
    if (obj.value != "") {
        sObj = obj.value.toString()
        nString = ""

        // alterar formatacao da mascara para o nono digito, caso seja necessario
        if (sObj.length > 14) {
            mask = "(NN) NNNNN-NNNN";
        }

        for (i = 0; i < (sObj.length); i++) {
            if (!isNaN(sObj.charAt(i)) && (sObj.charAt(i) != " ")) {
                nString = nString + sObj.charAt(i)
            }
        }
        j = 0
        k = 0
        mString = ""
        while (j < nString.length && k < mask.length) {
            if (mask.charAt(k).toUpperCase() == "N") {
                mString = mString + nString.charAt(j)
                j = j + 1
            } else {
                mString = mString + mask.charAt(k)
            }
            k = k + 1
        }
        obj.value = mString
    }
}

//Aplica a mascara desejada a um campo texto - CNPJ
function maskFormatCNPJ(mask, obj) {
    if (obj.value != "") {
        sObj = obj.value.toString()
        nString = ""

        for (i = 0; i < (sObj.length); i++) {
            if (!isNaN(sObj.charAt(i)) && (sObj.charAt(i) != " ")) {
                nString = nString + sObj.charAt(i)
            }
        }
        j = 0
        k = 0
        mString = ""
        while (j < nString.length && k < mask.length) {
            if (mask.charAt(k).toUpperCase() == "N") {
                mString = mString + nString.charAt(j)
                j = j + 1
            } else {
                mString = mString + mask.charAt(k)
            }
            k = k + 1
        }
        obj.value = mString
    }
}


function maskFormatPlate(obj) {
    if (obj) {
        if (obj.value != "") {
            sObj = obj.value.toString()
            nString = ""
            mask = "LLL-NNNN"
            for (i = 0; i < (sObj.length); i++) {
                if (i < 3) {
                    letter = sObj.charAt(i).toUpperCase();
                    if ((letter >= "A") && (letter <= "Z") && (sObj.charAt(i) != " ")) {
                        nString = nString + letter
                    }
                } else {
                    if (!isNaN(sObj.charAt(i)) && (sObj.charAt(i) != " ")) {
                        nString = nString + sObj.charAt(i)
                    }
                }
            }
            j = 0
            k = 0
            mString = ""
            while (j < nString.length && k < mask.length) {
                if (mask.charAt(k).toUpperCase() == "N" || mask.charAt(k).toUpperCase() == "L") {
                    mString = mString + nString.charAt(j)
                    j = j + 1
                } else {
                    mString = mString + mask.charAt(k)
                }
                k = k + 1
            }
            obj.value = mString
        }
    }
}
//Mostra a dica do campo em um objeto SPAN de nome info
function msg_onfocus(msg) {
    info.innerHTML = msg
}

//Mostra o tamanho da caixa e texto ou textarea em um objeto SPAN passado em objCounter
function counter(obj, objCounter, maxLength) {
    if (obj.value.length > maxLength) {
        obj.value = (obj.value).substring(0, maxLength)
    }
    objCounter.innerHTML = "(" + (obj.value).length + "/" + maxLength + ")"
}

function validateFloat(Obj) {
    if (isNaN(Obj.value)) {
        val = Obj.value.toString()
        newval = ''
        for (i = 0; i <= val.length; i++) {
            if (!isNaN(val.substring(i, i + 1)) || val.substring(i, i + 1) == '.' || val.substring(i, i + 1) == ',') {
                if (val.substring(i, i + 1) == ',') {
                    newval = newval + '.'
                } else {
                    newval = newval + val.substring(i, i + 1)
                }
            }
        }
        Obj.value = newval
        Obj.focus()
    }
}




    
    