<?php
/* Smarty version 3.1.29, created on 2016-02-02 12:58:25
  from "D:\xampp\htdocs\myshop.local\views\default\product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b099e109c601_92853655',
  'file_dependency' => 
  array (
    'b949259b1aebd11dd1f34fdb386b5a6d0a313991' => 
    array (
      0 => 'D:\\xampp\\htdocs\\myshop.local\\views\\default\\product.tpl',
      1 => 1454414297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b099e109c601_92853655 ($_smarty_tpl) {
?>

<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="300" src="../www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
"><br>
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>

    
<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить из корзины</a>
<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
<p> Oписание <br><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>

 <?php }
}
