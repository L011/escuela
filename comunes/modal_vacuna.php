<div class="container">	  
<div class="modal fade" id="mostrarmodal_v" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content" id="top">
     <div class="modal-header" >
      <h4>Vacunas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="modalcerrar">&times;</button>
            <div id="cabezerademodal">
			</div>
     </div>
     <div class="modal-body">
      <form class="form-inline">
        <label class="my-1 mr-2" for="vacuna_name"> Vacuna </label>
        <input type="text" name="vacuna_name" class="form-control mb-2 mr-sm-2" id="vacuna_name" placeholder="Ingresar nombre vacuna">

        <button class="btn btn-secondary my-1" id="agregar_vacuna"> Agregar</button>


      </form>

            <table class="table">

              <thead>
                <tr>
                  <th scope="col"> # </th>
                  <th scope="col"> Vacuna </th>
                </tr>

              </thead>
              

              <tbody id="contenidodemodal_v">
                

              </tbody>

            </table>

     </div>
     <div class="modal-footer" id="botones_modal">
        <a href="#" data-dismiss="modal" class="btn btn-primary">
		<span class="glyphicon glyphicon-home"></span>
		Cerrar</a>
     </div>
    </div>
   </div>
</div>
</div>







<div class="container">   
   <div class="modal fade bd-example-modal-sm" id="modalconfirmacion" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-sm">

       <div class="modal-content" id="contenidoconfirmacion">
         desea
       </div>
     </div>
   </div>
</div>