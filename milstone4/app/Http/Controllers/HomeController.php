<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Api;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function apis(){
        $apis = Api::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();

        return view('pages.api', compact('apis'));
    }

    public function createApi(Request $request){

        try {

            $user = auth()->user();
    
            if($user->api->count()) throw new \Exception('Api key already created!');

            $input = $request->all();
    
            $input['hash'] = sha1($input['words']);
    
            $user->api()->create($input);
    
            return back()->with('success', 'Api Created');
        } catch (\Exception $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function deleteApi(Api $api){
        $api->delete();

        return back()->with('success', 'Api is deleted!');
    }
}
