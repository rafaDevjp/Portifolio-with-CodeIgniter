 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 
 ?> 

    <div class="bg-email">


                    <nav class="navbar navbar-expand-lg navbar-dark  border-bottom border-dark">
            <div class="container-fluid">
                <a class="navbar-brand btn" href="<?php echo site_url('My_Send/caixa_de_email/') ?>"> 
                    <i class="fa fa-reply" aria-hidden="true"></i> 
                </a>
            </div>
        </nav>

            <header id="printable" class="sticky-top">
                <?php foreach ($mens as $email) :?>
                    <div class="col-lg-12 p-2 bg-dark text-right">
                    <a class="btn btn-sm btn-outline-danger m-2" href="<?php echo site_url('My_Send/deleta_email/') . $email['id']?>" title="Excluir"><i class="fa fa-trash-o fa-1x text-white" aria-hidden="true"></i></a>
                    <a class="btn btn-sm btn-outline-warning m-2" href=""><i class="fa fa-star fa-1x text-white" aria-hidden="true" title="Favoriatr"></i></a>
                    <a class="btn btn-sm btn-outline-success m-2" href=""><i class=" fa fa-folder-open fa-1x text-white" aria-hidden="true" title="Arquivar"></i></a>
                    <a class="btn btn-sm btn-outline-info m-2" onClick="window.print()" href=""><i class="fa fa-print fa-1x text-white" aria-hidden="true" title="Imprimir"></i></a>
                </div>
                <?php endforeach; ?> 
            </header>
    
           
        <div id=""  class="container  p-5 modal-dialog-scrollable">
             <div class="row justify-content-center pt-5 ">
                <div class="col-xs-12 col-lg-11 bg-white p-5 ">
                    <?php foreach ($mens as $email) :?>

                    <div class="row justify-content-between">
                        <div class="text-primary p-2"><h3><?php echo $email['nome'] ?></h3></div>
                        <div class="text-danger p-2"><?php echo date('d . m . Y - H:i', strtotime($email['data'])) ?></div>
                    </div>
                      <hr> 
                    <div class="row p-3 justify-content-between">
                        <div class="pb-5">
                            <div class="row ">
                                <div class="">
                                    <i class="fa fa-user-circle fa-2x pr-2" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <span class="text-primary"><?php echo $email['email']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="pb-5">
                            Fone: <span><?php echo $email['telefone']; ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-lg-12 p-3 text-justify border border-primary">
                            <p><?php echo $email['texto']; ?></p>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>

                </div>
            </div>

        </div>

    </div>
</body>
</html>