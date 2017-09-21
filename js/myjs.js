$(document).ready(function(){
  $('#History').click(function(){
    $("#contenido").load("./views/history.html");
  });

  $('#Django').click(function(){
    $("#contenido").load("c_django.html");
  });

  $('#Jython').click(function(){
    $("#contenido").load("c_jython.html");
  });
});
