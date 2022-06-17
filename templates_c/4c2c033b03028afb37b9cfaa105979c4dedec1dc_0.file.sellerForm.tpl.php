<?php
/* Smarty version 4.1.1, created on 2022-06-17 10:17:52
  from 'C:\xampp\htdocs\dailycart3\view\sellerForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac38b0be8ed7_81174310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c2c033b03028afb37b9cfaa105979c4dedec1dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\sellerForm.tpl',
      1 => 1655452571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_62ac38b0be8ed7_81174310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

        <h1 style="text-align: center;">Seller Form</h1>
        <br><br><br><br><br>

        <form action="http://127.0.0.1/dailycart3/seller/sellerRegister" method="POST">

            <!-- <div id="emailHelp" class="form-text" style="color: red;"><?php echo '<?php'; ?>
 echo $existingMailMessage; <?php echo '?>'; ?>
</div> -->


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['nameErr']->value;?>
</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bussiness Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['emailErr']->value;?>
</div>


            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile Number </label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobileNumber">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['mobileNumberErr']->value;?>
</div>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warehouse address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['addressErr']->value;?>
</div>

            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>




    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"><?php echo '</script'; ?>
>
    -->
</body>

</html><?php }
}
