@extends('welcome')

@section('seccioncliente')

        <div class="container" id="Titulo">

            <div class="flex-row justify-between align-center" style="margin-top:30px; margin-bottom:30px">
              
            <h2>Nuestros Clientes Parrilla &nbsp <i class="fa fa-users" aria-hidden="true"></i></h2>

            <div class="flex-column justify-center align-center ml-30">
              
                <div class="button-add-client flex-column justify-center align-center" @click="crearTarea">
                  <i class="fa fa-user-plus fa-2x" aria-hidden="true" style="color: white"></i>

            </div>

            </div>    

                <h4 class="centrado" style="margin-top: 5px;">Añadir Cliente</h4>

            </div>

        

      

           <div class="row">
  
              <div class="col-md-6 grid-margin" v-for="(proyecto, index) in proyectos">
                <div class="card">
                  <div class="card-body">
                    
                   
                      <template v-if="!proyecto.editando">
                        
                         <div class="flex-row">
                         <div class="flex-column">

                                <h4  class="card-title">@{{proyecto.nombre}}</h4>
                              
                                <div class="flex-row card--fecha">
                                  <i class="fa fa-calendar-check-o text-muted"></i>
                                <small class=" ml-1 mb-0">Fecha de Primera compra @{{proyecto.fecha}}</small>

                                </div>

                                <div class="flex-row card--fecha">
                                  <i class="fa fa-calendar-check-o text-muted"></i>
                                <small class=" ml-1 mb-0">Fecha de Ultima compra @{{proyecto.fecha}}</small>

                                 </div>
                          
                                <div class="flex-row card--fecha">

                               
                                <i class="fa fa-star" aria-hidden="true" style="color:#ffcc2a;"></i>
                                <small class=" ml-1 mb-0">&nbsp  Nivel de fiablilidad : @{{proyecto.fiabilidad}}</small>

                                 </div>
                          </div>

                          <div>
                            
                                <div class="card--foto"></div>

                          </div>

                        </div>

                      </template>
                      
                      <template v-else>   
                        <span class="menu-title">Editar Nombre</span>
                        <input type="text" v-model="proyecto.borrador" class="form-control task" autofocus>
                        <br>
                        <span class="menu-title">Editar Fecha</span>
                        <input type="date" class="form-control" value="2012-03-03" v-model="proyecto.fecha">
                      </template>

                      
                    <template v-if="!proyecto.editando">
                      
                       <div class="flex-row justify-around" style="margin-top: 30px;">            
                          <a href="#" class="btn btn-primary btn-sm" @click="funcionEditOrAccept(proyecto)">Editar
                          <i class="fa fa-pencil-square-o" style="color: white;"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-sm" @click="funcionDeleteOrCancel(proyecto, index)">Eliminar
                          <i class="fa fa-trash " style="color:white;"></i>
                          </a>
                      </div>

                    </template>

                    <template v-else>
                      
                      <div class="flex-row justify-around" style="margin-top: 30px;">            
                          <a href="#" class="btn btn-primary btn-sm" @click="funcionGuardarCambios(proyecto)">Guardar Cambios
                          <i class="fa fa-pencil-square-o" style="color: white;"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-sm" @click="funcionDescartarCambios(proyecto)">Descartar Cambios
                          <i class="fa fa-trash" style="color:white;"></i>
                          </a>
                      </div>

                    </template>




                 
                    
                  </div>
                </div>
              </div>         
          </div>

         

          </div>
	{{-- expr --}}
@endsection