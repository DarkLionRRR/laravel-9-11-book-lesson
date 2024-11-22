<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller implements HasMiddleware
{
    public function index(): Renderable
    {
        return view('home', ['bbs' => Auth::user()->bbs()->latest()->get()]);
    }

    public function create(): View|ViewFactory
    {
        return view('bb-create');
    }

    public function store(Request $request): RedirectResponse
    {
        Auth::user()->bbs()->create([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
        ]);

        return redirect()->route('home');
    }

    public function edit(Bb $bb): View|ViewFactory
    {
        return view('bb-edit', ['bb' => $bb]);
    }

    public function update(Request $request, Bb $bb): RedirectResponse
    {
        $bb->fill([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price
        ]);

        $bb->save();

        return redirect()->route('home');
    }

    public function delete(Bb $bb): View|ViewFactory
    {
        return view('bb-delete', ['bb' => $bb]);
    }

    public function destroy(Bb $bb): RedirectResponse
    {
        $bb->delete();

        return redirect()->route('home');
    }

    public static function middleware(): array
    {
        return ['auth'];
    }
}
