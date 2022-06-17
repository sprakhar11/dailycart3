<?php
/* Smarty version 4.1.1, created on 2022-06-17 09:47:09
  from 'C:\xampp\htdocs\dailycart3\view\manage_address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac317d9306a3_09758963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87cf501ff33a53a03675211e5a37ab44f2a92432' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\manage_address.tpl',
      1 => 1655452029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_62ac317d9306a3_09758963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="en">
<h1 style="text-align: center;">Manage Address</h1>
<h5><?php echo $_smarty_tpl->tpl_vars['update_message']->value;?>
</h5>
<h5><?php echo $_smarty_tpl->tpl_vars['deletemsg']->value;?>
</h5>



<br><br>
<div >
<div >



<?php }
}
