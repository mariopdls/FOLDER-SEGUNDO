<?php 

$products = [
    ["id" =>1, "name" =>"Salmorejo", "price" => 5],
    ["id" =>2, "name" =>"Gazpacho", "price" => 1],
    ["id" =>3, "name" =>"Puerro", "price" => 3],
    ["id" =>4, "name" =>"Cebolla", "price" => 2],
    ["id" =>5, "name" =>"Limón", "price" => 6]

];

if (!isset($_SESSION['carrito'])){
    $_SESSION['carrito']= [];
}



function printCart(){

    global $products;

    if (!isset($_GET['link']) || $_GET['link']=='inicio'){

    echo '
    <section class="mb-5">
    <h3 class="mb-3">Productos</h3>';

    foreach ($products as $product) {
        echo'      
        <div class="card shadow-sm mb-2">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h6 class="mb-0"></h6>
            <small class="text-muted">'.$product['name'].'</small>
          </div>
          <form method="post" action="" class="d-flex gap-2">
            <input type="hidden" name="id['.$product['id'].']">
            <input type="number" class="form-control" style="width: 80px;" name="quantity" min="1" max="10">
            <button type="submit" name="addButton" class="btn btn-primary">Añadir</button>
          </form>
        </div>
      </div>';
    }
    
    echo '
    </section>';
    }
}

function addToCart() {
    global $products;
    if (isset($_POST['addButton'])){

    $quantity = $_POST['quantity'];
    
    

    foreach ($products as $product) {
        if ($product['id']==$_POST['id']){
        $totalPrice = $product['price']*$_POST['quantity'];

            $_SESSION['carrito'][]= ["product" => $product['name'], "quantity" => $quantity, "totalPrice" =>$totalPrice];
        }
    }


    }
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini carrito</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="">Mini carrito</a>
    </div>
  </nav>

  <main class="container py-5" style="max-width: 640px;">

    <section class="mb-4">
      <div class="alert alert-danger" role="alert">
        <ul class="mb-0">
          <li></li>
        </ul>
      </div>
      <div class="alert alert-success" role="alert"></div>
    </section>

    <?php printCart();?>
    <?php addToCart();?>

    <section>
      <h3 class="mb-3">Tu carrito</h3>

      <div class="card shadow-sm mb-3">
        <table class="table mb-0">
          <thead>
            <tr>
              <th>Producto</th>
              <th class="text-center">Cantidad</th>
              <th class="text-end">Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td class="text-center"></td>
              <td class="text-end"></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="2">Total</th>
              <th class="text-end"></th>
            </tr>
          </tfoot>
        </table>
      </div>

      <form method="post" action="">
        <button type="submit" name="" class="btn btn-outline-danger w-100">Vaciar carrito</button>
      </form>

      <div class="alert alert-info text-center mt-3" role="alert">
        Tu carrito está vacío
      </div>
    </section>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>