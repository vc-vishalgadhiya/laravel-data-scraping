<?php

namespace Vcian\LaravelDataScraping\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Symfony\Component\DomCrawler\Crawler;

class ScrapingController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('data-scraping::scraping', [
            'data' => session('scraping.data')
        ]);
    }

    public function getData(Request $request)
    {
        $response = Http::get($request->url);
        $content = $response->body();
        $crawler = new Crawler($content);
        session(['scraping.data' => $crawler->filter($request->selector)->text()]);
        return redirect()->back();
    }

}
