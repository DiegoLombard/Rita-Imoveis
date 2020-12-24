<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;
use App\Http\Requests\ImovelRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;


class ImovelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $imoveis = Imovel::paginate(3);
        return view('imoveis.index', compact('imoveis'));
    
    }

    public function home()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImovelRequest $request)
    {
        $dados = $request->all();
        Imovel::create($dados);

        return redirect()->route('imoveis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imovel = Imovel::find($id);
        
        return view('imoveis.show', compact('imovel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imovel = Imovel::find($id);
        
        return view('imoveis.edit', compact('imovel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function update(ImovelRequest $request, $id)
    {
        $imovel = Imovel::find($id);
        $dados = $request->all();
        $imovel->update($dados);
        return redirect()->route('imoveis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $imovel = Imovel::find($id);
        return view('imoveis.delete', compact('imovel'));

        
    }
    public function destroy($id)
    {
        $imovel = Imovel::find($id)->delete();
        return redirect()->route('imoveis.index');
    }
    public function buscar(Request $request)
    {
       
        
      
        $imoveis = Imovel::where('cidadeEndereco', 'LIKE',  "%{$request->buscar}%")
        ->paginate();
       
                           
        return view('imoveis.index', compact( 'imoveis' ));                        

    }
    public function mostrarApartamento(Request $request)
    {
        $imoveis = Imovel::where('tipo', '=',  "apartamento")
        ->paginate();

        return view('imoveis.index', compact( 'imoveis' ));
    }

    public function mostrarCasa(Request $request)
    {
        $imoveis = Imovel::where('tipo', '=',  "casa")
        ->paginate();

        return view('imoveis.index', compact( 'imoveis' ));
    }

    public function mostrarKitnet(Request $request)
    {
        $imoveis = Imovel::where('tipo', '=',  "kitnet")
        ->paginate();

        return view('imoveis.index', compact( 'imoveis' ));
    }

}
