<?php
/* Smarty version 3.1.29, created on 2016-02-02 15:07:22
  from "D:\xampp\htdocs\myshop.local\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b0b81a35c3d6_52383701',
  'file_dependency' => 
  array (
    '842c0ac003c389f5e3b4010c4ef676978bb5653e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\myshop.local\\views\\default\\header.tpl',
      1 => 1454422034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_56b0b81a35c3d6_52383701 ($_smarty_tpl) {
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
