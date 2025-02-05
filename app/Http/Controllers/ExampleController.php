<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function indexApi(): JsonResponse
    {
        return response()->json('hello word', 200);
    }

    public function noAcces(): JsonResponse
    {
        return response()->json('no acces', 200);
    }

    public function noAdmin(): JsonResponse
    {
        return response()->json('no admin middleware', 200);
    }
}
