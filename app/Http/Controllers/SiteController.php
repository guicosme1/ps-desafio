<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    private $produtos;
    private $categorias;

    public function __construct(Produto $produtos, Categoria $categorias)
    {
        $this->produtos = $produtos;
        $this->categorias = $categorias;
    }
    public function index()
    {   
        $search = request('search');

        $produtos = [];

        $categorias = [];
        
        if($search) {
            
            $produtos = Produto::where('nome', 'like', '%'.$search.'%')->get();
            if(count($produtos) == 0)
            {
                $categorias = Categoria::where('categoria','=',$search)->first();
                
                if($categorias == NULL)
                {
                    $produto = [];
                } else {
                    $produtos = Produto::where('categoria_id',$categorias->id)->get();
                }
            }
        } else {
            $produtos = Produto::All();
        }
        $categorias = Categoria::All();
        return view('loja.index',compact('produtos','categorias','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function filter($categoria)
    {
        $categoriaSelecionada = Categoria::where('categoria',$categoria)->first();
        $produtos = Produto::where('categoria_id',$categoriaSelecionada->id)->first();;

        $categorias = Categoria::All();

        return view('loja.index',compact('produtos','categorias'));
    }

    public function create()
    {


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
