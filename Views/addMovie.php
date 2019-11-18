<?php 
include("nav-bar-user.php");?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
		<div class="page-info">
			<h2>Agregar Peliculas</h2>
			<div class="site-breadcrumb">
				<a href="">Administrar</a>  /
				<span>Agregar Peliculas</span>
			</div>
		</div>
	</section>
    <!-- Page top end-->

<form action ="<?php echo FRONT_ROOT."Session/create"?>" method="POST">
  <div class="wrapper row4" style="background: #330d38;" >
    <!-- main body -->
    <main class="hoc container clear" > 
      <div class="content" style="background: #ffffff;"> 
        <div class="scrollable">
          <table style="text-align:center;" class="table table-responsive table-bordered">
            <thead class="table-active">
              <tr>
                <th style="width: 15%;">Titulo Pelicula</th>
                <th style="width: 30%;">Categoria</th>
                <th style="width: 30%;">Restriccion Edad</th>
                <th style="width: 15%;">TMBD</th>
                <th style="width: 10%;">Cine</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type='text' name='title'></td>
                <td>
                    <select name='category'>
                    
                        <option value='Accion'>Accion</option>
                        <option value='Thriller'>Terror</option>
                        <option value='Drama'>Drama</option>
                        <option value='Comedy'>Comedia</option>
                        <option value='Romance'>Romance</option>
                        <option value='Musical'>Musical</option>
                
                    </select>
                </td>
                <td>                   
                    <select name='age'>
                    
                        <option value='APT'>APT</option>
                        <option value='13'>+13</option>
                        <option value='16'>+16</option>
                        <option value='18'>+18</option>
                    </select></td>
                <td><input type='number' name='id_tmbd'></td> <!-- capaz lo podes automatizar o cambiar la ventana y agregar una pelicula desde la api-->
                <td>
                  <select name='id_theather'>
                    <option>Seleccionar un cine</option>

                    <?php foreach ($T_list as $key => $theater) { ?>
                      <option value="<?php echo $theater->getId();  ?>"><?php echo $theater->getName(); ?></option>
                  <?php } ?>


                  </select> 
                </td>
            </tr>
            <tr>
                <td>Fecha                   
                  <input type="date" name ='date'></input>
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
                  <select name='room'>
                      <option value='Sala 1'>Sala 1</option>
                      <option value='Sala 2'>Sala 2</option>
                      <option value='Sala 3'>Sala 3</option>
                      <option value='Sala 4'>Sala 4</option>
                  </select>
                </td>

                <td><button type="submit" class="btn btn-success" > Agregar </button></td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</form>
