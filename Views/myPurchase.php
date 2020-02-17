<?php include("nav-bar-user.php"); ?>

<!-- Page top section -->


<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg" style="background: #330d38;">
    <div class="page-info">
        <h2>Mis Compras</h2>
        <div class="site-breadcrumb">
            <a href="">Mis compras</a> /
        </div>
    </div>
</section>
<!-- Page top end-->


<div class="wrapper row4" style="background: #330d38;">
    <!-- main body -->
    <main class="hoc container clear">
        <div class="content" style="background: #ffffff;">
            <div class="scrollable">
                <table style="text-align:center;" class="table table-responsive table-bordered">
                    <thead class="table-active">
                        <tr >
                            <th style="width: 10%;">Pelicula</th>
                            <th style="width: 10%;">Sala</th>
                            <th style="width: 10%;">Fecha</th>
                            <th style="width: 10%;">Horario</th>
                            <th style="width: 10%;">Costo</th>
                            <th style="width: 10%;">Cine</th>
                            <th style="width: 10%;">Direccion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        if (!empty($T_list)){foreach ($T_list as $list) {
                            ?>
                            <tr>
                                <td><?php echo $list->getMovie() ?></td>
                                <td><?php echo $list->getRoom() ?></td>
                                <td><?php echo $list->getDate()  ?></td>
                                <td><?php echo $list->getTime()  ?></td>
                                <td><?php echo $list->getPrice() ?></td>
                                <td><?php echo $list->getTheather() ?></td>
                                <td><?php echo $list->getAdress() ?></td>

                            </tr>
                        <?php
                        }}
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>


