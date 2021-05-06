<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $date;

    public function __construct()
    {
        $this->date = date('l jS \of F Y h:i:s A');
    }

    public function index()
    {
        return view('dashboard', ['date' => $this->date]);
    }

    public function about()
    {
        return view('about');
    }
}
