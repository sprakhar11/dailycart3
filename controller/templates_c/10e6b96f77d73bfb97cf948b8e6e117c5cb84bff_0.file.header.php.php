<?php
/* Smarty version 4.1.1, created on 2022-06-06 08:18:21
  from 'C:\xampp\htdocs\dailycart3\controller\header.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_629d9c2dd87542_70484893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e6b96f77d73bfb97cf948b8e6e117c5cb84bff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\controller\\header.php',
      1 => 1654496301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629d9c2dd87542_70484893 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

    require '../vendor/autoload.php';
    $smarty = new Smarty();
    include '../model/db_connt.php';

    $smarty->assign('title', 'Shop');
    $smarty->display('../view/header.tpl')

<?php echo '?>'; ?>

<?php }
}
