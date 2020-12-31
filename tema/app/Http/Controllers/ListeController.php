<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Liste;
use Illuminate\Http\Request;

class ListeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = auth()->user()->id; // Giriş yapmış olan kullanıcının id'sini veriyor.

        $user = User::find($user_id); // Giriş yapmış kullanıcıyı getiriyor.

        return view('posts.index', [
        'liste' => $user ->liste
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id; // Giriş yapmış olan kullanıcının id'sini veriyor.

        $user = User::find($user_id); // Giriş yapmış kullanıcıyı getiriyor.

        $user->liste()->create($request->all()); // İlişkiyi kullanarak requestten gelen bütün istekleri veritabanında yeni bir kayıt olarak oluşturuyor. Tek satırda iş bitiyor.
        return redirect('post');

    }

    public function show($liste)
    {
        //
    }

    public function edit($liste)
    {
        $data = Liste::find($liste);
        return view('posts.edit',compact('data'));
    }

    public function update(Request $request, $liste)
    {
        $data = Liste::find($liste);
        $data->title=$request->input('title');
        $data->description=$request->input('description');
        $data->save();

        return redirect('post');
    }

    public function destroy($liste)
    {
        $data = Liste::find($liste);
        $data->delete();
        return redirect('post');
    }
}
