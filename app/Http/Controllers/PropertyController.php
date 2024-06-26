<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyEnquire;
use App\Mail\EnquireEmail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\ProcessEnquireEmail;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

//--------------------------- Property Search bar ------------------------------------------------
    public function index(Request $request) {

        $latest_properties = Property::latest();
        $locations = Location::select(['id', 'name'])->get();

        if(!empty($request->sale)) {
            $latest_properties = $latest_properties->where('sale', $request->sale);
        }

        if(!empty($request->location)) {
            $latest_properties = $latest_properties->where('location_id', $request->location);
        }

        if(!empty($request->type)) {
            $latest_properties = $latest_properties->where('type', $request->type);
        }

        if(!empty($request->price)) {
            if($request->price == '50000+') {
                $latest_properties = $latest_properties->where('price', '>', 50000);
            }
            elseif($request->price == '50000') {
                $latest_properties = $latest_properties->where('price', '>', 40000)->where('price', '<=', 50000);
            }
            elseif($request->price == '40000') {
                $latest_properties = $latest_properties->where('price', '>', 30000)->where('price', '<=', 40000);
            }
            elseif($request->price == '30000') {
                $latest_properties = $latest_properties->where('price', '>', 20000)->where('price', '<=', 30000);
            }
            elseif($request->price == '20000') {
                $latest_properties = $latest_properties->where('price', '>', 10000)->where('price', '<=', 20000);
            }
            else {
                $latest_properties = $latest_properties->where('price', '>', 0)->where('price', '<=', 10000);
            }
        }

        if(!empty($request->bedrooms)) {
            $latest_properties = $latest_properties->where('bedrooms', $request->bedrooms);
        }

        if(!empty($request->property_name)) {
            $latest_properties = $latest_properties->where('name', 'LIKE', '%'. $request->property_name .'%');
        }


        $latest_properties = $latest_properties->paginate(12);

        return view('property.index', ['latest_properties' => $latest_properties, 'locations' => $locations]);
    }


//--------------------------- asking signs by user ------------------------------------------------
    public function enquire(Request $request, $propertyID)
    {
        $request->validate([
            'name'  => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'email' => ['email', 'required', 'max:255'],
            'message' => ['required', 'max:255']
        ]);

        // $request->message .= '\nThis message was sent from '. route('property.show',$propertyID) . ' website.';

        PropertyEnquire::create([
            // 'contract_address' => $request->contract_address
            'name'  => $request->name,
            'phone'  => $request->phone,
            'email'  => $request->email,
            'message'  => $request->message . '\r\n This message was sent from '. route('property.show',$propertyID) . ' website.',
        ]);

        // Send User & Admin mail/message
        $data = [$request->all(), 'propertyURL' => route('property.show', $propertyID)];

        // Send User & Admin mail/message via Queue
        ProcessEnquireEmail::dispatch($data);
        // Mail::send(new EnquireEmail($data));     // Send User & Admin mail/message via normal way

        return redirect()->back()->with(['message'=>'Message sent successfully']);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

//--------------------------- Single/individual Property Show(frontend) ------------------------------------------------
    public function show($id)
    {
        //$property = Property::with('gallery', 'location')->findOrFail($id);  // Find Property by id

        $property = Property::findOrFail($id);
        //dd($property->gallery());
        return view('property.single')->with('property', $property);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
