<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Item;
use App\Models\Genre;
use VIPSoft\Unzip\Unzip;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::orderBy('id','DESC')->get();
        return view('backend.item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('backend.item.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      
        $request->validate([
            'name' => 'required',
            'file' => 'required|file|mimes:zip',
            'thumbnail' => 'required|file|mimes:jpg,jpeg,bmp,png',
            'preview' => 'required|file|mimes:jpg,jpeg,bmp,png',
            'subcategory' => 'required',
            'genre' => 'required',
            'version' => 'required',
            'url' => 'required|active_url',
            'responsive' => 'required',
            'tag' => 'required',
            'status' => 'required',
            'message' => 'required'
        ]);

        //zip file
        $fileName = time().'.'.$request->file->extension();  
        
        $path = $request->file->storeAs('zipfile',$fileName,'public');
       // $path= $request->file->move(public_path('zipfile'), $fileName);
        
        //thumbnail
        $thumbnailName = time().'.'.$request->thumbnail->extension();

        $thumbnailpath = $request->thumbnail->storeAs('thumbnail',$thumbnailName,'public');
        //$thumbnailpath = $request->thumbnail->move(public_path('thumbnail'),$thumbnailName);

        //preview
        $previewName = time().'.'.$request->preview->extension();

        $previewpath  = $request->preview->storeAs('preview',$previewName,'public');
       // $previewpath = $request->preview->move(public_path('preview'),$previewName);

        /* Store $fileName name in DATABASE from HERE */
        $item = new Item();
        $item->name = request('name');
        $item->zipfile = $fileName;
        $item->thumbnail = $thumbnailName;
        $item->previews = $previewName;
        $item->subcategory_id = request('subcategory');
        $item->author_id = 1;
        $item->genre_id = request('genre');
        $item->version = request('version');
        $item->demoUrl = request('url');
        $item->responsive = request('responsive');
        $item->tag = request('tag');
        if($request->status == 'Premium')
        {
            $request->validate([
                'pricetype' => 'required',
                'price' => 'required',
            ]);
            $item->status = $request->status;
            $item->price = request('price');
            $item->price_type = request('pricetype');
        }else{
            $item->status = $request->status;
        }
        
        $item->message = request('message');
        $item->save();
        
        $unzipper  = new Unzip();
  
        $filenames = $unzipper->extract(storage_path('app/public/'.$path),storage_path('app/public/zipfile/'));

        return redirect()->route('item.index')->with('msg','Item Successfully added'); 
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

    public function itemtype(Request $request)
    {
        $request->validate(['type'=>'required']);
        $type = $request->type;
        $category = Category::find($type);

        $subcategories = Subcategory::where('category_id',$type)->get();
        $genres = Genre::all();

        return view('backend.item.uploadform',compact('category','subcategories','genres'));
    }
}
