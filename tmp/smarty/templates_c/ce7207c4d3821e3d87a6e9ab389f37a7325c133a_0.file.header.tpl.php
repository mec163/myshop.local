<?php
/* Smarty version 3.1.29, created on 2016-02-02 21:11:44
  from "C:\xampp\htdocs\myshop.local\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b10d809ba5e4_69284981',
  'file_dependency' => 
  array (
    'ce7207c4d3821e3d87a6e9ab389f37a7325c133a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\header.tpl',
      1 => 1454418434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_56b10d809ba5e4_69284981 ($_smarty_tpl) {
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <?php echo '<script'; ?>
 type="text/javascript" src="../www/js/jquery-1.12.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="../www/js/main.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" href="templates/default/css/main.css" type="text/css">
    </head>
    <body>
        <div id="header">
             <h1>my shop - интернет магазин</h1>
        </div>   
        
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
        
    <div id="centerColumn">
<?php }
}
