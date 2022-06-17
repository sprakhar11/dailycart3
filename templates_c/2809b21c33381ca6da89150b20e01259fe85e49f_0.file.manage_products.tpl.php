<?php
/* Smarty version 4.1.1, created on 2022-06-17 09:53:53
  from 'C:\xampp\htdocs\dailycart3\view\manage_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac3311e1c3d1_56141544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2809b21c33381ca6da89150b20e01259fe85e49f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\manage_products.tpl',
      1 => 1655452424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_62ac3311e1c3d1_56141544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!doctype html>
<html lang="en">
<body>
<h1 style="text-align: center;">Manage products</h1>
<h5><?php echo $_smarty_tpl->tpl_vars['deletemsg']->value;?>
</h5>
<h5><?php echo $_smarty_tpl->tpl_vars['update_message']->value;?>
</h5>

            <div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4"><?php }
}
