<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	function viewlogin(){
		return view('loginpsu');
	}



    function login(Request $request){
// ------------------------------------ �ѧ������ 㹡����ա��� PSU PASSPORT ------------------------------
/* Load factory class */
	include(app_path() . '\Http\libraries\nusoap.php');
// require_once("libraries/nusoap.php");   // ------------------------------------ Class 㹡�����¡��� �����ͧ任�Ѻ������� ------------------------------

$proxyhost = '';
$proxyport ='';

     $client = new nusoapclient("http://passport.phuket.psu.ac.th/authentication/authentication.asmx",false,$proxyhost, $proxyport);
	$client->soap_defencoding = 'utf-8';
	$params = array(
            'username' =>  $request->txtUserId,
            'password' =>  $request->txtPassword
        );

 $result = $client->call('GetUserDetails', $params, 'http://tempuri.org/', 'http://tempuri.org/GetUserDetails', false, false, 'rpc', 'literal');
dd(result);
		$err = $client->getError();

		if ($err)
		{
				//
		}
	else {

			}



    }


}