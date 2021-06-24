<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientStatus;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ClientController extends Controller
{
    public function __construct()
    {
        View::share(['clientStatus' => ClientStatus::all()]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        View::share(['clients' => Client::paginate()]);
        return view('admin.client.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        View::share(['countries' => Country::all()]);
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->fname = $request->fname;
        $client->mname = $request->mname;
        $client->bid = $request->bid;
        $client->dob = $request->dob;
        $client->nid = $request->nid;
        $client->passport = $request->passport;
        if ($request->file('image') !== null) {
            $client->image = $request->file('image')->store('public/client');
        }
        $client->preferred_country = $request->preferred_country;
        $client->address = $request->address;
        $client->save();

        return redirect()->route('admin.client.show', $client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin.client.show')->withClient($client)->withPreferredContry(Country::find($client->preferred_country));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        View::share(['countries' => Country::all()]);
        return view('admin.client.edit')->withClient($client)->withPreferredContry(Country::find($client->preferred_country));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->fname = $request->fname;
        $client->mname = $request->mname;
        $client->bid = $request->bid;
        $client->dob = $request->dob;
        $client->nid = $request->nid;
        $client->passport = $request->passport;
        if ($request->file('image') !== null) {
            $client->image = $request->file('image')->store('public/client');
        }
        $client->preferred_country = $request->preferred_country;
        $client->address = $request->address;
        $client->status = $request->status;
        $client->save();

        return redirect()->route('admin.client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.client.index');
    }
}
