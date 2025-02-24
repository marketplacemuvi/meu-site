$(function(){
    // Transformar o botão em um botão estilo jQuery UI
    $("#btnJQueryUI").button().click(function(){
      alert("Clique detectado com jQuery UI!");
    });
  });
  $("#btnEnviar").click(function(){
    $.ajax({
      url: "php/processa.php",
      method: "POST",
      data: {
        usuario: $("#inputUsuario").val()
      },
      success: function(resposta){
        alert("PHP retornou: " + resposta);
      },
      error: function(){
        alert("Ocorreu um erro na requisição.");
      }
    });
  });
  