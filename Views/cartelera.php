<?php 
include("nav-bar-user.php");?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
		<div class="page-info">
			<h2>Lista de Usuarios</h2>
			<div class="site-breadcrumb">
				<a href="">Administrar</a>  /
				<span>Usuarios</span>
			</div>
		</div>
	</section>
    <!-- Page top end-->

<form action ="<?php echo FRONT_ROOT."Movie/delete"?>" method="POST">
  <div class="wrapper row4" style="background: #330d38;" >
    <!-- main body -->
    <main class="hoc container clear" > 
      <div class="content" style="background: #ffffff;"> 
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 10%;">ID</th>
                <th style="width: 15%;">Titulo</th>
                <th style="width: 30%;">Categoria</th>
                <th style="width: 30%;">Edad</th>
                <th style="width: 15%;">TMDB</th>
                <th style="width: 10%;">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($list as $C_list)
                {
                  ?>
                    <tr>
                      <td><?php echo $C_list->getId() ?></td>
                      <td><?php echo $C_list->getTitle()?></td>
                      <td><?php echo $C_list->getCategory()?></td>
                      <td><?php echo $C_list->getAge()?></td>
                      <td><?php echo $C_list->getId_tmbd()?></td>
                      <td>
                        <button type="submit" name="id" class="btn btn-danger" value="<?php echo $user->getId() ?>"> Elminar </button>
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
