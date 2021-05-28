<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Item;
use App\Models\Genre;
use VIPSoft\Unzip\Unzip;
use ZipArchive;
use App\Models\Browser;
use App\Models\Language;

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
     // dd($request->languages);
     //dd($request->browsers);
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

        $zipfilepath = "/storage/".$path;
       // $path= $request->file->move(public_path('zipfile'), $fileName);
        
        //thumbnail
        $thumbnailName = time().'.'.$request->thumbnail->extension();

        $thumbnailpath = $request->thumbnail->storeAs('thumbnail',$thumbnailName,'public');

        $thumbnailfilepath = "/storage/".$thumbnailpath;
        //$thumbnailpath = $request->thumbnail->move(public_path('thumbnail'),$thumbnailName);

        //preview
        $previewName = time().'.'.$request->preview->extension();

        $previewpath  = $request->preview->storeAs('preview',$previewName,'public');

        $previewfilepath = "/storage/".$previewpath;
       // $previewpath = $request->preview->move(public_path('preview'),$previewName);

   // echo 'ok';
       
        $za = new ZipArchive();

        $za->open(storage_path('app/public/zipfile/') . $fileName);

        $za->extractTo(storage_path('app/public/zipfile/').time().'/');
        //$za->close();
 $stat1 = $za->statIndex(0 ); 
//dd(basename($stat['name']));
        $tt  =  '';
        for( $i = 0; $i < $za->numFiles; $i++ ){ 
    $stat = $za->statIndex( $i ); 
    if(basename( $stat['name'] ) == 'index.html'){
        $tt = 'test';
        break;
    }
}
if($tt == 'test'){
    $urll = '/storage/zipfile/'.time().'/'.basename($stat1['name']).'/index.html';
    $item = new Item();
        $item->name = request('name');
        $item->zipfile = $zipfilepath;
        $item->thumbnail = $thumbnailfilepath;
        $item->previews = $previewfilepath;
        $item->subcategory_id = request('subcategory');
        $item->author_id = 1;
        $item->genre_id = request('genre');
        $item->version = request('version');
        /*$item->demoUrl = request('url');*/
        $item->demoUrl = $urll;
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

        $item->languages()->attach(request('languages'));

        $item->browsers()->attach(request('browsers'));

        return redirect()->route('item.index')->with('msg','Item Successfully added'); 
    }else{
        return redirect()->back();
    }

/*if( basename( $stat['name'] ) . PHP_EOL != 'index.html'){
        return redirect()->back();
    } else{
        $za->close();
        $item = new Item();
        $item->name = request('name');
        $item->zipfile = $zipfilepath;
        $item->thumbnail = $thumbnailfilepath;
        $item->previews = $previewfilepath;
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
        
    }*/
        /* Store $fileName name in DATABASE from HERE */
        
        
        // $unzipper  = new Unzip();
  
        // $filenames = $unzipper->extract(storage_path('app/public/zipfile/'.$fileName),storage_path('app/public/zipfile/'));

        

      //  return redirect()->route('item.index')->with('msg','Item Successfully added'); 
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
        $item = Item::find($id);

        return view('backend.item.show',compact('item'));
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
        $item = Item::find($id);
        $categories = Category::all();

        return view('backend.item.edit',compact('item','categories'));
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
     
        $request->validate([
            'name' => 'required',
            'subcategory' => 'required',
            'genre' => 'required',
            'version' => 'required',
            'url' => 'required|active_url',
            'responsive' => 'required',
            'tag' => 'required',
            'status' => 'required',
            'message' => 'required'
        ]);

        $item = Item::find($id);

        if($request->hasfile('file')){
            $request->validate([
                 'file' => 'required|file|mimes:zip'
             ]);

            $file_path = public_path().$item->zipfile;
            unlink($file_path);

            //zip file
            $fileName = time().'.'.$request->file->extension();  
            
            $path = $request->file->storeAs('zipfile',$fileName,'public');

            $zipfilepath = "/storage/".$path;


            $unzipper  = new Unzip();
  
            $filenames = $unzipper->extract(storage_path('app/public/zipfile/'.$fileName),storage_path('app/public/zipfile/'));
        }else{

            $request->validate([
                'oldfile' => 'required'
            ]);

            $zipfilepath = $request->oldfile;
        }


        if($request->hasfile('thumbnail')){
            $request->validate([
                 'thumbnail' => 'required|file|mimes:jpg,jpeg,bmp,png'
             ]);

            $thumbnail_path = public_path().$item->thumbnail;
            unlink($thumbnail_path);

            //thumbnail
            $thumbnailName = time().'.'.$request->thumbnail->extension();

            $thumbnailpath = $request->thumbnail->storeAs('thumbnail',$thumbnailName,'public');

            $thumbnailfilepath = "/storage/".$thumbnailpath;

        }else{

            $request->validate([
                'oldthumbnail' => 'required'
            ]);

            $thumbnailfilepath = $request->oldthumbnail;
        }


        if($request->hasfile('preview')){
            $request->validate([
                  'preview' => 'required|file|mimes:jpg,jpeg,bmp,png'
             ]);

            $preview_path = public_path().$item->previews;
            unlink($preview_path);

            //preview
            $previewName = time().'.'.$request->preview->extension();

            $previewpath  = $request->preview->storeAs('preview',$previewName,'public');

            $previewfilepath = "/storage/".$previewpath;

        }else{

            $request->validate([
                'oldpreview' => 'required'
            ]);

            $previewfilepath = $request->oldpreview;
        }


        $item->name = request('name');
        $item->zipfile = $zipfilepath;
        $item->thumbnail = $thumbnailfilepath;
        $item->previews = $previewfilepath;
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
        

        return redirect()->route('item.index')->with('msg','Item Successfully updated'); 
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
        $item = Item::find($id);
        $file_path = public_path().$item->zipfile;
        unlink($file_path);
        $thumbnail_path = public_path().$item->thumbnail;
        unlink($thumbnail_path);
        $preview_path = public_path().$item->previews;
        unlink($preview_path);
        $item->delete();

        return redirect()->route('item.index')->with('msg','Item Successfully Deleted!');

    }

    public function itemtype(Request $request)
    {
        $request->validate(['type'=>'required']);
        $type = $request->type;
        $category = Category::find($type);

        $subcategories = Subcategory::where('category_id',$type)->get();
        $genres = Genre::all();
        $browsers = Browser::all();
        $languages = Language::all();

        return view('backend.item.uploadform',compact('category','subcategories','genres','browsers','languages'));
    }

    public function itemtypeedit(Request $request)
    {
        $request->validate(['type'=>'required','typeid'=>'required','cid' => 'required']);

        
        $type = $request->type;
        $cid = $request->cid;
        if($cid == $type){
            $item = Item::find($request->typeid);
            $category = Category::find($cid);
            $subcategories = Subcategory::where('category_id',$cid)->get();
            $itemid = [];
        }else{
            $item = [];
            $itemid = Item::find($request->typeid);
            $category = Category::find($type);

            $subcategories = Subcategory::where('category_id',$type)->get();
        }
        $genres = Genre::all();

        return view('backend.item.edituploadform',compact('category','subcategories','genres','item','itemid'));
    }
}
