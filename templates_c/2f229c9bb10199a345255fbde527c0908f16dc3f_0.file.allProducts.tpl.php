<?php
/* Smarty version 4.1.1, created on 2022-06-17 11:42:34
  from 'C:\xampp\htdocs\dailycart3\view\allProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac4c8aacc2f2_49192950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f229c9bb10199a345255fbde527c0908f16dc3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\allProducts.tpl',
      1 => 1655457902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_62ac4c8aacc2f2_49192950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!doctype html>
<html lang="en">
<body>
<h1 style="text-align: center;">Shopping</h1>
<h5><?php echo $_smarty_tpl->tpl_vars['signUpMsg']->value;?>
</h5>
<h5><?php echo $_smarty_tpl->tpl_vars['loginMsg']->value;?>
</h5>

<br><br><br><br><div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    
        <div class="col">
            <div class="card h-100">
            <div class="col-md-4">
          <img src="/dailycart3/<?php echo $_smarty_tpl->tpl_vars['value']->value['imagePath'];?>
" class="img-fluid rounded-start" alt="...">
        </div>
              <div class="card-body">
                  
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</p>
                <p class="card-text">Rs.<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</p>
    
                <button type="button" class="btn btn-warning">BuyNow</button>
              </div>
            </div>
          </a>
        </div>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
crossorigin="anonymous"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
