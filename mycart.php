<?php 


 include("header.php")     ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>mycart</title>
  </head>
  <body>
    
    <div class="container">

      <div class="row">
        
       <div class="col-lg-9 text-center border rounded bg-light mt-5">
         
       <h1>My Cart</h1>
     </div>
       <div class="col-md-8 mt-5">
       
        <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Item name</th>
      <th scope="col">Item price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    
    <?php

   $total=0;

    if(isset($_SESSION['cart']))
    { 

    foreach ($_SESSION['cart'] as $key => $value) {
      $sr=$key+1;
     $total=$total+$value['price'];
      echo"

      <tr>
         <td>$sr</td>
         <td>$value[item_name]</td>
         <td>$value[price]</td>
         <td><input type='number' class='text-center' value='$value[quantity]'  min='1' max='10'> </td>
         <td>
         <form action='manage_cart.php' method='POST'>
         <button class='btn btn-sm btn-outline-danger' name='Remove_item'>REMOVE</button>
         <input type='hidden' name='item_name' value='$value[item_name]'>
         </form>
         </td>
      </tr>  

      ";
      }
      
    }


     ?>
     
    
  </tbody>
</table>


       </div>
  </div>
    </div>

    <div class="col-md-3 center">
      
     <div class="border rounded bg-dark text-center p-2">
        
         <h4><font color="White">Total :</font>Total : </h4>
         <h5 class="text-center"><font color="White"><?php echo $total; ?></font></h5>
         <form action="">

          
            
            <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1"><font color="White">
    Cash on delivery</font>
  </label>
</div>

          <br>
           
           <button class="btn btn-primary btn-block">Make purshase</button>
         </form>



     </div>



    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>