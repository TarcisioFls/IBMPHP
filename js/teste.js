/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
    
        //var dados = $('#form').serialize();
    $('form').submit(function (){    
        $.ajax({
            type: 'POST', // Usa o método POST
            dataType: 'json',
            url: 'cadastroMembro2.php', // Página que será enviada o formulário
            async: true,
            data: dados, // Conteúdo do envio
            success: function(data) {
                if (data == 'Sucesso') {
                    alert('Foo');
                } else {
                    alert('Bar');
                }
            }
        });
        });
        return false;
    
});
    
    