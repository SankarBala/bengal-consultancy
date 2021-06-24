<?php

namespace App\Http\Controllers;

use App\Models\ClientStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ClientStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientStatus = ClientStatus::all();

        return  view('admin.clientStatus.index')->withClientStatus($clientStatus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientStatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientStatus = new ClientStatus();
        $clientStatus->title = $request->title;
        $clientStatus->description = $request->description;
        $clientStatus->color = $request->color;
        $clientStatus->save();
        return redirect()->route('admin.client-status.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ClientStatus $clientStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientStatus $clientStatus)
    {
        View::share(['clientStatus' => $clientStatus]);
       return  view('admin.clientStatus.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientStatus $clientStatus)
    {
        $clientStatus->title = $request->title;
        $clientStatus->description = $request->description;
        $clientStatus->color = $request->color;
        $clientStatus->save();
        return redirect()->route('admin.client-status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientStatus $clientStatus)
    {
        $clientStatus->delete();
        return redirect()->route('admin.client-status.index');
    }
}
