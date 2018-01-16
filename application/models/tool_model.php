<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tool_model extends CI_Model
{
    //存放无限分类结果如果一页面有多个无限分类可以使用
    public $treeList = array();

	public function __construct()
    {
  		parent::__construct();
	}

    /**
     * 无限级分类
     * @access public
     * @param Array $data     //数据库里获取的结果集
     * @param Int $pid
     * @param Int $count       //第几级分类
     * @return Array $treeList
     */
    public function tree(&$data,$pid = 0,$count = 1)
    {
        foreach ($data as $key => $value){
            if($value['parent']==$pid){
                $value['count'] = $count;
                $this->treeList[] = $value;
                unset($data[$key]);
                $this->tree($data,$value['id'],$count+1);
            }
        }
        return $this->treeList;
    }

}