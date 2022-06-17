<?php
/* Smarty version 4.1.1, created on 2022-06-08 08:17:26
  from 'C:\xampp\htdocs\dailycart3\view\display_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62a03ef6c17255_61808819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e9f9fe5918e92044752ad378f8d6f949d51e39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\display_products.tpl',
      1 => 1654668897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a03ef6c17255_61808819 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col">
        <div class="card h-100">
        <div class="col-md-4">
      <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['imagePath'];?>
" class="img-fluid rounded-start" alt="...">
    </div>
          <div class="card-body">
              
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h5>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</p>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</p>
                
        <a href="../controller/edit_product.php?submitEdit=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-primary"> Edit</a>

        <form action="../controller/manage_products.php" method="POST">

        <button type="submit" class="btn btn-primary" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">Delete</button>
        </form>
            
        </form>
          </div>
        </div>
</div><?php }
}
