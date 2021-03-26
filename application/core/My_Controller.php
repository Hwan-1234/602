<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
   protected $CI;

   public function __construct()
   {
      parent::__construct();
      $this->CI =& get_instance();
   }
   public function remap_init($method, $data)
   {
      
      // if(isset($data['js_load']) && is_array($data['js_load']) && !empty($js_load)) {
      //    $data['js_load'] = array_merge($data['js_load'], $js_load);
      // }elseif (!empty($js_load)){
      //    $data['js_load'] = $js_load;
      // }
      // if(isset($data['css_load']) && is_array($data['css_load']) && !empty($css_load)){
      //    $data['css_load'] = array_merge($data['css_load'], $css_load);
      // }elseif (!empty($css_load)) {
      //    $data['css_load'] = $css_load;
      // }
      if ($this->CI->input->is_ajax_request() || strpos(config_item('this_method'),'ajax_') !== false) {
         if ($method && is_array($method)) {
            foreach ($method as $view) {
               $this->CI->load->view($view,$data);
            }
         }elseif($method){
            $this->CI->load->view($method,$data);
         }
      } else {
         //$this->CI->load->view('_inc/HtmlTop', $data);
         //$this->CI->load->view('_inc/Header', $data);
         //$this->CI->load->view('_inc/Left', $data);
         if ($method && is_array($method)) {
            foreach ($method as $view) {
               $this->CI->load->view($view,$data);
            }
         }elseif($method){
            $this->CI->load->view($method,$data);
         }
         $this->CI->output->enable_profiler(true);
         //$this->CI->load->view('_inc/Footer');
      }

   }
}