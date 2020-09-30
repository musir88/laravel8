<?php
namespace App\Services;
use App\Mail\MemberRoutime;
use Illuminate\Support\Facades\Mail;


/**
 * 通知处理
 */
class NoticeService
{

	/**
	 *	邮件通知
	 *  @since 2020.10
	 */
	public function emailNotice($data)
	{
		$result = Mail::to("xyz1005@163.com")->queue(new MemberRoutime($data));
    	return response()->json(['status' => $result]); exit();
	}
}
