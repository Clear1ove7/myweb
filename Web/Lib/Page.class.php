<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/21
 * Time: 15:00
 */

namespace Lib;
//以功能为导向
class Page{

    public $total;//总记录数
    public $show;//每页显示条数
    public $page;//页数
    public $currentPage;//当前页
    public $start;//起始位置

    //初始化数据
    public function __construct($total,$show){
          $this->total = $total;
          $this->show = $show;
          $this->page = ceil($this->total/$this->show);
          $this->currentPage = empty($_GET['page'])?1:$_GET['page'];//当前页
          if($this->currentPage>$this->page){//防止出右边界
              $this->currentPage = $this->page;
          }
          if($this->currentPage<0){//防止出左边界
            $this->currentPage = 1;
          }
          $this->start = ($this->currentPage-1)*$this->show;
    }


    //输出页码
    public function showPage($name=""){
        //输出页码
        $strData = "<button class='btn col-lg-7 bbb' type='button'>当前<span class='badge'>".$this->currentPage."/".$this->page."</span>页 共<span class='badge'>".$this->total."</span>条记录</button>";
        $strData .="<a href='?page=1".$name."' class='btn col-lg-1' title='首页'><span class='glyphicon glyphicon-home'></span></a>&nbsp;&nbsp;";
        if($this->currentPage>1){
            $strData .="<a href='?page=".($this->currentPage-1).$name."' class='btn col-lg-1' title='上一页'><span class='glyphicon glyphicon-step-backward'></span></a>&nbsp;&nbsp;";
        }

        if($this->currentPage<$this->page){
            $strData .="<a href='?page=".($this->currentPage+1).$name."' class='btn col-lg-1' title='下一页'><span class='glyphicon glyphicon-step-forward'></span></a>&nbsp;&nbsp;";
        }

        $strData .="<a href='?page=".$this->page.$name."' class='btn col-lg-1'  title='尾页'><span class='glyphicon glyphicon-fast-forward'></span></a>";
        return $strData;
    }
}