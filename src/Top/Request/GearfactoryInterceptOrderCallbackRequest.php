<?php
namespace Top\Request;

use Top\RequestCheckUtil;

/**
 * TOP API: taobao.gearfactory.intercept.order.callback request
 * 
 * @author auto create
 * @since 1.0, 2018.10.23
 */
class GearfactoryInterceptOrderCallbackRequest
{
	/** 
	 * ("1001", "已发货拦截失败"), ("1002", "已出库拦截失败"), ("1003", "已配货拦截失败"), ("1004", "已拣货拦截失败"), ("1005", "在途中拦截失败"), ("1006", "库存占用拦截失败"), ("1007", "未获取订单拦截失败"), ("1008", "未定义异常失败"), ("1009", "奇门接口调用异常")
	 **/
	private $errorCode;
	
	/** 
	 * 截单的子订单id列表
	 **/
	private $subOrderIds;
	
	/** 
	 * 是否截单成功，true：成功，false：失败
	 **/
	private $success;
	
	/** 
	 * 主订单id
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setErrorCode($errorCode)
	{
		$this->errorCode = $errorCode;
		$this->apiParas["error_code"] = $errorCode;
	}

	public function getErrorCode()
	{
		return $this->errorCode;
	}

	public function setSubOrderIds($subOrderIds)
	{
		$this->subOrderIds = $subOrderIds;
		$this->apiParas["sub_order_ids"] = $subOrderIds;
	}

	public function getSubOrderIds()
	{
		return $this->subOrderIds;
	}

	public function setSuccess($success)
	{
		$this->success = $success;
		$this->apiParas["success"] = $success;
	}

	public function getSuccess()
	{
		return $this->success;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.gearfactory.intercept.order.callback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->subOrderIds,20,"subOrderIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
