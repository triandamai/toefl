<?php
class MY_Controller extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
    }


    function isLoggedIn()
    {
        if (
            isset($this->session->userdata['user_data']) &&
            $this->session->userdata['user_data'] == true
        ) {
            return true;
        } else {
            return true;
        }
    }
	function alert($pesan,$style){
		$this->session->set_flashdata(
			'alert',
			'<div class="alert alert-'.$style.' alert-dismissible fade show" role="alert">
		<p class="mb-0">
			'.$pesan.'
		</p>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
		</button>
	</div>');
	}
    function uploadFoto($image)
    {
        $config['upload_path'] = 'assets/uploads/thumbnail_produk';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $image;
        $config['overwrite'] = false;
        $this->upload->initialize($config);
    }

    function uploadFotoKategori($image){
        $config['upload_path'] = 'assets/uploads/thumbnail_kategori';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $image;
        $config['overwrite'] = true;
        $this->upload->initialize($config);
    }
    public function _render_page($view, $paramdata = NULL)//I think this makes more sense
	{
		$returnhtml = FALSE;
		$viewdata = (empty($paramdata)) ? $this->data : $paramdata;

	
		$json = file_get_contents("assets/front-end-config.json");
		$obj  = json_decode($json);
		$data = array(
			'module'=> $view,
			'data'=> $viewdata,
			'config' => $obj
		);
		if($obj->tipe_layout == "vertical-light"){
			$view_html = $this->load->view(
				"app-vertical-light", 
				$data, 
				$returnhtml
			);
		}else if($obj->tipe_layout == "vertical-dark"){
			$view_html = $this->load->view(
				"app-vertical-dark", 
				$data, 
				$returnhtml);
		}else if($obj->tipe_layout == "horizontal-light"){
			$view_html = $this->load->view(
				"app-horizontal-light", 
				$data, 
				$returnhtml);
		}else if($obj->tipe_layout == "horizontal-dark"){
			$view_html = $this->load->view(
				"app-horizontal-dark", 
				$data, 
				$returnhtml);
		}else if($obj->tipe_layout == "vertical-semidark"){
			$view_html = $this->load->view(
				"app-vertical-semidark", 
				$data, 
				$returnhtml);
		}else {
			$view_html = $this->load->view(
				"app-vertical-light", 
				$data, 
				$returnhtml);
		}
		
		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
	}
    
}