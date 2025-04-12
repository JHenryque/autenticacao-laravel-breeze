<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MainController extends Controller
{
    public function nova_pagina(): View
    {
        return view('nova_pagina');
    }

    public function teste(Request $request)
    {
        // dados do usuário autenticado
        $id = auth()->user()->id;
        echo $id;
        //ou
        $id = $request->user()->name;
        echo $id;
    }

    public function nova_pagina_publica() {
        return view('nova_pagina_publica');
    }

    public function main_logout()
    {
        // fazer o logout sem post - limpar o usuário da sessa
        Auth::logout();

        // invalidate a sessao e regenerar o token
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }
}
