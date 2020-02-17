<?php include("nav-bar-admin.php"); ?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
  <div class="page-info">
    <h2>Lista de Usuarios</h2>
    <div class="site-breadcrumb">
      <a href="">Administrar</a> /
      <span>Usuarios</span>
    </div>
  </div>
</section>
<!-- Page top end-->

<form action="<?php echo FRONT_ROOT . "Theather/delete" ?>" method="POST">
  <div class="wrapper row4" style="background: #330d38;">
    <!-- main body -->
    <main class="hoc container clear">
      <div class="content" style="background: #ffffff;">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 10%;">Id</th>
                <th style="width: 15%;">Nombre</th>
                <th style="width: 30%;">Direccion</th>
                <th style="width: 30%;">Capacidad</th>
                <th style="width: 15%;">Precio entrada</th>
                <th style="width: 10%;">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($T_list as $theather) {
                ?>
                <tr>
                  <td><?php echo $theather->getId() ?></td>
                  <td><?php echo $theather->getName() ?></td>
                  <td><?php echo $theather->getAdress() ?></td>
                  <td><?php echo $theather->getFullCapacity() ?></td>
                  <td><?php echo $theather->getPrice() ?></td>
                  <td>
                    <button type="submit" name="email" class="btn btn-danger" value="<?php echo $theather->getId() ?>"> Remove </button>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</form>