<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index(){
        
        //Inserir dados 
        //$business = Business::create([
        //     'name' => 'Jon fix',
        //     'email' => 'jon@snow.com',
        //     'address'=>'Rua a quadra'
        // ]);


        // 1° forma - Atualizar registro no banco de dados
        // $business = Business::find(4);
        // $business -> name = 'Jhon att';
        // $business -> email = 'email@att.com';
        // $business -> address = 'rua 4 att';
        // $business -> save();
        
        //2° forma - forma de atualizar
        // $business = Business::find(4)->update([
        //     'name' => 'Jon',
        //     'email' => 'sdsd@sdsd.com'
        // ]);


        //3° forma - forma de atualizar
        // $input = [
        //     'name' => 'Jon',
        //     'email' => 'sdsd@sds2.com',
        // ];
        // $business = Business::find(4); 
        // $business -> fill($input);
        // $business->save();
        // dd($business);


        //Deletar dado
        // $business = Business::find(4);
        // $business->delete();
        // dd($business);

        //dd($business->toArray()); //Converte para array
        //dd($business->toSql()); //mostra a query usada para pesquisar

        // $business = Business::where('name', 'LIKE', '%jon%')->get();
        // dd( $business->toArray());


        //Consulta + comando da query
        // \DB::connection()-> enableQueryLog();
        // $business = Business::where('name', 'LIKE', '%jon%')->get();
        // $query = \DB::getQueryLog();
        // dd($query);


    }
}
