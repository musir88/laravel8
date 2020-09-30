<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use NoticeFacades;

class ApiController extends Controller
{
	protected $client_only = ['msg', 'subject', 'verifCode'];


	/**
	 *	客户端通知
	 *  @since 2020.10
	 */
    public function clientNotice(Request $request)
    {
    	$data = array_filter($request->only($this->client_only));

    	switch (isset($data['verifCode'])) {
    		case 'email':
    			return NoticeFacades::emailNotice($data); exit();
    			break;

			case 'sms':

    			break;
    		
    		default:
    			return response()->json(['status' => false]); exit();
    			break;
    	}
    }
}
