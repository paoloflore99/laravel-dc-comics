<?php

namespace App\Http\Controllers;

use App\Models\FilmComics;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ComicController extends Controller
{
    //





    public function index(){
        $comics = FilmComics::all();

        return view("comics.index" , compact("comics"));
    }





    public function show($id): View {
        $comic = FilmComics::findOrFail($id);
        return view("comics.show" , compact("comic"));
    }






    public function create(): View{
        return view("comics.create");
    }







    public function store(Request $request) {
        //qui leggo i dati ricevuti
        $data = $request->all();

        //creo una instanza di comic
        $comic =new FilmComics();
        $comic->title = $data ["title"];
        $comic->description = $data ["description"];
        $comic->thumb = $data ["thumb"];
        $comic->decimal= $data ["price"];
        $comic->string= $data ["series"];
        $comic->date= $data ["sale_date"];
        $comic->string= $data ["type"];

        //li asegno i valori ricevuti dal form
        $comic->fill($data);

        //salvo i dati 
        $comic->save();
        

        //da mettere la rotta nel web.php 
        //cosi mi mostrera il fumetto appena creato
        return redirect()->route("comics.show" , $comic->id);

    }





    public function edit(int $id): View{
        //recupera il film che corrisponde al id ricevuto
        $comic = FilmComics::findOrFail($id);

        return view("comics.edit", compact("comic"));
    }







    //ricevi dati da edit e aggiorna la tabella
    public function update(Request $request,int $id):RedirectResponse{
        //recupera il film che corrisponde al id ricevuto
        $comic = FilmComics::findOrFail($id);

        //leggo i dati ricevuti dal form
        $NewData = $request->all();

        //aggiorna i dati
        //update aggiorna e salva fill() e save()
        $comic->update($NewData);

        return redirect()->route("comics.show" , $comic->id);
    }




    public function destroy(int $id): RedirectResponse{
        //recupera il film che corrisponde al id ricevuto
        $comic = FilmComics::findOrFail($id);



        //elimina i dati 
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
