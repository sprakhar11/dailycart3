
{include file='./navbar.tpl'}
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <title>Hello, world!</title> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>
</head>

<body>
<center>
    <h1 style="text-align: center;">Add address</h1></center>

    <!-- <h1>Hello, world!</h1> -->
    <div class="container">
    <form action="http://127.0.0.1/dailycart3/address/addAddress" method="POST" enctype="multipart/form-data">
    <div class="form-group col-md-6">
            <label for="inputEmail4">Country:</label>
            <input type="text" class="form-control" id="inputEmail4" name="country">
            <div id="emailHelp" class="form-text">{$countryErr}</div></center>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name:</label>
            <input type="text" class="form-control" id="inputEmail4" name="name">
            <div id="emailHelp" class="form-text">{$nameErr}</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Mobile Number:</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">

            <div id="emailHelp" class="form-text">{$phoneErr}</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Pincode:</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pincode">

            <div id="emailHelp" class="form-text">{$pincodeErr}</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Address:</label>
            <input type="text" class="form-control" id="inputEmail4" name="addline1">
            <div id="emailHelp" class="form-text">{$addline1Err}</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">City:</label>
            <input type="text" class="form-control" id="inputEmail4" name="city">
            <div id="emailHelp" class="form-text">{$cityErr}</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">State:</label>
            <input type="text" class="form-control" id="inputEmail4" name="state">
            <div id="emailHelp" class="form-text">{$stateErr}</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Type:</label>
            <input type="text" class="form-control" id="inputEmail4" name="type">
            <div id="emailHelp" class="form-text">{$typeErr}</div>

        </div>
            
        
        
        
        </div>
        <button type="submit" name="submit" class="btn btn-primary"
        style="margin-left:100px">Add Address</button>
        <br><br>

    </form>
    </div>

   
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <!-- <title>Hello, world!</title> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>

</body>

</html>