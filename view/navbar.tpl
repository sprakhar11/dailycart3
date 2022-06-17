<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://127.0.0.1/dailycart3/userDashboard" style="color: red;">DailyCart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" 
                    href="http://127.0.0.1/dailycart3/userDashboard">Home</a>
                </li>
                
            </ul>
            <form class="d-flex">

{if (!$check)}
    <li class="nav-item" style="list-style:none;">
        <a class="nav-link " href="http://127.0.0.1/dailycart3/authController/login">Login</a>
    </li>

    <li class="nav-item" style="list-style:none;">
        <a class="nav-link " href="http://127.0.0.1/dailycart3/authController/signup">Signup</a>
    </li>
{/if}




{if ($check)}
    <div class="btn-group dropstart">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons" style="font-size:20px;">person</i>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://127.0.0.1/dailycart3/user/myAccount">My Account</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1/dailycart3/product/manageProduct">Your Products</a></li>


            <li><a class="dropdown-item" href='http://127.0.0.1/dailycart3/authController/logout'><button type="button" 
            class="btn btn-danger">Logout</button></a></li>
        </ul>
    </div>
{/if}

                
            </form>
        </div>
    </div>
</nav>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">    