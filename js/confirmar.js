// funcion para confirmar la eliminacion o modificaion 

function confirmar(){

  $("#top").empty();
  $("#top").html('<div class="modal-body"><div id="contenidodemodal" style="justify-content: center;display: flex;"> <h2>Confirmar</h2></div></div> <div class="modal-footer" id="botones" style="justify-content: center;">   <button type="button" class="btn btn-primary" id="si" >Si</button> <button type="button" class="btn btn-primary" id="no" >No</button></div>');
  $("#mostrarmodal").modal("show");
  $("#no").on('click',function() {
    $("#mostrarmodal").modal("hide");
    
  });


}

$("#mostrarmodal").on("hidden.bs.modal", function () {
   $('#botones').remove();
});