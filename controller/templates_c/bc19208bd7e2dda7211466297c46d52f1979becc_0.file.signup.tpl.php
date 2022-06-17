<?php
/* Smarty version 4.1.1, created on 2022-06-07 18:04:23
  from 'C:\xampp\htdocs\dailycart3\view\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_629f7707374646_11044403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc19208bd7e2dda7211466297c46d52f1979becc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\signup.tpl',
      1 => 1654617781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629f7707374646_11044403 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<body>
<div class="container">

        <h1 style="text-align: center;">Signup Here</h1>
        <br><br><br><br><br>

        <form action="signup.php" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['nameErr']->value;?>
</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile Number </label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobileNumber">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['mobileNumberErr']->value;?>
</div>

            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['emailErr']->value;?>
</div>
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['mailExists']->value;?>
</div>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['passwordErr']->value;?>
</div>
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['passwordLengthErr']->value;?>
</div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Signup</button>
        </form>




    </div>




    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
