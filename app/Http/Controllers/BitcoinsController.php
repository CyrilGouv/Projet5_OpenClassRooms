<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bitcoin;

class BitcoinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);
        
        // Récupération des longitudes et latitudes de l'adresse
        $param = [
            'address' => $request->address
        ];

        $response = \Geocoder::geocode('json', $param);
        $location = json_decode($response);

        if ($location->status === 'OK') {
            // Creation de notre new boutique
            $bitcoin = new Bitcoin;
            $bitcoin->name        = $request->name;
            $bitcoin->address     = $location->results[0]->formatted_address;
            $bitcoin->lat         = $location->results[0]->geometry->location->lat;
            $bitcoin->lng         = $location->results[0]->geometry->location->lng;
            $bitcoin->description = $request->description;
            $bitcoin->website     = $request->website;
            $bitcoin->email       = $request->email;
            $bitcoin->phone       = $request->phone;
            $bitcoin->facebook    = $request->facebook;
            $bitcoin->twitter     = $request->twitter;
            $bitcoin->instagram   = $request->instagram;

            $bitcoin->save();
            return redirect(route('admin'));
        }
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
