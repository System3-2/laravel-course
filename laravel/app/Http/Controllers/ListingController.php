<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        dd(request());
        // show all listings
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all(),

        ]);
    }

    public function show(Listing $listing)
    {
        // show alsingle listings
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
