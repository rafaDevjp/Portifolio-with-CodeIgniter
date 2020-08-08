 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 

 ?>       
          <!-- BOTAO DO WHATSAPP -->
    <a id="btn-whtsapp" type="button" href="https://api.whatsapp.com/send?phone=5579996566701)" target="blank"
        class="btn btn-success btn-sm fixed-bottom sticky-top text-right">
        <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>


    <footer class=" text-white p-5">
        <div class="container text-center ">
    
            <p> &copy;<span id="data"></span> - Todos os direitos reservados.</p>
            <script>
                var d = new Date();
                document.getElementById("data").innerHTML = d.getFullYear();
            </script>
        </div>
    </footer>