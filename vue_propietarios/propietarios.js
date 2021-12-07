new Vue({
    //Zona de usar de Vue
    el:"#miPagina",

    //Zona para declarar variables
    //y constantes
    data:{
        nombre:'',
        apellidoP:'',
        apellidoM:'',
        genero:'',
        editando:0,
        indice:0,
        buscar:'',
        propietarios:[{nombre:'Maxymus', apellidoP:'Kanata', apellidoM:'Yukimura', genero:'M'},
                      {nombre:'Diego', apellidoP:'Zelada', apellidoM:'Ensalada', genero:'M'},
                      {nombre:'Saga', apellidoP:'Mesa', apellidoM:'Desk', genero:'M'},
                      {nombre:'Indy', apellidoP:'Anzu', apellidoM:'Mura', genero:'F'}],
        generos:[
                      {clave:1,nombre:'M'},
                      {clave:2,nombre:'F'},
], },
    //methods create functions and procedures
    methods:{

    agregarPropietario:function(){  
    if(this.nombre && this.apellidoP && this.apellidoP && this.apellidoM && this.genero){
    var unPropietario={nombre:this.nombre,apellidoP:this.apellidoP,apellidoM:this.apellidoM,genero:this.genero}      
    this.propietarios.push(unPropietario);
    this.limpiarHtml(); 

              //we send the focus to the first component to the html and name of the pet
    this.$refs.nombre.focus(); 
    Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'guardado',
    showConfirmButton: false,
    timer: 2000
      }) }
    else{
    Swal.fire({
    position: 'top end',
    icon:'error',
    title: 'faltan datos',
    showConfirmButton: false,
    timer: 2000
         });  }},

    limpiarHtml:function(){
    this.nombre='';
    this.apellidoP='';
    this.apellidoM='';
    this.genero='';
        },

    eliminarPropietario:function(pos){
    var pregunta=confirm('elimiminar?');
    if(pregunta)
    this.propietarios.splice(pos,1);
    },
    editarPropietario:function(pos){
    this.nombre=this.propietarios[pos].nombre;
    this.apellidoP=this.propietarios[pos].apellidoP;
    this.apellidoM=this.propietarios[pos].apellidoM;
    this.genero=this.propietarios[pos].genero;
    this.editando=1;
    this.indice=pos;
    },
    cancelar:function(){
    this.limpiarHtml();
    this.editando=0;
    },
    //the value of objects is modified
    guardarEdicion:function(){
    this.propietarios[this.indice].nombre=this.nombre;
    this.propietarios[this.indice].apellidoP=this.apellidoP;
    this.propietarios[this.indice].apellidoM=this.apellidoM;
    this.propietarios[this.indice].genero=this.genero;
    this.limpiarHtml();
    this.editando=0;
    },
    editarPropietario:function(pos){
    this.nombre=this.propietarios[pos].nombre;
    this.apellidoP=this.propietarios[pos].apellidoP;
    this.apellidoM=this.propietarios[pos].apellidoM;
    this.genero=this.propietarios[pos].genero;
    this.editando=1;
    this.indice=pos;
    },},
    //End of methods
    //calculation section
    computed:{
    numeroPropietarios:function(){
    var num=0;
    num=this.propietarios.length;
    return num;
    },
    filtroPropietarios:function(){
    return this.propietarios.filter((propietario)=>{
    return propietario.nombre.toLowerCase().match(this.buscar.toLowerCase().trim()) ||
    propietario.apellidoP.toLowerCase().match(this.buscar.toLowerCase().trim())
    });
    }}
})