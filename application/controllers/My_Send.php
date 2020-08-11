 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');


   class My_Send extends CI_Controller{

		public function send_mail_php(){  /// Não está sendo Utilizado 

				
				// /// Otimização de Servidor de E-mail
				// $mail->IsSMTP(); 
				// $mail->Host = 'smtp.gmail.com'; 
				// $mail->SMTPAuth = TRUE; 
				// $mail->SMTPSecure = 'tls';
				// $mail->Username = 'rafael.andradejppb@gmail.com'; //Usuário do gMail
				// $mail->Password = 'verdao9394'; //Senha do gMail
				// $mail->Port = 587; 
				// $mail->SMTPDebug = 2;
				// $mail->CharSet ='UTF-8';
				// $mail->SetFrom($email_cli); //Quem está enviando o e-mail.

				// /////
				// $mail->isHTML(true);
				// $mail->Subject = 'Clientes' . $nome ; //Assunto do e-mail.
				// $mail->Body = '<div style="width: 80%; hight:400vh; border: dashed 2px rgb(30, 160, 118) ; padding: 20px">
				// 				<h4>Cliente: </h4><p style="font-size:16pt"> ' . $nome . '</p> 
				// 				<h4>Telefone: </h4><p style="font-size:16pt"> ' . $fone . '</p> 
				// 				<h4>E-mail: </h4><p style="font-size:16pt"> ' . $email_cli . '</p>
				// 				<p style="font-size:12pt">' . $texto  . '</p></div>' ;
				
				// $mail->AddAddress('rafa.devjp@gmail.com'); //enderece do email q vai receber a mensssagem 
				

				//  // Send email
				// if(!$mail->send()){
				// 	echo 'Message could not be sent.<br>';
				// 	echo 'Mailer Error: ' . $mail->ErrorInfo .'br';
				// }else{
				// 	echo 'Messagen eviado com sucesso';
				// }

				
				// ///carrega a biblioteca de PHPmailer 
				// $this->load->library('php_mailer');
				// $mail = $this->php_mailer->load();
				
				



		
		}

	

	// Função q recebe os dados de formulario Contatos 
    public function send() {
				$feed = [];  
			if ($this->input->post('nome') === '' ||  
				$this->input->post('nome') === '' ||      //Validação de formulario VIa Servidor
				$this->input->post('email') ==='' ||
				$this->input->post('fone') === '' || 
				$this->input->post('texto') ===''){

					$feed = ['feed' => 'Por Favor, peencha totos os campos! Para cancelar clique em '];

						$this->load->view('layout/header');
						$this->load->view('sessoes/contato', $feed);
						$this->load->view('layout/footer');
					return;
				
			 	}

			    $this->load->model('box_email');
				$this->box_email->mensagem();
						
				redirect('Geral/index');
		
	}

	

    // Função para abrir a caixa de Email
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


	// Função para abrir o Email selecionado
	public function my_email($id){

			$this->load->model('box_email');
			$mens['mens'] = $this->box_email->abrir_email($id);

			$this->load->view('layout/header');
			$this->load->view('caixa_email/email', $mens);
			$this->load->view('layout/footer');
	  	
		
	}

	//Função para deletar o Email quando o mesmo estiver aberto
	public function deleta_email($id){


			$this->load->model('box_email');
			$this->box_email->deletar_email($id);
			$this->caixa_de_email();
		}
	
	//Função para deletar emails na caixa de emails selecionador por checkbox
	public function check_delete(){
			$this->load->model('box_email');
			$ids =  $this->input->post('check_deleta');
			$check = count($ids);
			
				if ($check > 0) {
					$this->box_email->check_delete_model($ids);
					$this->caixa_de_email();

				}
	}


       
   } //ENd_class
   
 
 ?> 