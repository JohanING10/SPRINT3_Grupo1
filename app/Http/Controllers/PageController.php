<?php

namespace App\Http\Controllers;

use App\Mail\ContactFinancialOfficeClientCreated;
use App\Mail\UserCreated;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Muestra la pagina inicial.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Muestra la pagina de contactenos.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Muestra la pagina de portafolios.
     *
     * @return \Illuminate\Http\Response
     */
    public function portafolio()
    {
        return view('portafolio');
    }

    /**
     * Muestra la pagina de sobre nosotros.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        return view('aboutUs');
    }
}
