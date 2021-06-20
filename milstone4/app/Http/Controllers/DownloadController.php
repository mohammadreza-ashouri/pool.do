<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;

class DownloadController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $downloads = Download::orderBy('created_at', 'desc')->get();
        return view('pages.download', compact('downloads'));
    }
}
