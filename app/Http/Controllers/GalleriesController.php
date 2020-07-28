<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Galleries;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\http\Requests\Galleries\CreateGalleryRequest;

class GalleriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('VerifyCategoriesCount')->only(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(REQUEST $request)
    {

        $search = $request->query('search');
            if($search){
                $galleries = Galleries::where('title','LIKE', "%{$search}%")->simplePaginate(3);
            }
            else{
                $galleries = Galleries::simplePaginate(3);
            }
           /// $galleries = Galleries::all();
          return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryResults = \App\Category::all();
        //dd($categoryResult);

        return view('admin.galleries.create', compact('categoryResults'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGalleryRequest $request)
    {
        $cover = $request->file('image');
        if ($request->hasFile('image'))
        {
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('gallery')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

            $image = $cover->getFilename() . '.' . $extension;
          }
            $gallery = Galleries::create([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'image' =>$image,
                'published_at' => $request->published_at,
                // 'thumbnail' => $thumbnail

            ]);

            session()->flash('success', 'Inserted successfully');

            // return redirect(route('galleries.index'));
            return redirect()->back();
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
        //
    }
}
