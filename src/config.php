<?php
return [
	'birdsystem' => [
		// 文档 https://birdsystem.atlassian.net/wiki/spaces/DEV/pages/1540382
		// 官网 http://www.birdsystem.com/
		// http://www.birdsystem.co.uk/client
		// 华南站
		// test
		// bird123456
		'url' => 'http://www.birdsystem.com/client',
		'site' => 36,
	],
	'goodcang' => [
		// https://sbx-bsc.eminxing.com:60083
		// beesoft
		// behero19881120
		// 储成英
		// beherochuling@163.com
		// 官网 http://goodcang.com/
		// 文档 调用 https://open.goodcang.net/default/open/api-call/
		// 文档 推送 https://open.goodcang.net/default/open/api-push/
		// OMS https://oms.goodcang.net
		// 测试 WSDL https://sbx-oms.eminxing.com:60083/default/svc/wsdl
		// 测试 service curl https://sbx-oms.eminxing.com:60083/default/svc/web-service
		// 测试 WSDL http://202.104.134.94:61639/default/svc/wsdl
		// 测试 service curl http://202.104.134.94:61639/default/svc/web-service
		// 正式 WSDL https://oms.goodcang.net/default/svc/wsdl
		// 正式 service curl https://oms.goodcang.net/default/svc/web-service
		'url' => 'https://sbx-oms.eminxing.com:60083/default/svc/web-service',
		'wsdl' => 'https://sbx-oms.eminxing.com:60083/default/svc/wsdl',
		'appToken' => '', // API 密钥
		'appKey' => '', // API 标识
		'language' => '', // 错误信息语言 zh_CN|en_US
		'paramsJson' => '', // 	请求的数据内容 json
		'sign' => '', // 签名
		'MessageType' => '',
		'Message' => '',
		'MessageId' => '',
		'SendTime' => '',

		// ask 标志 Success|Failure
		// message 消息
		// error 错误

		// errCode 错误 代码
		// errMessage 错误 信息

		// pageSize 分页大小
		// page 当前页

		// Status 状态 SUCCESS|FAILED
		// ErrorMessage 错误消息

		// $str = "…123452016-07-27 13:10:10"; // Message 值 AppKey 值 发送时间连接 Message=…, AppKey=12345, SendTime=2016-07-27 13:10:10
		// $sign = md5(mb_convert_encoding($str, 'gbk', 'utf8'));
	],
	'4px' => [
	],
	'ckyv4' => [
	],
	'yunde' => [
	],
	'winnt' => [
	],
];
