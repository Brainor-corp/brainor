<?php

namespace App\Http\Controllers;

use Bradmin\Cms\Models\BRPost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class GeneratorController extends Controller
{
    public function generateSitemap(){
        $staticLinks =
            [
                "/",
            ];

        $base = new \DOMDocument('1.0', 'UTF-8');

        $xmlRoot = $base->createElement("urlset");
        $xmlRoot->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

        $xmlRoot = $base->appendChild($xmlRoot);

        foreach ($staticLinks as $link)
        {
            $currentUrl = $base->createElement("url");
            $currentUrl = $xmlRoot->appendChild($currentUrl);

            $currentUrl->appendChild($base->createElement('loc',           url($link)));
            $currentUrl->appendChild($base->createElement('lastmod',       Carbon::today()->format('Y-m-d')));
            $currentUrl->appendChild($base->createElement('changefreq',    'monthly'));
            $currentUrl->appendChild($base->createElement('priority',      '0.8'));
        }

        foreach (BRPost::whereNotselect('slug')->get() as $producer)
        {
            $currentUrl = $base->createElement("url");
            $currentUrl = $xmlRoot->appendChild($currentUrl);

            $currentUrl->appendChild($base->createElement('loc',           url("/brand/" . $producer->slug)));
            $currentUrl->appendChild($base->createElement('lastmod',       Carbon::today()->format('Y-m-d')));
            $currentUrl->appendChild($base->createElement('changefreq',    'monthly'));
            $currentUrl->appendChild($base->createElement('priority',      '0.8'));
        }

        Storage::disk('mainPublic')->put('sitemap.xml', $base->saveXML($base->documentElement));
        return redirect()->back();
    }
}
