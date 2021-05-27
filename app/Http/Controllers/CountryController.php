<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('id','DESC')->get();
        return view('backend.country.index',compact('countries'));
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
        // dd($request);
        $request->validate([
            'name' => 'required',
            'logo' => 'required|mimes:jpeg,png,gif,svg',
        ]);

        if($request->hasfile('logo')){
            $name = time().'_'.$request->logo->getClientOriginalName();
            $filepath = $request->file('logo')->storeAs('country',$name,'public');
            $photo = "/storage/".$filepath;
         }

         $country = new Country;
         $country->name = $request->name;
         $country->logo = $photo;
         $country->save();
         return redirect()->route('country.index')->with('msg','Successfully added');
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
        $request->validate([
            'name' => 'required',
        ]);

        if($request->hasfile('newlogo')){
            $name = time().'_'.$request->newlogo->getClientOriginalName();
            $filepath = $request->file('newlogo')->storeAs('country',$name,'public');
            $photo = "/storage/".$filepath;
         }else{
            $photo = $request->oldlogo;
         }

         $country = Country::find($id);
         $country->name = $request->name;
         $country->logo = $photo;
         $country->save();
         return redirect()->route('country.index')->with('msg','Successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect()->route('country.index')->with('msg','Successfully deleted');
    }
}
