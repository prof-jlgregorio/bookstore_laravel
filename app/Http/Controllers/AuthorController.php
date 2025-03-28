<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class AuthorController extends Controller
{

    private $authors = [];

    public function __construct()
    {
        //$this->createAuthors();

        if(!session('authors')){
            session(['authors' => $this->authors]);
        } else {
            $this->authors = session("authors");
        }

        //this function debugs objects and variables
        //dd($this->authors);

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authors.index')->with('authors', $this->authors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $authors = session('authors');

        $author = new stdClass;
        $author->id = uniqid();
        $author->name = $request->input('name');
        $author->country = $request->input('country');

        $authors[] = $author;

        session(['authors' => $authors]);

        return redirect( route('authors.index') );

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $authorIndex = $this->findObjectIndexById(session('authors'), $id );
        if($authorIndex >= 0){
            return view('authors.show')
                ->with('author', session('authors')[$authorIndex]);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $authorIndex = $this->findObjectIndexById(session('authors'), $id );
        if($authorIndex >= 0){
            return view('authors.edit')
                ->with('author', session('authors')[$authorIndex]);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $authors = session('authors');

        $index = $this->findObjectIndexById($authors, $id);

        $authors[$index]->name = $request->input('name');
        $authors[$index]->country = $request->input('country');

        session(['authors' => $authors ]);

        return redirect(route('authors.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function createAuthors() : void {
        //create a new standard class
        $author = new stdClass;
        //set the attributes
        $author->id = 1;
        $author->name = 'Isac Asimov';
        $author->country = 'Rússia';
        //insert into array
        $this->authors[] = $author;
        //--------------------------------
        $author = new stdClass;
        $author->id = 2;
        $author->name = 'Arthur C. Clarke';
        $author->country = 'Inglaterra';
        $this->authors[] = $author;
    }

    private function findObjectIndexById(array $objects, string $id){
        foreach($objects as $index => $object){
            if(isset($object->id) && $object->id === $id ){
                return $index;
            }
        }
        return -1;
    }

}
