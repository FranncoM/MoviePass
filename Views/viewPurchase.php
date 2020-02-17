<?php
include("validate-session.php");
if ($user) {

  if ($user->getLevel() == 0) {
    include("nav-bar-admin.php");
  } else include("nav-bar-user.php");
} else
  include('nav-bar.php');
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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

      <form action="<?php echo FRONT_ROOT . "Ticket/create" ?>" method="POST">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">

            <thead class="table-active">
              <tr>
                <th style="width: 25%;">Cine</th>
                <th style="width: 30%;">Pelicula</th>
                <th style="width: 12%;">Fecha</th>
                <th style="width: 12%;">Hora</th>
                <th style="width: 12%;">Costo Unidad</th>
                <th style="width: 20%;">Cantidad</th>
              </tr>
            </thead>
            <tbody>
              <td><?php echo $purchase->getName_theather() ?></td>
              <td><?php echo $purchase->getMovie() ?></td>
              <td><?php echo $purchase->getDate() ?></td>
              <td><?php echo $purchase->getTime() ?></td>
              <td><?php echo $purchase->getPrice() ?></td>
              <td><input type="number" name="quantity" min="1" max=" <?php echo $purchase->getStock() ?>" required></td>
              <td><button Type="submit" name='id_rm' class="btn btn-success" value='<?php echo $purchase->getId_rm() ?>'>Pagar</button></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <div class="container" style="background: #330d38;">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                Datos de la Tarjeta
              </h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="form-group">
                  <label for="cardNumber">
                    Numero</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number" required autofocus />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-7 col-md-7">
                    <div class="form-group">
                      <label for="expityMonth">
                        EXPIRY DATE</label>
                      <div class="col-xs-6 col-lg-6 pl-ziro">
                        <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                      </div>
                      <div class="col-xs-6 col-lg-6 pl-ziro">
                        <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                    </div>
                  </div>
                  <div class="col-xs-5 col-md-5 pull-right">
                    <div class="form-group">
                      <label for="cvCode">
                        CV CODE</label>
                      <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <br />

        </div>
      </div>
    </div>
    <!--END CARD-->
  </main>
</div>
</form>