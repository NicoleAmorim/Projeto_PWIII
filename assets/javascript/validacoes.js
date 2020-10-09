$(function(){
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroUser"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Usuário ou Email vazio ou é inexistente',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroPass"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Senha é obrigatório',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroLogin"){
                    Swal.fire({
                        title: 'Erro ao fazer o login!',
                        text: 'Não foi possivel efetuar o login!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "Sucesso"){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: true,
                        timer: 1500
                      }).then((result) => {
                        if (result.value)
                         {
                            window.location.replace("index");
                        }
                    })
                }
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora

$(function(){
    $('#cadastro').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroNome"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Nome vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou preencher!'
                    });
                }
                if(data == "ErroUserName"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Nome de Usuário vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou preencher!'
                    });
                }
                if(data == "ErroUserNameExiste"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Nome de Usuário existente!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroEmail"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Email vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou preencher!'
                    });
                }
                if(data == "ErroEmailExiste"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Email existente!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroCPF"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo CPF vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou preencher!'
                    });
                }
                if(data == "ErroCPFExiste"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Cpf existente!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroSenha"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Senha é obrigatório',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroConfSenha"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Confirmar Senha é obrigatório',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroSenhaNaoConfere"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'As senhas não conferem!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou conferir!'
                    });
                }
                if(data == "ErroCadastro"){
                    Swal.fire({
                        title: 'Erro ao cadastrar!',
                        text: 'Não foi possivel efetuar o cadastro!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "Sucesso"){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: true,
                        timer: 1500
                      }).then((result) => {
                        if (result.value)
                         {
                            window.location.replace("TelaLogin");
                        }
                    })
                }
            },//success
        });//ajax
        return false;
    });//function de dentro
});//function de fora

/*$(function(){
    $('#produto').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroNome"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Nome vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroEstoque"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Estoque vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroPreco")
                {
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Preço vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroDescricao"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Descrição vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }
                if(data == "ErroCodigo"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Código de Barros vazio!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }    
                if(data == "ErroCodigoRegistrado"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Código de Barros já cadastrado!',
                        icon: 'error',
                        confirmButtonText: 'Okay, vou refazer!'
                    });
                }    
                if(data == "sucess")
                {
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    timer: 1500
                  })
                  
                }
            },
        });
        return false;
    });
});*/