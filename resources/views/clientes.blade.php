@extends('welcome')

@section('seccioncliente')

 <div class="container" id="Titulo">

        <h2 style="margin-top:30px; margin-bottom:30px">Nuestros Clientes Parrilla</h2>

           <div class="row">
  
              <div class="col-md-6 grid-margin" v-for="proyecto in proyectos">
                <div class="card">
                  <div class="card-body">
                    
                      <template v-if="!proyecto.editando">
                        <h4 class="card-title mb-0" >@{{proyecto.nombre}}</h4>
                         <div class="d-flex justify-content-between align-items-center">
                          <div class="d-inline-block pt-3">
                            <div class="d-flex">
                              <!-- <h2 class="mb-0">$10,200</h2> -->
                              <div class="d-flex align-items-center ml-2">
                                <i class="fa fa-calendar-check-o text-muted"></i>
                                <small class=" ml-1 mb-0">Fecha de Primera compra @{{proyecto.fecha}}</small>
                              </div>
                            </div>
                            <small class="text-gray">&nbsp  Avance actual del proyecto : @{{proyecto.avance}}</small>
                          </div>
                          <div class="d-inline-block">
                            
                            <div class="bg-success px-4 py-2 rounded">
                              <i class="fa fa-user-circle-o text-white icon-lg"></i>
                            </div>
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
                          <a href="#" class="btn btn-danger btn-sm" @click="funcionEditOrAccept(proyecto)">Eliminar
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