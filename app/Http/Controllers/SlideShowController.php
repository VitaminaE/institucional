<?php

namespace App\Http\Controllers;

use App\Foto;
use App\Http\Requests\SlideShowRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SlideShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $images = Foto::all();

        return view('slideshow.index')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('slideshow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SlideShowRequest $request)
    {
        // The destination path for the uploaded images
        if(!$request->file('imagem')->isValid()){
            return back()->withErrors([
                'failed' => 'Something went worng. The file could not be
                uploaded correctly'
            ]);
        }

        // Set a random number as a name for the image in server
        $file_name = rand(11111,99999).'.'.$request->file('imagem')->getClientOriginalExtension();
        $destinationPath = public_path().'/images';
        $request->file('imagem')->move($destinationPath, $file_name);

        $parameters = [
            'original_name' => $request->file('imagem')->getClientOriginalName(), // The original name to be displayed for the user
            'file_name' => $file_name, // The file name in server
            'description' => $request->input('descricao')
        ];

        Foto::create($parameters);

        return back()->with('message', 'Image uploaded with success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $image = Foto::findOrFail($id);

        return view('slideshow.show')->with('image', $image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $foto = Foto::find($id);

        if(!is_null($foto)){
            return response()->json(true);
        }
        else{
            return response()->json(false);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
//        Foto::findOrFail($id)->delete();

        return response()->json(true);
    }

    public function changeOptions(Request $request)
    {
        $this->validate($request, [
            'slide_speed' => 'required|numeric'
        ]);

        $slide_time = 1000 * $request->slide_speed;
        dd($slide_time);

        return back();
    }
}
