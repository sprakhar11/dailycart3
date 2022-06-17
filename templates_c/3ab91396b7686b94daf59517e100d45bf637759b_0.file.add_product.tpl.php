<?php
/* Smarty version 4.1.1, created on 2022-06-17 09:55:01
  from 'C:\xampp\htdocs\dailycart3\view\add_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac3355ab6fd4_69039571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ab91396b7686b94daf59517e100d45bf637759b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\add_product.tpl',
      1 => 1655452500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_62ac3355ab6fd4_69039571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<html>

<div class="container">

        <h1 style="text-align: center;">Add product</h1>
        <br><br><br><br><br>

        <form action="http://127.0.0.1/dailycart3/product/addProduct" method="POST" enctype="multipart/form-data">



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['nameErr']->value;?>
</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['descriptionErr']->value;?>
</div>
            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['priceErr']->value;?>
</div>
            </div>  

            <label for="exampleInputEmail1" class="form-label">Upload Product Image </label>
            <input type="file" class="form-control" name="upload" id="">

            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['imagePathErr']->value;?>
</div>
            

            <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
        </form>




    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- Option 2: Separate Popper and Bootstrap JS --> -->
   
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"><?php echo '</script'; ?>
>
   
</body>

</html><?php }
}
