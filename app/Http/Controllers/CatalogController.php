<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente;

class CatalogController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    function getIndex(){

         $users = DB::table('clientes')->get();
        return view('catalog/index',array('arrayClientes'=> $users));
    }

    function getCreate(){
        return view('catalog/create');
    }

    function getLogin(){
        return view('auth/login');
    }

    function getEdit($id){
        $users = DB::table('clientes')->get();
        $targetuser = Cliente::findOrFail($id);
        return view('catalog/edit', array('cliente'=>$targetuser));
    }

    function getShow($id){
        $users = DB::table('clientes')->get();
        $targetuser = Cliente::findOrFail($id);
        return view('catalog/show', array('cliente'=>$targetuser));
    }

    function postCreate(){

    }

    function putEdit(){

    }

}
