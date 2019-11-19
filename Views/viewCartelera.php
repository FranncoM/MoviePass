<?php 
include("nav-bar-admin.php");
?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
		<div class="page-info">
			<h2>Lista de Peliculas</h2>
			<div class="site-breadcrumb">
				<a href="">Administrar</a>  /
				<span>Peliculas</span>
			</div>
		</div>
	</section>
    <!-- Page top end-->

<form action ="<?php echo FRONT_ROOT."View/schedules"?>" method="POST">
  <div class="wrapper row4" style="background: #330d38;" >
    <!-- main body -->
    <main class="hoc container clear"  > 
      <div class="content" style="background: #ffffff;"> 
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 15%;">Titulo</th>
                <th style="width: 30%;">Categoria</th>
                <th style="width: 30%;">Publico</th>
                
              </tr>
            </thead>
            <tbody >
              <?php
                foreach($list as $C_list)
                {
                  ?>
                    <tr>
                      <td><?php echo $C_list->getTitle()?></td>
                      <td><?php echo $C_list->getCategory()?></td>
                      <td><?php echo $C_list->getAge()?></td>
                      <td><button value ='<?php echo $C_list->getId() ?>' class="btn btn-success" > Horarios </button></td>
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
