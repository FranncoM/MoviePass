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

<form action ="<?php echo FRONT_ROOT."Movie/create"?>" method="POST">
  <div class="wrapper row4" style="background: #330d38;" >
    <!-- main body -->
    <main class="hoc container clear" > 
      <div class="content" style="background: #ffffff;"> 
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 15%;">Titulo</th>
                <th style="width: 30%;">Categoria</th>
                <th style="width: 30%;">Restriccion Edad</th>
                <th style="width: 15%;">TMBD</th>
                <!--<th style="width: 10%;">Agregar</th> -->
              </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type='text' name='title'></td>
                <td>
                    <select name='category'>
                    
                        <option value='accion'>Accion</option>
                        <option value='thriller'>Terror</option>
                        <option value='drama'>Drama</option>
                        <option value='comedy'>Comedia</option>
                        <option value='romance'>Romance</option>
                        <option value='musical'>Musical</option>
                
                    </select>
                </td>
                <td>                   
                    <select name='age'>
                    
                        <option value='apt'>APT</option>
                        <option value='+13'>+13</option>
                        <option value='+18'>+18</option>
                    </select></td>
                <td><input type='number' name='id_tmbd'></td> <!-- capaz lo podes automatizar o cambiar la ventana y agregar una pelicula desde la api-->
                <td><button type="submit" class="btn btn-success" > Añadir </button></td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</form>
