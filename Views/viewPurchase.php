<?php
if ($user) {

  if ($user->getLevel() == 0) {
    include("nav-bar-admin.php");
  } else include("nav-bar-user.php");
} else
  include('nav-bar.php');
?>

<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
  <div class="page-info">
    <h2>Detalles</h2>
    <div class="site-breadcrumb">
      <a href="#">Compras</a> /
      <span>Detalles </span>
    </div>
  </div>
</section>
<!-- Page top end-->


<!--Funcion para comprar-->
<div class="wrapper row4" style="background: #330d38;">
  <!-- main body -->
  <main class="hoc container clear">
    <div class="content" style="background: #ffffff;">

      <form action="<?php echo FRONT_ROOT . "" ?>" method="POST">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">

            <thead class="table-active">
              <tr>
                <th style="width: 25%;">Cine</th>
                <th style="width: 30%;">Pelicula</th>
                <th style="width: 12%;">Fecha</th>
                <th style="width: 12%;">Hora</th>
                <th style="width: 12%;">Precio Unidad</th>
                <th style="width: 20%;">Cantidad</th>
              </tr>
            </thead>
            <tbody>
              <td><?php echo $purchase->getName_theather() ?></td>
              <td><?php echo $purchase->getMovie() ?></td>
              <td><?php echo $purchase->getDate() ?></td>
              <td><?php echo $purchase->getTime() ?></td>
              <td><?php echo $purchase->getPrice() ?></td>
              <td><input type="number" name="quantity" min="1" max=" <?php echo $purchase->getStock() ?>" require></td>

              <td>
                <button type="submit" name="" class="btn btn-primary" value="">Pagar</button>
              </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </main>
</div>
</form>