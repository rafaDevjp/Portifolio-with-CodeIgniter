 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 
 ?> 
 
    <nav class="navbar navbar-light bg-dark text-white">
         <i class="fa fa-envelope-o fa-2x " aria-hidden="true"><a class="navbar-brand p-2 text-white" href="#">Caixa de E-mail</a></i>
         <a class="btn btn-sm btn-outline-danger" href="<?php echo site_url('Admin/logout')?>">Sair<i  class="fa fa-sign-out fa-1x  pl-1" aria-hidden="true"></i></a>
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

                    <form id="meuform" action="<?php echo site_url('My_Send/check_delete/')?>" method="post" class="col-lg-11">
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
                            <td > <a class="text-white text-decoration-none" href="<?php echo site_url('My_Send/my_email/') . $email['id'] ?>"><?php echo  $email['nome']?></a></td>
                            <td > <a class="text-white" href="<?php echo site_url('My_Send/my_email/') . $email['id'] ?>"><?php echo  $email['email']?></a></td>
                            <td class="text-secondary"><?php echo substr( $email['texto'], 0, 40)?> ... </td>
                            <td class="text-white"><small><?php echo date('d-m-Y H:i', strtotime($email['data']))  ?></small></td>
                            </tr>
                        
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                   </form>
                </div>
            </div>
        
 
 

<!-- <a href='https://www.freepik.com/vectors/background'>Background vector created by alicia_mb - www.freepik.com</a> -->