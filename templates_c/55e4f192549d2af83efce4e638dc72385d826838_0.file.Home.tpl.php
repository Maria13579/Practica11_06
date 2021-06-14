<?php
/* Smarty version 3.1.39, created on 2021-06-14 19:15:15
  from 'C:\adobeTemp\htdocs\Practica11_06\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c78ea38ad293_58267562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e4f192549d2af83efce4e638dc72385d826838' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\Practica11_06\\templates\\Home.tpl',
      1 => 1623690904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_60c78ea38ad293_58267562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
  <div class="card-panel teal lighten-2 "><h1 class="center-align">Inicie Sesion</h1> </div>
                <br/><br/>
                    <div align = "center">
                        <form method="post" action="?class=User&method=InicioSesion" >
                            <input class ="left" type="text" name="user" placeholder="Ingrese su Usuario">   
                            <br/><br/>
                            <input type="password" name="pass" placeholder="Ingrese su Contraseña">
                            <br/><br/>
                            <input class="waves-effect waves-light btn " type= "submit" value="Ingresar">
                        </form>
                    </div>
 
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
