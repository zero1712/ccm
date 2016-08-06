<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Ajaxsorter {
    public function get(){       
        $data = $_POST;        
        $where = (isset($_POST['where']))?$_POST['where']:array();
        $data['where'] = array();
        foreach($where as $key => $value){
            if(strpos($value, "%")!==FALSE) 
                $data['where'][$key. ' like'] = $value;
            else
                $data['where'][$key] = $value;
        }            
        return $data;
    }
    public function filter($input){

        //FALTA CONVERTIR ESTA FUNCION EN UNA LIBRERIA PARA CODEIGNITER

        //PARA BRINDAR FUNCIONALIDAD CON LA INTEGRACION DE LA LIBRERIA UNICAMENTE

        $data['order'] = $input->post('order');//VALOR DE ORDENACION (campo tipo)      

        $data['offset'] = $input->post('pa');//PAGINA SOLICITADA     

        $data['limit'] =$input->post('max_pp');//MAXIMO POR PAGINA        

        $data['values'] =  explode(',',$input->post('value'));//ARREGLO DE VALORES 

        $data['fields'] =   explode(',',$input->post('field'));//ARREGLO DE CAMPOS  

        $data['equ'] =   explode(',',$input->post('equ'));//ARREGLO DE CAMPOS          

        //FORMACION DE LAS CONDICIONES A PARTIR DE LOS VALORES QUE LLEGAN		

        $data['where'] =array();
        $type = (isset($_POST['both']) and $_POST['both']==TRUE)?'%':'';
        $dat=array();      
        for($it=0;$it<(count($data['values']));$it++){ 

            if($data['values'][$it]!=""){  

  $data['where'][$data['fields'][$it]. " ".(($data['equ'][$it]===">>")?'>=':(($data['equ'][$it]==="<<")?'<=':($data['equ'][$it])))]= $type.$data['values'][$it].(($data['equ'][$it]==="like")?'%':'');

            }                            

        }
        //SE CALCULA EL OFFSET
        $data['offset'] =$data['offset']*$data['limit'];
        return $data;
    } 
}



/* End of file Someclass.php */
