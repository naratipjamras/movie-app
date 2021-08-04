<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowMovieController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $data= DB::table('movie')->where('id', '=', $id)->get();
        return view('showmovie',['data' => $data[0]]);
    }

    function show()
    {
        $data= Movie::all();
        $response = [
            'success' => true,
            'data'    => $data,
            'message' => 'yes',
        ];
        return response()->json($response, 200);
    }


}
