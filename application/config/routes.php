<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*
*General 
*/
$route['default_controller'] = 'Welcome';
$route['principal'] = 'Welcome/index';
$route['quienes_somos'] = 'Welcome/quienes_somos';
$route['formulario'] = 'Welcome/formulario'; 
$route['Comercializacion'] = 'Welcome/Comercializacion';
$route['terminosYcondiciones'] = 'Welcome/terminosYcondiciones';
$route['mantenimiento'] = 'Welcome/mantenimiento';
$route['info_contacto'] = 'Welcome/info_contacto';
$route['Accion']='Welcome/Accion';
$route['Suspenso']='Welcome/Suspenso';
$route['Terror']='Welcome/Terror';
$route['Variados']='Welcome/Variados';
/*
*usuario
*/
$route['agregarusuario_view']='Welcome/agregarusuario_view';
$route['registrarse']='back/registro_controller';
$route['registrar'] = 'back/registro_controller';

/*
*login 
*/
$route['verifico_usuario']='back/login_controller';
$route['login']='Welcome/login';
$route['logout']='back/login_controller/logout';

/*
*producto
*/
$route['ver_accion']='back/producto_controller/muestra_accion';

$route['ver_suspenso']='back/producto_controller/muestra_suspenso';

$route['ver_variados']='back/producto_controller/muestra_variados';

$route['ver_terror']='back/producto_controller/muestra_terror';

$route['Agregarproducto']='back/producto_controller/form_agrega_producto';

$route['verifico_nuevoproducto']='back/producto_controller/agrega_producto';

$route['productos_todos']='back/producto_controller';

$route['productos_modifica/(:num)']='back/producto_controller/muestra_modificar/$1';

$route['verifico_modificaproducto/(:num)']='back/producto_controller/modificar_producto/$1';

$route['productos_elimina/(:num)']='back/producto_controller/eliminar_producto/$1';

$route['productos_eliminados']='back/producto_controller/muestra_eliminados';

$route['productos_activa/(:num)']='back/producto_controller/activar_producto/$1';

/*
*Carrito
*/
$route['carrito']='back/carrito_controller';
$route['carrito_agrega']='back/carrito_controller/add';
$route['carrito_actualiza']='back/carrito_controller/actualiza_carrito';
$route['carrito_elimina/(:any)']='back/carrito_controller/remove/$1';
$route['comprar']='back/carrito_controller/muestra_compra';
$route['confirma_compra']='back/carrito_controller/guarda_compra';
$route['catalogo-productos'] = 'back/carrito_controller/catalogo';
$route['Accion-carrito']='back/carrito_controller/Accion_car';
$route['Suspenso-carrito']='back/carrito_controller/Suspenso_car';
$route['Terror-carrito']='back/carrito_controller/Terror_car';
$route['variados-carrito']='back/carrito_controller/Variados_car';

/*
*Consulta
*/

$route['contacto']='back/consulta_controller/form_agrega_consulta';
$route['cargo_consulta']='back/consulta_controller/cargo_consulta';
$route['ver_consultas']='back/consulta_controller/consultas_todas';
$route['borrar_consulta/(:num)']='back/consulta_controller/eliminar_consulta/$1';
$route['consultas']='Welcome/consultas';
/*
*Usuario
*/

$route['agrega_usuario']='back/registro_controller/agregar_usuario';
$route['usuarios_todos']='back/registro_controller/muestra_usuarios';
$route['usuario_modifica/(:num)']='back/registro_controller/muestra_modificar/$1';
$route['usuario_eliminar/(:num)']='back/registro_controller/eliminar_usuario/$1';
$route['verifico_modificausuario/(:num)']='back/registro_controller/modificar_usuario/$1';
$route['usuario_eliminados']='back/registro_controller/muestra_eliminados';
$route['usuario_activa/(:num)']='back/registro_controller/activar_usuario/$1';

/*
*Ventas
*/

$route['reporte_ventas']='back/producto_controller/listar_ventas';
$route['ventas']='back/producto_controller';
$route['muestra_detalle']='back/producto_controller/muestra_detalle/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
