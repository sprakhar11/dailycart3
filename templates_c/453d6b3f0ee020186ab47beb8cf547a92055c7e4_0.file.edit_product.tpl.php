<?php
/* Smarty version 4.1.1, created on 2022-06-17 11:53:02
  from 'C:\xampp\htdocs\dailycart3\view\edit_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62ac4efe84a6a3_01071348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453d6b3f0ee020186ab47beb8cf547a92055c7e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\edit_product.tpl',
      1 => 1655459009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_62ac4efe84a6a3_01071348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<html>

<div class="container">

        <h1 style="text-align: center;">Edit Product</h1>
        <br><br><br><br><br>

        <form action="http://127.0.0.1/dailycart3/product/editProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" method="POST" enctype="multipart/form-data">



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo '<?php'; ?>
 echo $nameErr; <?php echo '?>'; ?>
</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" name="description">
                <div id="emailHelp" class="form-text"><?php echo '<?php'; ?>
 echo $descriptionErr; <?php echo '?>'; ?>
</div>
            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" name="price">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['priceErr']->value;?>
</div>
            </div>  

            <label for="exampleInputEmail1" class="form-label">Upload Product Image </label>
            <input type="file" class="form-control" name="upload" id="">

            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['imagePathErr']->value;?>
</div>
            

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>




    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- Option 2: Separate Popper and Bootstrap JS --> -->
   
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
   

</html><?php }
}
