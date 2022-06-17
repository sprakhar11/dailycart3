{include file='./navbar.tpl'}

<!doctype html>
<html lang="en">
<body>
<br>
    <center>
    <h5>{$addAddressmsg}</h5>
    <h5>{$productAddedmsg}</h5>
    <h5>{$sellerformmsg}</h5>


{if ($user)}
    <h3>Welcome {$user.name}</h3>
        <a class="btn btn-dark" href='http://127.0.0.1/dailycart3/user/editProfile'>Edit Profile</a>
        <a class="btn btn-dark" href='http://127.0.0.1/dailycart3/address/addAddress'>Add Address</a>
    <a class="btn btn-dark" href='http://127.0.0.1/dailycart3/address/manageAddress'>Manage Address</a>

    {if $user.profile eq 'customer'}



    <h4>You are a customer if you want to be a seller fill up the form</h4>

    <a class="btn btn-dark" href='http://127.0.0.1/dailycart3/seller/sellerRegister'>Seller Form</a>

    
    {/if}
{/if}

{if ($user)}
    {if $user.profile eq 'seller'}
        <h4>You are a seller : </h4>

        <a class="btn btn-dark" href="http://127.0.0.1/dailycart3/product/addProduct">Add Product</a>
        <a class="btn btn-dark" href="http://127.0.0.1/dailycart3/product/manageProduct">Manage Products</a>
    {/if}
{/if}
</center>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

</body>