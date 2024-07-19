<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'About Us';
        return view('page.about', compact('title'));
    }
    
    public function pp()
    {
        $title = 'Privacy Policy';
        return view('page.privacy-policy', compact('title'));
    }
    
    public function terms()
    {
        $title = 'Terms & Conditions';
        return view('page.terms-and-cond', compact('title'));
    }
    
}
