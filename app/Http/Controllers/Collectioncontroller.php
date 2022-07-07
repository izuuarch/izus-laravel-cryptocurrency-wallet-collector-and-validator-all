<?php

namespace App\Http\Controllers;

use App\Models\collection;
use Illuminate\Http\Request;

class Collectioncontroller extends Controller
{
    public function index(){
        return view('user.home');
    }
    public function create(){
        $collections = collection::all();
        $grab = new \GuzzleHttp\Client();
        $request = $grab->get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd');
        $getcoins = $request->getBody()->getContents();
        $coins = json_decode($getcoins);
        return view('user.dashboard.createcollection',[
            'coins'=>$coins,
            'collections'=>$collections
        ]);
    }
    public function createcollection(Request $request){
        $this->validate($request, [
            'collection_name' => 'required|string',
        ]);
        $getid = "hdbhvksdjndohngrrnhfbjfoebhfgrbufrehjgfbgruhgijebgbekuehrgbheirknguuerkngergnure738389399487575894949303020293747567585960070808726526132543856978099098463648596798098985634232232634875869679324263734854960708090965746352372829495890809097574523424326859709090807573524";
           $getrandid = substr(str_shuffle($getid), 0 , 7);
           $collectedids = $getrandid;
        $collection = new collection;
        $collection->collectionname = $request->collection_name;
        $collection->collectionid = $collectedids;
        $collection->save();
        return redirect('/user/create')->with('success',"Collection created successfully");
    }
}
