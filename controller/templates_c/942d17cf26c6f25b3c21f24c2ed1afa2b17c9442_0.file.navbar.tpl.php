<?php
/* Smarty version 4.1.1, created on 2022-06-08 09:57:06
  from 'C:\xampp\htdocs\dailycart3\view\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62a05652eff2f1_20092415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '942d17cf26c6f25b3c21f24c2ed1afa2b17c9442' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\navbar.tpl',
      1 => 1654675015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a05652eff2f1_20092415 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="userDashboard.php" style="color: red;">DailyCart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="userDashboard.php">Home</a>
                </li>
                
            </ul>
            <form class="d-flex">

<?php if ((!$_smarty_tpl->tpl_vars['check']->value)) {?>
    <li class="nav-item" style="list-style:none;">
        <a class="nav-link " href="login.php">Login</a>
    </li>

    <li class="nav-item" style="list-style:none;">
        <a class="nav-link " href="signup.php">Signup</a>
    </li>
<?php }?>




<?php if (($_smarty_tpl->tpl_vars['check']->value)) {?>
    <div class="btn-group dropstart">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons" style="font-size:20px;">person</i>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="myAccount.php">My Account</a></li>
            <li><a class="dropdown-item" href="manage_products.php">Your Products</a></li>


            <li><a class="dropdown-item" href='logout.php'><button type="button" class="btn btn-danger">Logout</button></a></li>
        </ul>
    </div>
<?php }?>

                
            </form>
        </div>
    </div>
</nav><?php }
}
