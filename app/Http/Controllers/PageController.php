<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function rooms(): View
    {
        return view('pages.rooms');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function gallery(): View
    {
        return view('pages.gallery');
    }

    public function reviews(): View
    {
        return view('pages.reviews');
    }

    public function faq(): View
    {
        return view('pages.faq');
    }
}
