 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 
 ?>


<div id="particles-js" class="vh-100">

 
       

        <div id="form-content" >
                
              
               <div class="col-xs-12 col-lg-3 ">

                <form action="<?php echo site_url('admin/signup') ?>" method="post"> 
                      <h4 class="text-warning2 text-center p-3 ">Login:</h4>
                      <p><?php echo $feed ?></p>
                    <div class="form-group ">
                        <label class="text-warning2 ">Nome:</label>
                        <input type="text" class="form-control2" name="nome" id="">
                    </div>
                    <div class="form-group ">
                          <label class="text-warning2 ">Senha:</label>
                        <input type="password" class="form-control2" name="senha" id="">
                    </div>
                    <div class="text-center pt-3">
                          
                        <input type="submit" class="btn btn-block btn-outline-warning" value="Entrar">
                    </div>
                </form>
             

               </div>
               
        </div>
        
      



</div>  






