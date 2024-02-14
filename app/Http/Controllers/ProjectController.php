<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ProjectController extends Controller
{
    public function create()
    {
        return view('create_projet');
    }

    public function store(Request $request)
    {
        // Validez les données du formulaire

        $request->validate([
            // Ajoutez vos règles de validation ici
        ]);

        // Stockez l'image
        if ($request->hasFile('image')) {
            // Stockez l'image
            $imagePath = $request->file('image')->store('images');
        } else {
            // Gérez le cas où aucun fichier n'est envoyé
            // Vous pouvez rediriger l'utilisateur avec un message d'erreur, par exemple
            return redirect()->back()->with('error', 'Aucune image n\'a été envoyée.');
        }
    

        // Créez une nouvelle entrée dans la base de données
        Projet::create([
            'nom' => $request->nom,
            'template' => $request->template,
            'couleur_police' => $request->couleur_police,
            'couleur_background' => $request->couleur_background,
            'couleur_separation' => $request->couleur_separation,
            'image' => $imagePath, // Chemin de l'image
            'article' => $request->article
        ]);

        // Redirigez l'utilisateur où vous voulez
        return redirect()->route('home')->with('success', 'Projet créé avec succès!');
    }
}
