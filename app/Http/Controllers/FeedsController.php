<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Feedback;
use App\user;
use App\UserRestaurant;
use Auth;
class FeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $feedback= DB::table('feedback')->where('user_id' ,'=' ,$id)->get();
        return view('back.restaurant.feeds.index', compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.restaurant.feeds.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=Auth::user()->id;
        $request->validate([
            'nom'    =>  'required',
            'feed'    =>  'required',
            'date'    =>  'required',
        ]);
     

        $form_data = array(
            'nom'       =>   $request->nom,
            'feed'       =>   $request->feed,
            'date'       =>   $request->date,

            'user_id' =>$id
        );

        feedback::create($form_data);

        return redirect('feedback')->with('success', 'Votre feed est ajouté avec sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
