<?php
/* Smarty version 4.1.1, created on 2022-06-17 09:36:16
  from 'C:\xampp\htdocs\dailycart3\view\myAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac2ef09f0717_05106709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eacb555f9d089e69e956ca23077b578160e50262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\myAccount.tpl',
      1 => 1655451376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_62ac2ef09f0717_05106709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="en">
<body>
<br>
    <center>
    <h5><?php echo $_smarty_tpl->tpl_vars['addAddressmsg']->value;?>
</h5>
    <h5><?php echo $_smarty_tpl->tpl_vars['productAddedmsg']->value;?>
</h5>
    <h5><?php echo $_smarty_tpl->tpl_vars['sellerformmsg']->value;?>
</h5>


<?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
    <h3>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h3>
        <a class="btn btn-dark" href='http://127.0.0.1/dailycart3/user/editProfile'>Edit Profile</a>
        <a class="btn btn-dark" href='http://127.0.0.1/dailycart3/address/addAddress'>Add Address</a>
    <a class="btn btn-dark" href='http://127.0.0.1/dailycart3/address/manageAddress'>Manage Address</a>

    <?php if ($_smarty_tpl->tpl_vars['user']->value['profile'] == 'customer') {?>



    <h4>You are a customer if you want to be a seller fill up the form</h4>

    <a class="btn btn-dark" href='http://127.0.0.1/dailycart3/seller/sellerRegister'>Seller Form</a>

    
    <?php }
}?>

<?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value['profile'] == 'seller') {?>
        <h4>You are a seller : </h4>

        <a class="btn btn-dark" href="http://127.0.0.1/dailycart3/product/addProduct">Add Product</a>
        <a class="btn btn-dark" href="http://127.0.0.1/dailycart3/product/manageProduct">Manage Products</a>
    <?php }
}?>
</center>

<body>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"><?php echo '</script'; ?>
>

</body><?php }
}
