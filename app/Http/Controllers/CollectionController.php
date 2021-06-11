<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Auth;
use Carbon;


class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tab = 2;
        $request->validate([
            'name'=>'required',
            'description' => 'min:0|max:100',
        ]);


        $collections = Collection::where('user_id',Auth::id())->orderBy('id','DESC')->get();

        if(count($collections)>0){
            if($collections[0]->sorting){
                $sorting = $collections[0]->sorting+1;
            }else{
                $sorting = 1;
            }
        }else{
            $sorting = 1;
        }

        $collection = new Collection;
        $collection->title = $request->name;
        $collection->description = $request->description;
        $collection->sorting = $sorting;
        $collection->user_id = Auth::id();
        $collection->save();
        return $tab;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        $tab = 2;
        $request->validate([
            'name'=>'required',
            'description' => 'min:0|max:100',
        ]);

        $collection = Collection::find($request->id);
        $collection->title = $request->name;
        $collection->description = $request->description;
        $collection->save();
        return $tab;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection ,Request $request)
    {
        $collection = Collection::find($request->id);
        $collection->delete();
        foreach($collection->items as $item){
            // echo($item->pivot);
            $item->pivot->deleted_at = Carbon\Carbon::today();
            $item->pivot->save();
        }
        return "ok";
    }
}
