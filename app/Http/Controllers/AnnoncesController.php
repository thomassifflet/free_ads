<?php

namespace App\Http\Controllers;

use App\Annonces;
use App\Image;
use App\Images;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Input;


class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Annonces $user)
    {
        $user = $user->user;
        $annonces = Annonces::latest()->get();
        return view('Annonces.index', compact('annonces', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('Annonces.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Annonces $annonces, User $user)
    {
        $this->validate(request(), [
            'titre' => 'required|min:5',
            'description' => 'required|min:5',
            'prix' => 'required|min:2'
        ]);

        $annonce = Annonces::create(request(['titre', 'description', 'prix', $user->id]));
        $images = Input::file('images');
        foreach ($images as $image)
        {
            $filename = $image->getClientOriginalName();
            Image::create([
                'filepath' => $filename,
                'annonces_id' => $annonce->id
            ]);
            $image->move(public_path(). '/images', $filename);
        }
        return redirect('/annonces')->with('success', 'Annonce creee avec succes.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonces  $annonces
     * @return \Illuminate\Http\Response
     */
    public function show(Annonces $annonce)
    {
        return view('Annonces.show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonces  $annonces
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonces $annonce)
    {
        return view('Annonces.edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonces  $annonces
     * @return \Illuminate\Http\Response
     */
    public function update(Annonces $annonce)
    {
        $this->validate(request(),[
            'titre' => 'required',
            'description' => 'required'
        ]);

        $annonce->update(request(['titre', 'description', 'prix']));
        return redirect('annonces')->with('success', 'Annonce mise a jour correctement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonces  $annonces
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Annonces::find($id)->delete();
        return redirect('annonces')->with('success', 'Annonce supprimee');
    }


    public function search(Request $request)
    {
        if (Annonces::filter($request->all())->get() != "")
        {
            $result = Annonces::filter($request->all())->get();
            return view('Annonces.searchresults', compact('result'));
        }
        else
        {
            $result = Annonces::filter($request->all())->get();
            return view('Annonces.searchresults', compact('result'))->with('error', 'Aucun resultat trouve.');
        }
    }

}
