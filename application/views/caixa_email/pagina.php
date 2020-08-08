 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body class="">

    <nav class="navbar navbar-light bg-dark text-white">
         <i class="fa fa-envelope-o fa-2x " aria-hidden="true"><a class="navbar-brand p-2 text-white" href="#">Caixa de E-mail</a></i>
         <a class="btn btn-sm btn-outline-danger" href="<?php echo site_url('admin/logout')?>">Sair<i  class="fa fa-sign-out fa-1x  pl-1" aria-hidden="true"></i></a>
    </nav>

        <div class="container-fluid vh-100 bg-email-box p-5  ">

            <div class="d-none d-sm-block"> 
              
                <div class="row justify-content-end ">
              
            
                    <!-- barra de controler  -->
                    <div class="col-lg-2 p-2 bg-dark mr-3 text-center">

                        <button id="aplica" form="meuform" class="btn btn-sm btn-outline-danger m-2" type="submit" onclick="checar()" disabled  title="Excluir">
                                <i class="fa fa-trash-o fa-1x text-white" aria-hidden="true"></i>
                        </button>  

                        <button form="meuform" class="btn btn-sm btn-outline-warning m-2" href="" title="Favoritar ">
                                <i class="fa fa-star fa-1x text-white" aria-hidden="true" ></i>
                        </button>

                        <button form="meuform" class="btn btn-sm btn-outline-success m-2" href="" title="Arquivar ">
                                <i class="fa fa-folder-open fa-1x text-white" aria-hidden="true" ></i>
                        </button>

                        <button class="btn btn-sm btn-outline-info m-2" onClick="window.print()" href="" title="Imprimir">
                                <i class="fa fa-print fa-1x text-white" aria-hidden="true" ></i>
                        </button>

                    </div>


                    <!-- campos de Emails -->

                    <form id="meuform" action="<?php echo site_url('my_send/check_delete/')?>" method="post" class="col-lg-11">
                    <table class="table table-hover table-dark2  ">
                        <thead>
                            <tr>
                            <th scope=""><input type="checkbox" name="check_deleta[]" onclick="marcarTodos(this.checked);" title="Selecionar tudo"></th>
                            <th scope="">Caixa de Entrada <span class="badge badge-pill badge-danger "><?php echo count($emails) ?></span></th>
                            <th scope=""></th>
                            <th scope=""></th>
                            <th scope="">Data</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php if(count($emails) === 0) :?>
                            <tr>
                                <th scope="row"></th>
                                <td class="text-danger text-center"><h4>Nenhuma mensagem foi encontrada.</h4></td>
                            </tr>
                            </tbody>
                        </table>
                        <?php  endif;?>


                        <?php foreach ($emails as $email):?>

                            <tr >
                            <th scope="row"><input type="checkbox" class="marcar" name="check_deleta[]" value="<?php echo $email['id'] ?>"></th>
                            <td > <a class="text-white text-decoration-none" href="<?php echo site_url('my_send/my_email/') . $email['id'] ?>"><?php echo  $email['nome']?></a></td>
                            <td > <a class="text-white" href="<?php echo site_url('my_send/my_email/') . $email['id'] ?>"><?php echo  $email['email']?></a></td>
                            <td class="text-secondary"><?php echo substr( $email['texto'], 0, 40)?> ... </td>
                            <td class="text-white"><small><?php echo date('d-m-Y H:i', strtotime($email['data']))  ?></small></td>
                            </tr>
                        
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                   </form>
                </div>
            </div>
        
 
      
    <script src="<?php echo base_url('/assets/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js'"
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd"
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/particles.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/app.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/main.js') ?>"></script>
</body>
</html>

<!-- <a href='https://www.freepik.com/vectors/background'>Background vector created by alicia_mb - www.freepik.com</a> -->