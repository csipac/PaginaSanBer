<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Nuestras Instalaciones</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="text-center">
            <ul class="portfolio-filter">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalsalon">Salon Principal</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalbiblio">Biblioteca</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalcompu">Salon de Computacion</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalcapilla">Capilla</button>
                <!-- <li><a class="active" href="#" data-filter="*">Salon Principal</a></li> -->
                <!-- <li><a href="#" data-filter=".animation">Biblioteca</a></li>
                <li><a href="#" data-filter=".Business">Salon de Computacion</a></li>
                <li><a href="#" data-filter=".art">Capilla</a></li> -->
            </ul><!--/#portfolio-filter-->
        </div>

        <?php include('layouts/modalSalon.php') ?>
        <?php include('layouts/modalBiblioteca.php') ?>
        <?php include('layouts/modalCompu.php') ?>
        <?php include('layouts/modalCapilla.php') ?>


    </div><!--/.container-->
</section><!--/#portfolio-->
