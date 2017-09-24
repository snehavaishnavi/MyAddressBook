<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Address;

class AddressesController extends Controller
{
    public function displayAddresses()
    {
        $addresses = Address::all();

        
        if($addresses->count()){
            return view('welcome',compact('addresses'));
        }else{
            $message="search not found";
           return view('welcome',compact('message'));
        }
    }

    public function store()
    {
        $address= new Address;
        $address->Name=request('name');
        $address->Address_1=request('address1');
        $address->Address_2=request('address2');
        $address->City=request('city');
        $address->State=request('state');
        $address->ZipCode=request('zipcode');
        if(!is_null($address->Name)){
              $address->save();
        }
        $message="Address saved to Address Book";
        return back()->with('message',$message);
    }
    public function update($id){
        $address= Address::find($id);
        $address->Name=request('name');
        $address->Address_1=request('address1');
        $address->Address_2=request('address2');
        $address->City=request('city');
        $address->State=request('state');
        $address->ZipCode=request('zipcode');
        if(!is_null($address->Name)){
              $address->save();
        }
        $message="Address Edited";
        return back()->with('message',$message);
    }
    public function delete($id){

        $address= Address::find($id);
        $address->delete();
        $message="Address deleted";
        return back()->with('message',$message);
    }
    public function sort($id)
    {
        if($id=="name"){
            $addresses=Address::orderBy('Name')->get();
             return back()->with('addresses',$addresses);

        }
        else if($id=="city"){
            $addresses=Address::orderBy('City')->get();
            return back()->with('addresses',$addresses);
        }
        else if($id=="state"){
            $addresses=Address::orderBy('State')->get();
             return back()->with('addresses',$addresses);
        }
        return redirect('/');
    }
    public function search()
    {
        $search=request('search');
        $addresses = Address::where('Name','LIKE', "%$search%")->orWhere('City','LIKE', "%$search%")->orWhere('State','LIKE', "%$search%")->orWhere('Address_1','LIKE', "%$search%")->orWhere('Address_2','LIKE', "%$search%")->get();
        if($addresses->count()){
            return back()->with('addresses',$addresses);
        }else{
            $message="search not found";
            return back()->with('message',$message);
        }
    }
}
