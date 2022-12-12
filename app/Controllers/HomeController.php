<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
/**
 * HomeController
 * @author    Hezekiah O. <support@hezecom.com>
 */
class HomeController extends Controller
{
	public function index(Request $request, Response $response)
	{
        return view($response,'index.twig');
	}

    public function dashboard(Request $request, Response $response)
    {
        return view($response,'dashboard/index.twig');
    }
}
