<?php
/* Smarty version 4.1.1, created on 2022-06-17 11:53:46
  from 'C:\xampp\htdocs\dailycart3\view\display_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac4f2a5878e5_63309800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5f4c4fed1198b19a47a281b94108bb0295c39d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\display_products.tpl',
      1 => 1655459626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ac4f2a5878e5_63309800 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col">
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
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</p>

        <a href="<?php echo $_smarty_tpl->tpl_vars['editUrl']->value;?>
" class="btn btn-primary"> Edit </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="btn btn-danger"> Delete </a>
            
        </form>
          </div>
        </div>
</div><?php }
}
