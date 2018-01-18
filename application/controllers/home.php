<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->Cache_model->setLang($this->input->get());
		$this->Lang_model->loadLang('front',$this->Cache_model->currentLang);
		if($this->uri->segment(1)){
			show_404();
		}
		$this->load->helper('tags');
	}

	public function index(){
		$config = $this->Cache_model->loadConfig();
		$config['seo_title'] = $config['site_title'];
		$config['seo_keywords'] = $config['site_keywords'];
		$config['seo_description'] = $config['site_description'];
		$this->load->setPath();

        $this->load->model('Data_model');

        // 艺术委员会
        $artsCouncil = $this->Cache_model->loadCategoryByDir('artscouncil');

        // 艺术节项目
        $artfestival = $this->_getList('artfestival');

        // 专场演出
        $perform = $this->_getList('specialperformance',4,0,array('to_homepage'=>1));

        // 专家课
        $expertclass = $this->_getList('expertclass',4,0,array('to_homepage'=>1));

        // 媒体报道
        $mediareport = $this->_getList('mediareport',2,0,array('to_homepage'=>1));

        // 大赛精华回顾
        $wonderfulreview = $this->_getList('wonderfulreview',4,0,array('to_homepage'=>1));

		$res = array(
				'config'=>$config,
				'currentLang'=>$this->Cache_model->currentLang,
				'langurl'=>$this->Cache_model->langurl,
                'artsCouncil' => $artsCouncil,
                'artfestival' => $artfestival,
                'specialperformance' => $perform,
                'expertclass' => $expertclass,
                'mediareport' => $mediareport,
                'wonderfulreview' => $wonderfulreview,
		);
		$tpl = $config['site_home']==''?'home':$config['site_home'];
		$this->load->view($config['site_template'].'/'.$tpl,$res);
	}

    // 获取列表信息
    private function _getList($dir,$limit = 4,$offset = 0,$where = array())
    {
        $thiscategory = $this->Cache_model->loadCategoryByDir($dir);
		$tmpCategory = $this->Data_model->getData(array('model'=>$thiscategory['model'],'lang'=>$this->Cache_model->currentLang,'lft >='=>$thiscategory['lft'],'lft <'=>$thiscategory['rht']),'',0,0,'category');
		$categoryidarr = mult_to_idarr($tmpCategory);
		$datawhere = array(
				'category'=>$categoryidarr,
				'puttime <'=>time(),
				'status'=>1,
				'lang'=>$this->Cache_model->currentLang
		);

        if (!empty($where))
        {
            $datawhere = array_merge($datawhere,$where);
        }

		$list = $this->Data_model->getData($datawhere,'listorder,puttime desc',$limit,$offset,$thiscategory['model']);
        $list = $this->Cache_model->handleModelData($list);

        return $list;
    }
}