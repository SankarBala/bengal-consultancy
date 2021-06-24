<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();

        return  view('admin.countries.index')->withCountries($countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'country' => [
                'required',
                'string'
            ]
        ]);


        $country = new Country();

        if ($request->file('flag') !== null) {
            $country->national_flag = $request->file('flag')->store('public/uploads');
        }
        if ($request->file('banner') !== null) {
            $country->banner = $request->file('banner')->store('public/uploads');
        }

        $country->name = $request->country;
        $country->content = $request->content;
        $country->status = $request->status;

        $country->save();

        return redirect()->route('admin.country.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        // return  view('admin.countries.show');

        return $country;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return  view('admin.countries.edit')->withCountry($country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {

        if ($request->file('flag') !== null) {
            $country->national_flag = $request->file('flag')->store('public/uploads');
        }
        if ($request->file('banner') !== null) {
            $country->banner = $request->file('banner')->store('public/uploads');
        }

        $country->name = $request->country;
        $country->content = $request->content;
        $country->status = $request->status;

        $country->save();
        return redirect()->route('admin.country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('admin.country.index');
    }
}
