<?php
include("nav-bar-admin.php"); ?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
  <div class="page-info">
    <h2>Agregar Peliculas</h2>
    <div class="site-breadcrumb">
      <a href="">Administrar</a> /
      <span>Agregar Peliculas</span>
    </div>
  </div>
</section>
<!-- Page top end-->

<form action="<?php echo FRONT_ROOT . "Session/create" ?>" method="POST">
  <div class="wrapper row4" style="background: #330d38;">
    <!-- main body -->
    <main class="hoc container clear">
      <div class="content" style="background: #ffffff;">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 15%;">Titulo Pelicula</th>
                <th style="width: 30%;">Cine</th>
                <th style="width: 30%;">Fecha</th>
                <th style="width: 15%;">Turno</th>
                <th style="width: 10%;">Sala</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <select name='id_movie'>
                    <option>Seleccionar una Pelicula</option>

                    <?php foreach ($M_list as $key => $movie) { ?>
                      <option value="<?php echo $movie->getId();  ?>"><?php echo $movie->getTitle(); ?></option>
                    <?php } ?>
                  </select>
                </td>
                <td>
                  <select name='id_theather'>
                    <option>Seleccionar un cine</option>

                    <?php foreach ($T_list as $key => $theater) { ?>
                      <option value="<?php echo $theater->getId();  ?>"><?php echo $theater->getName(); ?></option>
                    <?php } ?>


                  </select>
                </td>
                <td>Fecha
                  <input type="date" name='date'></input>
                </td>
                <td>Turno
                  <select name='time'>
                    <option value='16:30'>16:30</option>
                    <option value='18:30'>18:30</option>
                    <option value='20:30'>20:30</option>
                    <option value='22:30'>22:30</option>
                    <option value='00:30'>00:30</option>

                  </select>
                </td>
                <td>
                  <select name='name_room'>
                    <option value='Sala 1'>Sala 1</option>
                    <option value='Sala 2'>Sala 2</option>
                    <option value='Sala 3'>Sala 3</option>
                    <option value='Sala 4'>Sala 4</option>

                  </select>
                </td>

                <td><button type="submit" class="btn btn-success"> Agregar </button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</form>