<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class ConfigController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        try {
            $user = auth()->user();
    
            if(!$api = $user->api->first()) throw new \Exception('Please create an api first');

            $configs = Configuration::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

            return view('pages.config', compact('api', 'configs'));

        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }

    }

    public function store(Request $request){
        try {
            
            $user = auth()->user();
            
            $input = $request->all();

            $input['finger_print'] = rand(0, 15000);

            $input['ppk'] = hash("sha256",$input['signature_data']);


            if(!$user->config()->create($input)) throw new \Exception('Something went wrong! Try again.');

            return back()->with('success', 'Configuration saved.');

            
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }


    public function delete(Configuration $config){
        
        $config->delete();

        return back()->with('success', 'Configuration deleted successfully.');
    }
}
