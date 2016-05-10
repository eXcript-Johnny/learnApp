var evento = {
    init: function(){
      this.bt_enter();  
    },
    
    bt_enter: function(){
        var me = this;
        
         $("#nome").keypress(function(e){
            if(e.which === 13){
                me.valida();
            }
            });
        
        $("#email").keypress(function(e){
            if(e.which === 13){
                me.valida();
            }
        });
         $("#telefone").keypress(function(e){
            if(e.which === 13){
                me.valida();
            }
        });
        
         $("#senha").keypress(function(e){
            if(e.which === 13){
                me.valida();
            }
        });
    },
    
    valida: function(){
        var me    = this,
            nome = $.trim($("#nome").val()),   
            email = $.trim($("#email").val()),
            telefone     = $.trim($("#telefone").val()),
            senha = $.trim($("#senha").val());
    
            if(nome !== "" && email !== "" && telefone !== "" && senha !=="" ){
                $.post("view/login.php", "&nome="+nome+"&email="+email+"&telefone"+telefone+"&senha"+senha,
                function(retorno){
                    if(retorno === "sucesso"){
                       alert("Cadastrado com sucesso");
                       $(location).attr("href", "home.php"); 
                    } else {
                      alert ("Email ou senha errada");  
                    }
                });
            } else {
                alert ("Informe o email e a senha");
            }
            
            
    }
};

$(document).ready(function(){
    evento.init();
});

function jsCadastrar(){
        setTimeout("window.location='cadastro.php'", 0);
    }
