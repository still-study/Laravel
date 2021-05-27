<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;



class XmlParserController extends Controller
{
    public function index()
    {
        $xml = XmlParser::load('https://news.yandex.ru/politics.rss');
        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'description' => ['uses' => 'channel.description'],
            'link' => ['uses' => 'channel.link'],
            'news' => ['uses' => 'channel.item[title,link,guid,description,pubDate]'],
        ]);
//        dd($data);
        return $data;
    }
}
