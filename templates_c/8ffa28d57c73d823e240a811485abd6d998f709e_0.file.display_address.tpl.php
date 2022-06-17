<?php
/* Smarty version 4.1.1, created on 2022-06-17 11:52:48
  from 'C:\xampp\htdocs\dailycart3\view\display_address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac4ef0721bb8_42242887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ffa28d57c73d823e240a811485abd6d998f709e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\display_address.tpl',
      1 => 1655458932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ac4ef0721bb8_42242887 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card" >
       
          <div class="card-body">
            <h6 class="card-title">Country: <?php echo $_smarty_tpl->tpl_vars['value']->value['country'];?>
</h6>
            <h6 class="card-text">Name: <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h6>
            <h6 class="card-text">Mobile Number :<?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</h6>
            <h6 class="card-text">Pincode: <?php echo $_smarty_tpl->tpl_vars['value']->value['pincode'];?>
</h6>
            <h6 class="card-text">Address: <?php echo $_smarty_tpl->tpl_vars['value']->value['addline1'];?>
</h6>
            <h6 class="card-text">City: <?php echo $_smarty_tpl->tpl_vars['value']->value['city'];?>
</h6>
            <h6 class="card-text">State: <?php echo $_smarty_tpl->tpl_vars['value']->value['state'];?>
</h6>
            <h6 class="card-text">Type: <?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</h6>

        <a href="<?php echo $_smarty_tpl->tpl_vars['editUrl']->value;?>
" class="btn btn-outline-primary"> Edit </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="btn btn-outline-danger"> Delete </a>

    </div>
</div>
   
      
<?php }
}
