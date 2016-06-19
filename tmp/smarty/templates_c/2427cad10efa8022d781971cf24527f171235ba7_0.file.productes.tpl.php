<?php
/* Smarty version 3.1.29, created on 2016-01-30 08:09:05
  from "D:\xampp\htdocs\myshop.local\views\default\productes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ac61910da5b1_92375013',
  'file_dependency' => 
  array (
    '2427cad10efa8022d781971cf24527f171235ba7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\myshop.local\\views\\default\\productes.tpl',
      1 => 1454077193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ac61910da5b1_92375013 ($_smarty_tpl) {
?>

<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="../www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>

    
<a href="#" alt="Добавить в корзину"> Добавить в корзину </a>
<p> Oписание <br><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }
}
