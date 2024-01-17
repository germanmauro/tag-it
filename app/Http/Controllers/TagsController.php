<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
        return view("tags.index", compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->surname = $request->surname;
        $tag->email = $request->email;
        $tag->whatsapp = $request->whatsapp;
        $tag->save();
        $tag->hash = substr(Crypt::encryptString($tag->id), 0, 15);
        while (Tag::where('hash',$tag->hash)->count() > 0) {
            $tag->hash = substr(Crypt::encryptString($tag->id), 0, 15);
        }
        
        $tag->save();


        return redirect("/tags")->with("success", "Registro generado correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function info(string $hash)
    {
        $tag = Tag::where('hash',$hash)->first();
        if($tag->used == 0)
            return view('tags.edit_info', compact("tag"));
        $telephone = $tag->whatsapp;
        return view('tags.send_message', compact('telephone'));
    }

    public function update_info(Request $request, Tag $tag)
    {
        $tag->name = $request->name;
        $tag->surname = $request->surname;
        $tag->whatsapp = $request->whatsapp;
        $tag->email = $request->email;
        $tag->used = 1;
        $tag->save();

        return redirect("/")->with("success", "Registro actualizado correctamente");
        ;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.update', compact("tag"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $tag->name = $request->name;
        $tag->surname = $request->surname;
        $tag->whatsapp = $request->whatsapp;
        $tag->email = $request->email;
        $tag->save();

        return redirect("/tags")->with("success", "Registro actualizado correctamente");
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Tag $tag)
    {
        return view('tags.delete', compact("tag"));
    }

    public function destroy(Tag $tag)
    {
        $tag->name = "";
        $tag->surname = "";
        $tag->email = "";
        $tag->whatsapp = "";
        $tag->used = 0;
        $tag->save();

        return redirect("/tags")->with("success", "Tag blanqueado correctamente");
    }
}
