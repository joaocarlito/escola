// Garante que o browser carregou todas as renderizações. 
// $(document).ready(function(){ - mesma coisa que o debaixo.

$(function(){
    
    $("input[name=cpf]").mask('000.000.000-00');
    
    $('#btn-cadastrar').click(function(){
        
        valida();
        
        if(valida() == true)
        {
        
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
           $("input[type=text]").val('');
           $('select').val('0');
           $('input[name=sexo]').prop("checked", false);
        
        }
        
    }); // fim do click
    
    $("input[name=telefone]").keydown(function(ev){
        console.log(ev.keyCode);
        
        if(ev.keyCode < 48 || ev.keyCode > 57 && ev.keyCode < 96 || ev.keyCode > 105)
        {
            return false;
        }
        
    }); //fim keydown
    
}); // fim da função


function valida()
{
    var correto = true;
    
   $(".msg-erro").hide();
   $(".input-erro").removeClass('input-erro');
        
        $("input[type=text]").each(function(){  //verifica os input tipo text
            
            var valor = $(this).val().trim();
            var campo = $(this).attr("name");
        
        if (valor == "")
        {
            $(".msg-erro").html("O campo " + campo + " esta vazio");
            $(".msg-erro").show();
            $(this).parent().addClass("input-erro");
            
            correto = false;
        }
        
        }); // fim do each
        
        if($('select').val() == 0)
        {
            $(".msg-erro").html("O campo Turma não foi selecionado");
            $(".msg-erro").show();
            $('select').parent().addClass("input-erro");
            
            correto = false;
        }
        
        if($('input[name=sexo]:checked').val() == undefined)
        {
           $(".msg-erro").html("O sexo não foi selecionado");
           $(".msg-erro").show();
           $('input[name=sexo]').parent().addClass("input-erro");
           
           correto = false;
        } 
        
        var regex_email = /^[a-z0-9.-]+@[a-z]+\.[a-z.]+$/;
        var email = $("input[name=email]").val();
        
        if(regex_email.test(email) == false)
        {
            correto = false;
           $(".msg-erro").html("O email não esta correto");
           $(".msg-erro").show();
           $('input[name=email]').parent().addClass("input-erro");
        }
        
        return correto;
}