 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 
 ?> 

   <!-- //////////////// CONTATOS ///////////////// -->
    <section id="contato" class="">
        <div class="container-fluid ">
            <div class="row justify-content-center">

                <div class="col-xs-12 col-lg-10 bg-contato">
                    <div class="row justify-content-center pt-5">

                            <div class="col-xs-12 col-lg-5 p-5"> <!-- Parte de texto -->
                                <h4 class="font-weight-bolder">Contato</h4>
                                <p class="text-break font-weight-lighter text-justify">Você pode entrar em contato comigo agora mesmo! Basta preenchendo o formulário, também pelo telefone ou se achar melhor
                                através minhas redes sociais, que estão logo a baixo do formulário.
                                </p>

                                <div class="pt-5">
                                    <p><span><i class="fa fa-envelope fa-1x pr-3 text-success2" aria-hidden="true"></i> </span> rafa.devjp@gmail.com</p>

                                    <p><span><i class="fa fa-phone fa-1x pr-3 text-success2" aria-hidden="true"></i> </span> (79) 99656-6701</p>

                                    <p><span><i class="fa fa-map-marker fa-1x pr-3 text-success2" aria-hidden="true"></i> </span> Lagarto - Sergipe - Brasil</p>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-lg-5 p-5  "> <!-- parte do card-formulario -->
                                <div class="col-xs-12 col-lg-11 card shadow p-5">
                                    <h5 class="font-weight-bolder  pt-3">Enviar Mensagem </h5>
                                      <?php if (isset($feed)) :?>
                                      <div class="alert alert-danger" role="alert">
  											 <?php echo $feed; ?> <a href="<?php echo site_url('geral/')?>" class="alert-link">Sair Agora</a>
										</div>
                                          
                                      <?php endif; ?>
                                    <form action="<?php echo site_url('My_send/send') ?>" method="post">
                                              
                                        <div class="form-group" title="Nome obrigatório">
                                            
                                            <input type="text" name="nome" class="form-control border border-success" placeholder="Seu Nome">
                                        </div>
                                        <div class="form-group" title="Nome obrigatório">
                                            
                                            <input type="tel" name="fone" class="form-control border border-success" placeholder="Seu Telefone">
                                        </div>
                                        <div class="form-group" title="e-mail válido e obrigatório">
                                            
                                            <input type="email" name="email" class="form-control border border-success" placeholder="Seu e-mail">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="texto" class="form-control border border-success" cols="30" rows="4" placeholder="mensagem..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success btn-block" value="Enviar">
                                        </div>

                                    </form>
                                </div>
                            </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-lg-4 p-4 text-light"> 
                            <h4 class="font-weight-bolder">Rafael Andrade</h4>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illum laboriosam dolorem 
                                minus dolores dicta sint ipsam? Est praesentium volupt
                            </p>
                        </div>
                        <div class="col-xs-12 col-lg-3 p-4 text-light">
                            <h4 class="font-weight-bolder">Freelancer</h4>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illum laboriosam dolore </p>
                        </div>
                        <div class="col-xs-12 col-lg-3 text-light text-center p-4">
                           
                                    <a class="p-2 text-light " href="#"><i class=" text-light fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                              
                                    <a class="p-2 text-light " href="#"><i class=" text-light fa fa-github-square fa-2x" aria-hidden="true"></i></a>
                            
                                    <a class="p-2 text-light " href="#"><i class=" text-light fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                                
                                    <a class="p-2 text-light " href="#"><i class=" text-light fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a>
                               
                        </div>
                        <div class="col-xs-12 col-lg-12 pb-5  text-light text-center d-none d-lg-block ">
                            <a class="text-light p-5"href="#home">Home</a>
                            <a class="text-light p-5"href="#serviços">Serviços</a>
                            <a class="text-light p-5"href="#quem_sou">Quem sou</a>
                            <a class="text-light p-5"href="#time-line">Time-line</a>
                            <a class="text-light p-5"href="#contato">Contato</a>
                            <a class="text-light p-5"href="#">Meus Projetos</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
