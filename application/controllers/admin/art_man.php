<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class art_man extends CI_Controller
{

	protected $tablefunc = 'art_man';                   //数据表名
	protected $funcarr = array('add','edit','del');

	function __construct()
    {
		parent::__construct();
		$this->Lang_model->loadLang('admin');
		$this->load->model('Purview_model');
	}

	public function index(){
		$this->Purview_model->checkPurview($this->tablefunc);
		$post = $this->input->post(NULL,TRUE);
		$this->load->view($this->tablefunc);
	}

	public function add(){
		$this->Purview_model->checkPurviewAjax($this->tablefunc,'add');
		$post = $this->input->post(NULL,TRUE);
	}

	public function edit(){
		$this->Purview_model->checkPurviewAjax($this->tablefunc,'edit');
		$post = $this->input->post(NULL,TRUE);
	}

	public function order(){
	}

	public function del(){
		$this->Purview_model->checkPurviewAjax($this->tablefunc,'del');
	}
}