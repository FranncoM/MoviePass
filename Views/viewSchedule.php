<?php 
include("nav-bar-user.php");?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
		<div class="page-info">
			<h2>Lista de Sessiones</h2>
			<div class="site-breadcrumb">
				<a href="">Administrar</a>  /
				<span>Sessiones</span>
			</div>
		</div>
	</section>
    <!-- Page top end-->

<form action ="<?php echo FRONT_ROOT.""?>" method="POST"> <!--Funcion para comprar-->
  <div class="wrapper row4" style="background: #330d38;" >
    <!-- main body -->
    <main class="hoc container clear" > 
      <div class="content" style="background: #ffffff;"> 
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 10%;">Cine</th>
                <th style="width: 15%;">Pelicula</th>
                <th style="width: 30%;">Fecha</th>
                <th style="width: 15%;">Hora</th>
                <th style="width: 10%;">Asientos Disponibles</th>
                <th style="width: 10%;">Cantidad</th>

              </tr>
            </thead>
            <tbody>
              <?php
                foreach($S_list as $list)
                {
                  ?>
                    <tr>
                      <td><?php echo $list->getTheather() ?></td>
                      <td><?php echo $list->getMovie()?></td>
                      <td><?php echo $list->getDate()?></td>
                      <td><?php echo $list->getTime()?></td>
                      <td><?php echo $list->getTickets()?></td>
                      <td><input type='number' name='tickets'></input></td>

                      <td>
                        <button type="submit" name="id" class="btn btn-primary" value="<?php echo $list->getId() ?>">Comprar</button>
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