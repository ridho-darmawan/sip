<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function beranda()
    {
        return view('client.homepage');
    }

    public function faq()
    {
        $faqs = Faq::orderBy('id','asc')->get();
        return view('client.faq', compact('faqs'));
    }

    public function jenjang_karir()
    {
        return view('client.jenjang_karir');
    }

    public function laporan()
    {
        return view('client.laporan');
    }

    public function testimonial()
    {
        return view('client.testimonial');
    }
}
