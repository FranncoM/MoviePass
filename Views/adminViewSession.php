<?php
include("nav-bar-admin.php"); ?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
  <div class="page-info">
    <h2>Lista de Sessiones</h2>
    <div class="site-breadcrumb">
      <a href="">Administrar</a> /
      <span>Sessiones</span>
    </div>
  </div>
</section>
<!-- Page top end-->


<div class="wrapper row4" style="background: #330d38;">
  <!-- main body -->
  <main class="hoc container clear">
    <div class="content" style="background: #ffffff;">
      <!-- Filtro por cine -->

      <div style="background: #ffffff;">

        <form action="<?php echo FRONT_ROOT . "view/viewList_sessions" ?>" method="GET">
          <div class="form-group">
            <select style="width: 350px" name="id_theather" class="custom-select" required>
              <option value=''>Seleccione un cine</option>
              <?php foreach ($T_list as $key => $theather) { ?>
                <option value="<?php echo $theather->getId();  ?>"><?php echo $theather->getName() ?></option>
              <?php } ?>
            </select>
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>

        </form>

      </div>

      <!-- Filtro por cine end -->
      <form action="<?php echo FRONT_ROOT . "Session/delete" ?>" method="POST">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered" style="background: #ffffff;">
            <thead class="table-active">
              <tr>
                <th style="width: 10%;">ID</th>
                <th style="width: 10%;">Cine</th>
                <th style="width: 15%;">Pelicula</th>
                <th style="width: 30%;">Sala</th>
                <th style="width: 30%;">Fecha</th>
                <th style="width: 15%;">Hora</th>
                <th style="width: 10%;">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (!empty($S_list)) {
                foreach ($S_list as $list) {
                  ?>
                  <tr>
                    <td><?php echo $list->getId() ?></td>
                    <td><?php echo $list->getTheather() ?></td>
                    <td><?php echo $list->getMovie() ?></td>
                    <td><?php echo $list->getRoom() ?></td>
                    <td><?php echo $list->getDate() ?></td>
                    <td><?php echo $list->getTime() ?></td>
                    <td>
                      <button type="submit" name="id" class="btn btn-danger" value="<?php echo $list->getId() ?>"> Elminar </button>
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