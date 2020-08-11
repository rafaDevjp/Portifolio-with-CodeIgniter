 <?php
  
 




   class Admin extends CI_Controller{


    //page Login
    public function login(){
            $info = ['feed' => ''];
            $this->load->view('layout/header');
            $this->load->view('caixa_email/login',$info);
            $this->load->view('layout/footer');
    }


    //Função de logar 
    public function signup(){
    
        if ($this->session->has_userdata('nome')) {
            redirect('Geral/');
        }else{

            $this->load->model('usuario_model');
                if($this->usuario_model->logar() === TRUE){
                    redirect('My_Send/caixa_de_email');

                }else{
                    $this->loginInvalido();
                }
        }
       
    }

    public function loginInvalido(){
           if ($this->session->has_userdata('nome')) {
            $this->login();
        }
            $feed=[];  
            $this->load->view('layout/header');
            // Feedback para o usuario, correspondente a esta função
				$info = ['feed' => '<P class="text-danger"> Login Invalido!</P>'];
            $this->load->view('caixa_email/login', $info);
            $this->load->view('layout/footer');
      
    }

    public function logout(){ 
    
        if ($this->session->has_userdata('nome')) { //verifica se existe uma sessao cujo usuario X, se sim ..

          //Destroi dados da sessão                       //apaga tudo com o metodo unset_userdata('param.'); um para-
           $this->session->unset_userdata('id');  //cada linha (rows), depois redireciona para o controler (Geral)-
           $this->session->unset_userdata('nome');     //no controller Geral.php chama automaticamente a function index() 
            redirect('Geral/'); 

        }else {
            redirect('Geral/'); 
        }
    } 


    public function caixa_de_email(){
			if ($this->session->has_userdata('nome')) {
			redirect('Geral/');
			}
			$this->load->model('box_email');
			$emails['emails'] = $this->box_email->exibir_mensagem();

			$this->load->view('layout/header');
			$this->load->view('caixa_email/pagina', $emails);
			$this->load->view('layout/footer');
		
	}
    
    
    
       
   }//END_CLASS
   
 ?> 

