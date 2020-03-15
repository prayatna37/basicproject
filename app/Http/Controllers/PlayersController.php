<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;


class PlayersController extends Controller

{
    public function index(){
        return view('add');
    }

    public function store(){

        $player = new Player();
        $player->name = request('name');
        $player->age= request('age');
        $player->value= request('value');
        $player->save();
        return redirect('/add');

    }

    public function show(){
        $players=Player::all();
//        $players=Player::orderBy('id', 'desc');
        return view('frontend.show')->with('players',$players);
    }

    public function destroy($id){
//        dd($player);
       $deleteplayer= Player::find($id);
       $deleteplayer->delete();
       return redirect('/show')->with('success','Delete Successful');



    }
    public function details($id){
        $findplayer=Player::find($id);
        return view('frontend.update')->with('player',$findplayer);
    }

    public function update( Request $request, $id){
        $updateplayer=Player::find($id);    //request can also be done in alother way like done in store
        $updateplayer->age=$request->get('age');
        $updateplayer->value=$request->get('value');
        $updateplayer->save();
        if ($updateplayer){
            return redirect('/show')->with('success','Updated Successfully');
        }
            return redirect('/show');
//

    }


}
