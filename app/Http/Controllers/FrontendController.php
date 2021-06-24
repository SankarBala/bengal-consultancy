<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Country;
use App\Models\Query;
use App\Models\Subscription;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{

    public function __construct()
    {
        View::share('countries', Country::where('status', 'published')->get());
    }

    
    public function index()
    {
        return view('frontend.index');
    }
    public function aboutUs()
    {
        return view('frontend.about');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function country(Country $country)
    {
        View::share('sCountry', $country);
        return view('frontend.country');
    }

    public function postQuery(Request $request){

        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->message = $request->message;
        $query->country = $request->country;
        $query->save();

        Session::flash('message', 'Your query has been saved successfully');

        return redirect()->back();
    }

    public function subscription(Request $request){
        $subscription = new Subscription();
        $subscription->email = $request->email;
        $subscription->save();

        Session::message('Subscription successfull');

        return back();

    }
}
