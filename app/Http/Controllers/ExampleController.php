<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class ExampleController extends Controller
{

    public static function middleware(): array
    {
        return [
            new Middleware('example', only: ['indexApi'])
        ];
    }

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
        return response()->json('no access', 200);
    }

    public function noAdmin(): JsonResponse
    {
        return response()->json('no admin middleware', 200);
    }
}
