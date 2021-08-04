<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\Movies\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends BaseController
{

    protected $movie = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Movie $movie)
    {
        $this->middleware('auth:api');
        $this->movie = $movie;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = $this->movie->latest()->paginate(10);
        return $this->sendResponse($movies, 'Movie list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Movies\MovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $movie = $this->movie->create([
            'name' => $request->get('name'),
            'link' => $request->get('link'),
            'image' => $request->get('image'),
            'youtube' => $request->get('youtube'),
        ]);

        return $this->sendResponse($movie, 'Movie Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = $this->movie->findOrFail($id);

        return $this->sendResponse($movie, 'Movie Details');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, $id)
    {
        $movie = $this->movie->findOrFail($id);
        $movie->update($request->all());
        return $this->sendResponse($movie, 'Movie Information has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->authorize('isAdmin');

        $movie = $this->movie->findOrFail($id);

        $movie->delete();

        return $this->sendResponse($movie, 'Movie has been Deleted');
    }

    public function upload(Request $request)
    {
        $fileName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('upload'), $fileName);

        return response()->json(['success' => true]);
    }
}
