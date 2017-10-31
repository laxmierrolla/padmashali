 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  Module: Matrimony Model
  Author: Laxmi
  Created Date: 29/October/2017
 * */
class Userdashboard_model extends CI_Model
{
  private $tablename = "";
 
  public function __construct(){
    parent::__construct();
    
  }
  
  public function userdata($profileid){ 
      $result = $this->db->select('a.*,b.*,')->from('tbl_personel as a')->join('tbl_money as b','a.profile_code = b.profile_code')->where(array('a.profile_code' =>$profileid))->get()->row();
       if($result){
           return $result;
           
       }
  }
  
  
}