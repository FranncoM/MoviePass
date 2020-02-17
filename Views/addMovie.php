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

<form action="<?php echo FRONT_ROOT . "Movie/create" ?>" method="POST" enctype="multipart/form-data">
  <div class="wrapper row4" style="background: #330d38;">
    <!-- main body -->
    <main class="hoc container clear">
      <div class="content" style="background: #ffffff;">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 15%;">ID TMDB</th>
                <th style="width: 15%;">Titulo Pelicula</th>
                <th style="width: 15%;">Categoria</th>
                <th style="width: 15%;">Restriccion Edad</th>
                <th style="width: 15%;">Descripción</th>
                <th style="width: 15%;">Portada</th>
                <th style="width: 10%;"></th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td><input type="number" name="id_tmdb" /></td>
                <td><input type='text' name='title' required></td>
                <td>
                  <select name='category' required>

                    <option value='Accion'>Accion</option>
                    <option value='Thriller'>Terror</option>
                    <option value='Drama'>Drama</option>
                    <option value='Comedy'>Comedia</option>
                    <option value='Romance'>Romance</option>
                    <option value='Musical'>Musical</option>

                  </select>
                </td>
                <td>
                  <select name='age' required>

                    <option value='APT'>APT</option>
                    <option value='13'>+13</option>
                    <option value='16'>+16</option>
                    <option value='18'>+18</option>

                  </select>
                </td>
                <td><input type="text" name="overview" /></td>
                <td><input type="text" name="poster" /></td>
                <td><button type="submit" class="btn btn-success"> Crear </button></td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</form>