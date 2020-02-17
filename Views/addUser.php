<?php
include("nav-bar-admin.php"); ?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
  <div class="page-info">
    <h2>Agregar usuario</h2>
    <div class="site-breadcrumb">
      <a href="">Administrar</a> /
      <span>Agregar usuario</span>
    </div>
  </div>
</section>
<!-- Page top end-->

<form action="<?php echo FRONT_ROOT . "User/createByAdmin" ?>" method="POST">
  <div class="wrapper row4" style="background: #330d38;">
    <!-- main body -->
    <main class="hoc container clear">
      <div class="content" style="background: #ffffff;">
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 10%;">Nombre</th>
                <th style="width: 10%;">Apellido</th>
                <th style="width: 10%;">Nombre user</th>
                <th style="width: 20%;">Email</th>
                <th style="width: 15%;">Contraseña</th>
                <th style="width: 5%;">Level</th>
                <th style="width: 10%;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type='text' name='name' required></td>
                <td><input type="text" name='lastname' required></td>
                <td><input type="text" name='user' required></td>
                <td><input type="email" name='email' required></td>
                <td><input type="password" name='password' required></td>
                <td><select name="Level" id="level">
                    <option value='0'>0 (ADMIN)</option>
                    <option value='1'>1 (USER)</option>
                  </select></td>

                <td><button type="submit" class="btn btn-success"> Agregar </button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</form>