<?php
/* Smarty version 4.1.1, created on 2022-06-08 08:49:31
  from 'C:\xampp\htdocs\dailycart3\view\editProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62a0467be193d1_10050726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3e1655a93176a66f8745453cd9953801f4090e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart3\\view\\editProfile.tpl',
      1 => 1654670056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0467be193d1_10050726 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<div class="container">

        <h1 style="text-align: center;">Edit Profile</h1>
        <br><br><br><br><br>

        <form action="../controller/editProfile.php" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['nameErr']->value;?>
</div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit1">Save</button>
        </form>
        <form action="../controller/editProfile.php" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                <input placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['phoneErr']->value;?>
</div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit2">Save</button>
        </form>
        <form action="../controller/editProfile.php" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address(You need to login Again)</label>
               
                <input placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['emailErr']->value;?>
</div>
          
            </div>


            <button type="submit" class="btn btn-primary" name="submit3">Save</button>
        </form>
        <form action="../controller/editProfile.php" method="POST">


            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password(You need to login Again)</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['passwordErr']->value;?>
</div>
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['passwordLengthErr']->value;?>
</div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit4">Save</button>
        </form>






    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"><?php echo '</script'; ?>
>
    
</body>

</html><?php }
}
