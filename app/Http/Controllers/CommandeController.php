<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commande;
use App\UserRestaurant;
use App\Client;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $Client= DB::table('clients')->where('user_id' ,$id)->get();
        return view('front.commande.details-commande',compact('Client'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validatedData = request()->validate([
            'name' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'adresse' => 'required',
            'heure' => 'required',
            'produits' => 'required',
            'commentaire' => 'required'
        ]);

            $commande = new Commande;
                $commande ->name = request('name');
                $commande ->prenom = request('prenom'); 
                $commande ->telephone = request('telephone'); 
                $commande ->email = request('email'); 
                $commande ->adresse = request('adresse'); 
                $commande ->heure = request('heure'); 
                $commande ->commentaire = request('commentaire'); 

                $produits = [];
                $i= 0;
                foreach(Cart::content() as $produit)
                {
                    $produits['produit_' . $i][] = $produit->model->name;
                    $produits['produit_' . $i][] = $produit->model->price;
                    $produits['produit_' . $i][] = $produit->model->subtotal;
                    $i++;
                }

                $commande->produits = serialize($produits);

            $commande->save();
            commande::create($validatedData);          
            return redirect('/fini-commande')->with('success', 'Votre categorie est ajouté avec sucess');


           /* $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'adresse' => 'required',
            'heure' => 'required',
            'produits' => 'required',
            'commentaire' => 'required'
            ]);

            $form_data = array(
                'name' => $request->name,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'adresse' => $request->adresse,
                'heure' => $request->heure,
                'commentaire' => $request->commentaire,
                $produits = [];
                $i= 0;
                foreach(Cart::content() as $produit)
                {
                    $produits['produit_' . $i][] = $produit->name;
                    $produits['produit_' . $i][] = $produit->price;
                    $produits['produit_' . $i][] = $produit->subtotal;
                    $i++;
                }

                $commande->produits = serialize($produits);
                'produits' => $request->produits
            );

            commande::create($form_data);
    
            return redirect('fini-commande')->with('success', 'Votre categorie est ajouté avec sucess');*/
        }

    public function fini()
    {
        return view('front.commande.fini-commande');
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
