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
    <h2>Lista de Sesiones</h2>
    <div class="site-breadcrumb">
      <a href="#">Compras</a> /
      <span>Sesiones </span>
    </div>
  </div>
</section>
<!-- Page top end-->

<!--Funcion para comprar-->
<div class="wrapper row4" style="background: #330d38;">
  <!-- main body -->
  <main class="hoc container clear">
    <div class="content" style="background: #ffffff;">

      <!--Info movie -->
      <table style="text-align:center;" class="table table-responsive table-bordered">
        <thead class="table-active">
          <tr>
            <th style="width: 5%;">Titulo</th>
            <th style="width: 5%;">Categoria</th>
            <th style="width: 5%;">Restriccion de edad</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($movie)) {

            ?>
            <tr>
              <td><?php echo $movie->getTitle() ?></td>
              <td><?php echo $movie->getCategory() ?></td>
              <td><?php echo $movie->getAge() ?></td>

            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <!-- info end-->

      <form action="<?php echo FRONT_ROOT . "View/buy" ?>" method="POST">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">

            <thead class="table-active">
              <tr>
                <th style="width: 10%;">Cine</th>
                <th style="width: 15%;">Pelicula</th>
                <th style="width: 30%;">Fecha</th>
                <th style="width: 15%;">Hora</th>
                <th style="width: 20%;">Asientos Disponibles</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (!empty($S_list)) {
                foreach ($S_list as $list) {
                  echo "<tr>
                        <th>" . $list->getTheather() . "</th>
                        <td>" . $list->getMovie() . "</td>
                        <td>" . $list->getDate() . "</td>
                        <td>" . $list->getTime() . "</td>
                        <td>" . $list->getTickets() . "</td>";

                  ?>
                  <td><button type="submit" name="id_session" class="btn btn-primary" value="<?php echo $list->getId() ?>">Siguiente</button></td>
                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
    </div>
  </main>
</div>
</form>