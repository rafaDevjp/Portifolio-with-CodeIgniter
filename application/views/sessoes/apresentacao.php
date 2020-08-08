 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 
 ?> 

   <!-- ////////////////// CAPA DO SITE //////////////////////// -->

    <section id="home">
        <div class="container-fluid" id="particles-js">
            <div class="row vh-100 border-top border-dark  col-lg-12 position-absolute">
                <div class="col-xs-12 col-lg-6 ">

                    <h1 id="nome" class="text-light">Rafael Andrade</h1>

                    <div id="carousel" class="carousel slide text-warning" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h3 class="text-white">Desenvolvedor Web</h3>
                            </div>
                            <div class="carousel-item">
                                <h3 class="text-white">Desenvolvedor Mobile</h3>
                            </div>
                            <div class="carousel-item">
                                <h3 class="text-white ">Web Design</h3>
                            </div>
                            <div class="carousel-item">
                                <h3 class="text-white ">Analista de Sistemas</h3>
                            </div>
                        </div>

                    </div>
                    <!-- /////////   SETA   ///////////// -->
                    <div id="seta" class="col-lg-12 text-center  d-none d-lg-block">
                        <a id="seta" href="#serviços"><i class="fa fa-angle-double-down fa-3x text-info2"
                                value="Navegar"></i></a>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-6  ">
                    <img id="banner" class="img-fluid" src="<?php echo base_url('assets/image/BG_BANNER2.png') ?>"
                        alt="Ilustração referente a categoria de desenvovledor">
                </div>
            </div>
        </div>
    </section>