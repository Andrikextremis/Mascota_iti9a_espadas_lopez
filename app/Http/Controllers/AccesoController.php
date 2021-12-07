<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AccesoController extends Controller
{
public function validar(Request $r){
$usuario=$r->get('usuario');
$contraseña=$r->get('password');
$validarUsuario=DB::SELECT("SELECT *
                                    FROM usuarios
                                    WHERE usuario='$usuario'");
//return $validarusuario;
if(!empty($validarUsuario)) {
//return thw users exists
//return $validarUsuario
$validarUsuario=$validarUsuario[0];
//return $validarUsuario;  
$passDB=$validarUsuario->password;
if($passDB==$contraseña)
return 'Bienvenido';
else
return 'contraseñaincorrecta';    
}
else
return 'El usuario no existe';    
}}
