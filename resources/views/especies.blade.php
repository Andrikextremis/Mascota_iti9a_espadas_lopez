@extends('layout.master')
@section('contenido')
    <!--INICIO DE VUE-->
    <div id="apiEspecies">  
    <div class="row">
    <div class="card card-warning card-outline">
    <div class="card-header">
    <h1 class="m-0">CRUD ESPECIES 
    <button class="btn btn-primary" @click="mostrarModal()">Agregar</button>
    </h1>
    <div class="card-body">
    <table class="table table-bordered table-striped table-hover table-sm">
    <thead>
    <th>CLAVE</th>
    <th>ESPECIE</th>
    </thead>
    <tbody>
    <tr v-for="especie in especies">
    <td>@{{especie.id_especie}}</td>
    <td>@{{especie.especie}}</td>
    <td>
    <button class="btn btn-primary" @click="eliminarEspecie(especie.id_especie )">ELIMINAR</button>
    <button class="btn btn-danger">EDITAR</button>
    </td></tr></tbody></table>
    </div></div></div></div>
    <!-- Modal for the formulary and motion record -->
    <div class="modal fade" id="modalEspecies" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Registro de Especies</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <form>
    <div class="form-row">
    <div class="col">
    <input type="text" class="form-control" placeholder="clave">
    </div>
    <div class="col">
    <input type="text" class="form-control" placeholder="nombre de especie">
    </div>
    </div>
    </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" @click="">Guardar</button>
    </div></div></div></div>
    <!-- End of modal-->
    </div>
    <!--Vue End-->
@endsection
@push('scripts')
<script src="{{asset('js/apis/especies.js')}}"></script>
<script src="{{asset('js/vue-resource.js')}}"></script>
@endpush
