<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfilController;


class ProfilController extends Controller
{
    public function show(User $user){
        
        
        return view('profil.show', compact('user'));

    }
    public function edit(User $user){
        
        return view('profil.edit', compact('user'));
        
    }
    public function update(User $user){
        
        ruquest()->validate([
            'name' => 'require',
            'email' => 'require'
        ]);
        
    }
}
