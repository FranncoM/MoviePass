 <?php
  if ($user) {
    if ($user->getLevel() == 0) {
      include("nav-bar-admin.php");
    } else include("nav-bar-user.php");
  } else {
    include('nav-bar.php');
  }
  ?>

 <!-- Page top section -->


 <section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
   <div class="page-info">
     <h2>Cartelera</h2>
     <div class="site-breadcrumb">
       <a href="">Inicio</a> /
       <span>Peliculas</span>
     </div>
   </div>
 </section>
 <!-- Page top end-->

 <div style="background: #330d38;">
   <br>
   <!-- main body -->
   <main>
     <div style="background: #ffffff;">
       <!-- podria ser una clase catelera -->

       <!-- Filtros -->
       <div class="container-category">
         <form class="form-category" action="<?php echo FRONT_ROOT . "view/viewCartelera" ?>" method="GET">
           <select name="category" class="custom-select" required>
             <option value=''>Seleccione una categoria</option>
             <option value='all'>Todas</option>
             <option value='Accion'>Accion</option>
             <option value='Thriller'>Terror</option>
             <option value='Drama'>Drama</option>
             <option value='Comedy'>Comedia</option>
             <option value='Romance'>Romance</option>
             <option value='Musical'>Musical</option>
           </select>

           <button type="submit" class="btn btn-primary">Buscar</button>
         </form>

         <form class="form-date" action="<?php echo FRONT_ROOT . "view/viewCartelera" ?>" method="GET">
           <select name="date" class="custom-select" required>
             <option value=""> Seleccione una fecha </option>
             <?php foreach ($SC_list as $key => $session) { ?>

               <option value="<?php echo $session->getDate();  ?>"><?php echo $session->getDate() ?></option>
             <?php } ?>
           </select>
           <button type="submit" class="btn btn-primary">Buscar</button>
         </form>

       </div>
       <!-- Filtro end -->

       <div class="block-content">
         <form action="<?php echo FRONT_ROOT . 'view/movieschedules' ?>" method="POST">

           <?php if (!empty($M_list)) { ?>
             <?php
              foreach ($M_list as $list) {
              ?>
               <div class="movie">
                 <img class="poster" src="<?php echo $list->getPoster() ?>"></img>

                 <div class="title"><?php echo $list->getTitle() ?></div>

                 <div class="detail"><?php echo $list->getOverview() ?></div>

                 <div class="b-info"><button type="submit" name="id" class="btn btn-success" value="<?php echo $list->getId() ?>"> Info </button></div>

               </div>
             <?php
              }
            } elseif (!empty($S_list)) {

              if (!is_array($S_list)) { ?>

               <div class="movie">
                 <img class="poster" src="<?php echo $S_list->getPoster() ?>"></img>

                 <div class="title"><?php echo $S_list->getTitle() ?></div>

                 <div class="detail"><?php echo $S_list->getOverview() ?></div>

                 <div class="b-info"><button type="submit" name="id" class="btn btn-success" value="<?php echo $S_list->getId() ?>"> Info </button></div>

               </div>

               <?php } else {
                foreach ($S_list as $list) { ?>

                 <div class="movie">
                   <img class="poster" src="<?php echo $list->getPoster() ?>"></img>

                   <div class="title"><?php echo $list->getTitle() ?></div>

                   <div class="detail"><?php echo $list->getOverview() ?></div>

                   <div class="b-info"><button type="submit" name="id" class="btn btn-success" value="<?php echo $list->getId() ?>"> Info </button></div>

                 </div>


           <?php
                }
              }
            }
            ?>
         </form>
       </div>
     </div>
   </main>
 </div>