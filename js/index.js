var contenido=document.getElementById('contenido');
var ciudad=document.getElementById('selectCiudad');
var tipo=document.getElementById('selectTipo');

$(document).ready(function(){

  $("#rangoPrecio").ionRangeSlider({
    type: "double",
    grid: true,
    min: 0,
    max: 100000,
    from: 200,
    to: 80000,
    prefix: "$"
});

  $("#selectCiudad").ready(function(){
    $.ajax({
      url:'mostrarCiudad.php',
      type:'POST',
      data:{},
      success:function(data){
          ciudad.innerHTML=data;
      }
    });
  });

  $("#selectTipo").ready(function(){
    $.ajax({
      url:'mostrarTipo.php',
      type:'POST',
      data:{},
      success:function(data){
          tipo.innerHTML=data;
      }
    });
  });

  $("#mostrarTodos").click(function(){
    $(".tituloContenido").height(100);
    $(".colContenido").css('display','block');
    $.ajax({
      url:'mostrarTodos.php',
      type:'POST',
      data:{},
      success:function(data){
          contenido.innerHTML=data;
      }
    });
  });

  $("#submitButton").click(function(){
    sCiudad=document.getElementById('selectCiudad').value;
    sTipo=document.getElementById('selectTipo').value;
    rPrecio=document.getElementById('rangoPrecio').value;
    $(".tituloContenido").height(100);
    $(".colContenido").css('display','block');
    $.ajax({
      url:'mostrarFiltro.php',
      type:'POST',
      data:{ciudad:sCiudad,tipo:sTipo,rango:rPrecio},
      success:function(data){
          contenido.innerHTML=data;
      }
    });
  });
});
