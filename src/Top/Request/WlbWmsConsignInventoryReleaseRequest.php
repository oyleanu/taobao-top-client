<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.wlb.wms.consign.inventory.release request
 * 
 * @author auto create
 * @since 1.0, 2016.05.25
 */
class WlbWmsConsignInventoryReleaseRequest
{
	/** 
	 * 库存释放
	 **/
	private $content;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.wms.consign.inventory.release";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
