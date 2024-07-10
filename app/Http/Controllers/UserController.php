<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }
    
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        return $request->all();
    }

    public function show(String $id){
        $data['id'] = $id;
        return view('user.show', $id);
    }

    public function edit(String $id){
        $data['id'] = $id;
        return view('user.edit', $data);
    }

    public function update(Request $request){
        return $request->all();
    }

    public function destroy(string $id){
        return 'Delete data with th id of' . $id;
    }
}
