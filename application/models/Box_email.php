 <?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 


   class Box_email extends CI_Model{

         public function mensagem(){  //inserindo a menssagem 
          
            $mensage = array(
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'telefone' => $this->input->post('fone'),
                'texto' => $this->input->post('texto'),
                'data' => date("Y-m-d H:i:s" )
                
            );
               $this->db->insert('email', $mensage);
        }

        public function exibir_mensagem(){

            $resutado = $this->db->from('email')
                                  ->order_by('id', 'DESC')
                                  ->get();
               return $resutado->result_array();

        }

        public function abrir_email($id){  

             $result = $this->db->from('email')
                                ->where('id',$id)
                                ->get();
               return $result->result_array();

        }

        public function deletar_email($id){

             $this->db->get_where('email' , array('id' => $id ));
             $this->db->delete('email', array('id' => $id));


        }

     
          //Deleta os Campos selecionados por CHECKBOX
         public function check_delete_model($ids){
              
               if($this->db->where_in('id',$ids)->delete('email')){
                     return true;
               }else{
                    return false;
               }

     }

       
   }// END_CLASS
   
 ?> 