<?php
/* Smarty version 4.1.1, created on 2022-06-07 18:56:20
  from 'C:\xampp\htdocs\dailycart3\view\myAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_629f833445adb1_54237197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cfc7edb4f2e543aab15d21f775f5e86ad09eb9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\myAccount.tpl',
      1 => 1654620977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f833445adb1_54237197 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<body>
<br>

<?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
    <h5>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h5>
        <a href='add_address.php'>Add Address</a>

    
    <?php if ($_smarty_tpl->tpl_vars['user']->value['profile'] == 'customer') {?>
        <a href='editProfile.php'>Edit Profile</a>



    <h1>You are a customer if you want to be a seller fill up the form</h1>

    <a href='sellerForm.php'>Seller Form</a>
    <a href='manage_address.php'>Manage Address</a>

    <h3>Add Address : </h3>
        <?php }
}?>

<?php if (($_smarty_tpl->tpl_vars['user']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value['profile'] == 'seller') {?>
        <h1>You are a seller : </h1>
        <a href='editProfile.php'>Edit Profile</a>

        <a href="add_product.php">Add Product</a>
        <a href="manage_products.php">Manage Products</a>
        <a href='manage_address.php'>Manage Address</a>
    <?php }
}?>

<body>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"><?php echo '</script'; ?>
>

</body><?php }
}
