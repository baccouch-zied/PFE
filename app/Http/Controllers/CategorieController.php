<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= categorie::all();
        return view('back.restaurant.categorie.ListeCategorie', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.restaurant.categorie.addCategorie');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'    =>  'required',
            'image'         =>  'required',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'nom'       =>   $request->nom,
            'image'            =>   $new_name,

        );

        categorie::create($form_data);

        return redirect('categorie')->with('success', 'Data Added successfully.');
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
    public function edit(Categorie $categorie)
    {
        $categories= categorie::all();
        return view('back.restaurant.categorie.editCategorie', compact('categorie'));
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
        $image_name = $request->hidden_image;

        $image = $request->file('image');

        if($image != '')
        {
            $request->validate([
                'nom'    =>  'required',
                'image'    =>  'image|max:2048'


            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('images'), $image_name);

        }
        else
        {
            $request->validate([
                'nom'    =>  'required',
                'description' => 'required'
            ]);
        }

        $form_data = array(
            'nom'       =>   $request->nom,
            'image'            =>   $image_name

        );
  
        categorie::whereId($id)->update($form_data);

        return redirect('categorie')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categoriefor)
    {
        $categorie->delete();
        return redirect('/categorie');
    }
}
