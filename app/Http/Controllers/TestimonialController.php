<?php

namespace App\Http\Controllers;
use  App\model\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateTestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "Hi";
        $testimonials_all = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTestimonialRequest $request)
    {
      //  dd($request->all());
        $insert_testimonial = Testimonial::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $image ??  "not found"
        ]);
        return [
            'ok'=>true,
            'message' =>"Inserted succefully"
        ];
        return [
            'ok' =>false,
            'message' =>"unable to insert"
        ];
        $cover = $request->file('image');
        // enctype = "multipart/form-data" use file glbal parameter working
        // if($request->hasFile('image'))
        // {
        //     $extension = $cover->getClientOriginalExtension();
        //     Storage::disk('gallery')->put($cover->getFilename() . '.' . $extension,  File::get($cover));
        //     $image = $cover->getFilename() . '.' . $extension;

        //     $insert_testimonial = Testimonial::create([
        //         'title' => $request->title,
        //         'description' => $request->description,
        //         'category' => $request->category,
        //         'image' => $image ??  "not found"
        //     ]);
        //     return [
        //         'ok'=>true,
        //         'message' =>"Inserted succefully"
        //     ];
        //     return [
        //         'ok' =>false,
        //         'message' =>"unable to insert"
        //     ];
        //     // session()->flash('success', 'Inserted successfully');
        //     // return redirect()->back();

        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    public function deleted(Request $request)
    {
            try {
                $id = $request->myid;
                $test_delete = \DB::table('testimonials')->where('id',$id)->delete();
                return [
                    'okay' =>true,
                    'message' =>'Testimonial deleted'
                ];
            } catch (\Throwable $th) {
                //throw $th;

            }

    }
}
