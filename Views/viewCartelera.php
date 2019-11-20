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
    <h2>Cartelera</h2>
    <div class="site-breadcrumb">
      <a href="">Inicio</a> /
      <span>Peliculas</span>
    </div>
  </div>
</section>
<!-- Page top end-->


<div class="wrapper row4" style="background: #330d38;">
  <!-- main body -->
  <main class="hoc container clear">
    <div class="content" style="background: #ffffff;">

      <!-- Filtro por categoria -->

      <div style="background: #ffffff;">

        <form action="<?php echo FRONT_ROOT . "view/viewCartelera" ?>" method="GET">
          <div class="form-group">
            <select name="category" class="custom-select" required>
              <option value=''>Seleccione una categoria</option>
              <option value='all'>Todas</option>
              <option value='Accion'>Accion</option>
              <option value='Thriller'>Terror</option>
              <option value='Drama'>Drama</option>
              <option value='Comedy'>Comedia</option>
              <option value='Romance'>Romance</option>
              <option value='Musical'>Musical</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

      </div>

      <!-- Filtro end -->

      <!-- Filtro por fecha -->

      <div style="background: #ffffff;">
        <form action="<?php echo FRONT_ROOT . "view/viewCartelera" ?>" method="GET">
          <div class="form-group">
            <select name="date" class="custom-select" required>
              <option value=""> Selleciones una fecha</option>
              <?php foreach ($SC_list as $key => $session) { ?>

                <option value="<?php echo $session->getDate();  ?>"><?php echo $session->getDate() ?></option>
              <?php } ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

      </div>

      <!-- Filtro end -->


      <form action="<?php echo FRONT_ROOT . "view/movieschedules" ?>" method="POST">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 5%;">Titulo</th>
                <th style="width: 5%;">Portada</th>
                <th style="width: 5%;">Comprar</th>

              </tr>
            </thead>
            <tbody>
              <?php if (!empty($M_list)) {
                foreach ($M_list as $list) {
                  ?>
                  <tr>
                    <td><?php echo $list->getTitle() ?></td>

                    <td></td>

                    <td>
                      <button type="submit" name="id" class="btn btn-primary" value="<?php echo $list->getId() ?>"> Info </button>
                    </td>
                  </tr>
                <?php
                  }
                } elseif (!empty($S_list)) {

                  foreach ($S_list as $list) {
                    ?>

                  <tr>
                    <td><?php echo $list->getMovie() ?></td>
                    <td></td>

                    <td>

                      <button type="submit" name="id" class="btn btn-primary" value="<?php echo $list->getId_movie() ?>"> Info </button>
                    </td>
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