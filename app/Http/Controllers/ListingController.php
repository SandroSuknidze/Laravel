<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    public function index() {
        return view('listings.index', [
            'listings' => Listings::latest()->filter(request(['tags', 'search']))->paginate(8)
        ]);
    }

    public function show(Listings $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create() {
        return view('listings.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listings::create($formFields);


        return redirect('/')->with('message', 'Gig has been created!');
    }

    public function edit(Listings $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }


    public function update(Request $request, Listings $listing) {
        
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unathorized Action');
        }
        
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $listing->update($formFields);


        return back()->with('message', 'Gig has been updated!');
    }

    public function destroy(Listings $listing) { 
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unathorized Action');
        } 
        $listing->delete();
        return redirect('/')->with('message', 'Gig has been deleted!');
    }


    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
    
}