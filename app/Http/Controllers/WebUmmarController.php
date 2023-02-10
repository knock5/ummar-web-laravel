<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebUmmarController extends Controller
{

    public function indexWeb()
    {
        return view('components.home', [
            'title' => 'Home'
        ]);
    }

    public function aboutView()
    {
        return view('components.about', [
            'title' => 'About Us'
        ]);
    }

    public function faqView()
    {
        return view('components.faq', [
            'title' => 'FAQ'
        ]);
    }

    public function productView()
    {
        return view('components.product', [
            'title' => 'Product'
        ]);
    }

    public function contactView()
    {
        return view('components.contact', [
            'title' => 'Contact Us'
        ]);
    }


}
