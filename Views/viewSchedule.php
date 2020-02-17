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
    <h2>Horarios</h2>
    <div class="site-breadcrumb">
      <a href="#">Cartelera</a> /
      <span>Horarios </span>
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
      <?php if (!empty($movie)) { ?>
        <div class="movie">
          <img class="poster" src="<?php echo $movie->getPoster() ?>"></img>

          <div class="title"><?php echo $movie->getTitle() ?></div>

          <div class="detail"><?php echo $movie->getOverview() ?></div>
        </div>

      <?php
      }
      ?>

      </table>
      <!-- info end-->

      <form action="<?php echo FRONT_ROOT . "View/buy" ?>" method="POST">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">

            <thead class="table-active">
              <tr>
                <th style="width: 10%;">Cines</th>
                <th style="width: 30%;">Fechas</th>
                <th style="width: 15%;">Horarios</th>
                <th style="width: 20%;">Asientos Disponibles</th>
              </tr>
            </thead>
            <tbody>

              <?php
              if (!empty($S_list)) {
                foreach ($S_list as $list) {
                  echo "<tr>
                        <th>" . $list->getTheather() . "</th>
                        <td>" . $list->getDate() . "</td>
                        <td>" . $list->getTime() . "</td>
                        <td>" . $list->getTickets() . "</td>";

              ?>
                  <td><button type="submit" name="id_session" class="btn btn-primary" value="<?php echo $movie->getId() ?>">Comprar</button></td>
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