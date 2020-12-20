<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;
use App\Http\Requests\ImovelRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


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
        $qtd = $request['qtd'] ? : 2;
        $page = $request['page'] ? : 1;
        $buscar = $request['buscar'];
        $tipo = $request['tipo'];
        Paginator::currentPageResolver(function () use ($page){
            return $page;
        });  
        if($buscar)
        {
            $imoveis = DB::table('imoveis')->where('cidadeEndereco', '=', $buscar);
            $imoveis->paginate($qtd);
        }else {
            if($tipo)
            {
                $imoveis = DB::table('imoveis')->where('tipo', '=', $tipo);
                $imoveis->paginate($qtd);
            } else{
                $imoveis = DB::table('imoveis');
                $imoveis->paginate($qtd);
            }

        $imoveis = DB::table('imoveis')->paginate($qtd);
        $imoveis = $imoveis->appends(Request::capture()->except('page'));
        return view('imoveis.index', compact('imoveis'));
    }
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
}
