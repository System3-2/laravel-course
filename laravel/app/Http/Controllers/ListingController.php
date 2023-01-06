<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        // dd(request(['search']));
        // show all listings
        return view('listings.index', [
            'heading' => 'Latest Listings',
            // 'listings' => Listing::latest()->filter(request(['tag']))->get(),
            'listings' => Listing::latest()->filter(request(['search']))->get(),

        ]);
    }

    public function show(Listing $listing)
    {
        // show single listings
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create()
    {
        return view('listings.create', []);
    }
}
