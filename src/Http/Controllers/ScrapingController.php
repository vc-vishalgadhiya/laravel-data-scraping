<?php

namespace Vcian\LaravelDataScraping\Http\Controllers;

use Illuminate\View\View;

class ScrapingController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('data-scraping::scraping');
    }

}
