 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 




   class Usuario_model extends CI_Model{

          



            public function logar(){

                $dados = array( 'nome' =>  $this->input->post('nome'),
                                'senha' => $this->input->post('senha')
                                );

                    $resultado = $this->db->from('usuarios')
                                ->where($dados)
                                ->get();


             

            
             

                if ($resultado->num_rows() === 0) {

                    //Login invalido
                    return FALSE;
                }else{
                    
                    //INICIA UMA SESSÂO
                    $this->session->set_userdata(
                       array(
                            'id' => $resultado->num_rows()->$id_usuario, 
                            'nome' => $resultado->num_rows()->$nome 
                        )
                    );
                    //LOGIN VALIDO
                    return TRUE;

                }
            }


       
   }//END_CLASS
   
 ?> 