<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Response;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;

class BbsController extends Controller
{
    public function index(): ViewFactory|View
    {
        return view('index', ['bbs' => Bb::latest()->get()]);
    }

    public function detail(Bb $bb): ViewFactory|View
    {
        return view('detail', ['bb' => $bb]);
    }
}
