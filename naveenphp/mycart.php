<?php
 include("header.php");
 
 
 session_start();
 
?>

<html>
<head><title>CART</title>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
<div class="container">
   
    <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>MY CART</h1>

</div>

<div class="row">
<div class="col-lg-8">
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody class="text-center">
    
<?php 

$total=0;
if(isset($_SESSION['cart']))
    {
      foreach($_SESSION['cart'] as $key => $value)
    {
      $sr=$key+1;
      $total=$total+$value["Price"];
      echo"
      
      <tr>
      <td>$sr</td>
      <td>$value[Item_Name]</td>
      <td>$value[Price]</td>
      <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
      <td>
      <form action='manage_cart.php' method='POST'>
          <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
          <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
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


<div class="col-lg-4">
  <div class="border bg-light rounded p-4">
      <h3 >TOTAL:</h3>
  <h5><?php echo $total ?></h5>
  <form class='mt-5'>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Credit/Debit  <i class="fa-solid fa-wallet" style="color: #1c9bfd;"></i>
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Cash On Delievery  <i class="fa-solid fa-money-bill-wave" style="color: #19ac16;"></i>
  </label>
</div>
  <button class='btn btn-primary d-grid gap-2 col-6 mx-auto mt-3'>MAKE PURCHASE</button></form>
  
</div>
</div>

</div>

</div>
</body>

</html>