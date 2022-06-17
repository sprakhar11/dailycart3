<?php
/* Smarty version 4.1.1, created on 2022-06-17 10:16:43
  from 'C:\xampp\htdocs\dailycart3\view\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac386b9a38b2_57664098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a387c31a32dcf1ffbe782474eb73169dc683c452' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\signup.tpl',
      1 => 1655453803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ac386b9a38b2_57664098 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <title>Hello, world!</title> -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">

        <h1 style="text-align: center;">Signup Here</h1>
        <br><br><br><br><br>

        <form action="http://127.0.0.1/dailycart3/authController/signup" method="POST">


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
