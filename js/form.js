// Garante que o browser carregou todas as renderizações. 
// $(document).ready(function(){ - mesma coisa que o debaixo.

$(function(){
    $('#btn-cadastrar').click(function(){
        
        valida();
        
        var html = '<tr>' +
                   '<td>123</td>' + // quieto
                   '<td>' + $("input[name=nome]").val() + '</td>' +
                   '<td>' + $("input[name=cpf]").val() + '</td>' +
                   '<td>' + $("input[name=telefone]").val() + '</td>' +
                   '<td>' + $("input[name=email]").val() + '</td>' +
                   '<td>' + $('select').val() + '</td>' +
                   '<td>' + $('input[name=sexo]:checked').val() + '</td>' +
                   '</tr>';
           $("#lista").append(html);
        
    }); // fim do click
    
}); // fim da função


function valida()
{
   $(".msg-erro").hide();
        
        $("input[type=text]").each(function(){  //verifica os input tipo text
            
            var valor = $(this).val().trim();
            var campo = $(this).attr("name");
        
        if (valor == "")
        {
            $(".msg-erro").html("O campo " + campo + " esta vazio");
            $(".msg-erro").show();
        }
        
        }); // fim do each
        
        if($('select').val() == 0)
        {
            $(".msg-erro").html("O campo Turma não foi selecionado");
            $(".msg-erro").show();
        }
        
        if($('input[name=sexo]:checked').val() == undefined)
        {
           $(".msg-erro").html("O sexo não foi selecionado");
           $(".msg-erro").show(); 
        } 
}