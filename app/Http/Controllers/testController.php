<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\testService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class testController extends BaseController
{
	private $service;
	public function __construct(testService $service)
	{
		// コミット(修正)aaaa
		$this->service = $service;
	}
	public function index(Request $request)
	{
		//$request->session()->put('name', 'aaaaaa');
		$data = $request->session()->get('name');
		print_r($data);

		Cache::store('redis')->put('age', 45, 1800);
		print_r(Cache::store('redis')->get('age'));

		echo $this->service->execute();
	}
	/**
	 * index3
	 *
	 * @param Request $request 
	 * @return void
	 */
	public function index3(Request $request)
	{
	}
}
