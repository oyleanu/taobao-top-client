<?php

namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: cainiao.openstorage.isv.resource.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CainiaoOpenstorageIsvResourceCreateRequest
{
	/** 
	 * isv创建资源的参数
	 **/
	private $paramCreateIsvResourceRequest;
	
	private $apiParas = array();
	
	public function setParamCreateIsvResourceRequest($paramCreateIsvResourceRequest)
	{
		$this->paramCreateIsvResourceRequest = $paramCreateIsvResourceRequest;
		$this->apiParas["param_create_isv_resource_request"] = $paramCreateIsvResourceRequest;
	}

	public function getParamCreateIsvResourceRequest()
	{
		return $this->paramCreateIsvResourceRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.openstorage.isv.resource.create";
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
