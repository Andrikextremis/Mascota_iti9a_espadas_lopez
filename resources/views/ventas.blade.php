@extends('layout.master')
@section('titulo','VENTAS')
@section('contenido')
<!--Vue Start-->
<div id="apiVenta">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="input-group mb-3">
<input type="text" placeholder="Escriba el codigo del producto" aria-label="Recipent's username"
aria-describedby="basic-addon2" v-model="sku" v-on:keyup.enter="buscarProducto()"> 
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button" @@click="buscarProducto()">Buscar</button>
</div></div></div></div>
<!--Row End-->
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<table class="table table-bordered">
<thead>
<th style="background: #ffff66">SKU</th>
<th style="background: #ffff66">PRODUCTO</th>
<th style="background: #ffff66">PRECIO</th>
<th style="background: #ffff66">CANTIDAD</th>
<th style="background: #ffff66">TOTAL</th>
</thead>
<tbody>
<tr v-for="(venta,index) in ventas">
<td>@{{venta.sku}}</td>
<td>@{{venta.nombre}}</td>
<td>@{{venta.precio_venta}}</td>
<td><input type="number" v-model.number="cantidades[index]"></td>
<td>@{{totalProducto(index)}}</td>
</tr></tbody></table>
</div></div>
<!--Row - Cardbody - Card (Ends -->
</div></div></div>    
<div class="row">
<div class="col-md-8">
<div class="col-md-4">
<div class="card">
<div class="card-body">
<table class="table table-bordered table-condensed">
<tr>
<th style="background: #ffff66">SUBTOTAL</th>
<td>$ @{{subTotal}}</td>
</tr>
<tr>
<th style="background: #ffff66">IVA</th>
<td>$ @{{iva}}</td>
</tr>
<tr>
<th style="background: #ffff66">TOTAL</th>
<td>$ @{{sumaTotal}}</td>
</tr>
<tr>
<th style="background: #ffff66">ARTICULOS</th>
<td>@{{noArticulos}}</td>
</tr>
</table>
</div>
<!--Cardboy and Card ends-->
</div></div>
@{{cantidades}}
</div>
</div>
</div>
<!--Vue End-->
@endsection
@push('scripts')
<script src="{{asset('js/apis/apiVenta.js')}}"></script>
<script src="{{asset('js/vue-resource.js')}}"></script>
@endpush