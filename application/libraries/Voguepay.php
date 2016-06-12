<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voguepay {
        
        protected $CI;
        
        
        
        
        
        
        public function __construct($params=array())
        {
                // Assign the CodeIgniter super-object
                $this->CI =& get_instance();
        }
        
                 public function query_tranx($tranxId,$type)
                 { if($type=="json")
					 { //get the full transaction details as an json from voguepay
	                   $json = file_get_contents('https://voguepay.com/?v_transaction_id='.$tranxId.'&type=.'$type);
	                   //create new array to store our transaction detail
	                   $transaction = json_decode($json, true);
					 }
				   elseif($type=="xml")
				     {
					 }
				   else
				     { return $this-error_report(001,"Invalid Type requested");   }
	
	             }
				 
				 
	             public function error_report($errCode="",$errString="")
                  { }
	
	}
                 }

