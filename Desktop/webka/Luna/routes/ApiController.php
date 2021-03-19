<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ModelS\Client;
class ApiController extends Controllers{
    /*
        THIS FUNCTION RETURN ALL CLIENTS ROWS
    */
    public function index(Request $request) {
        $clients = Client::all();
        return response($clients, 200);
    }

    /* 
    RETURN CLIENT WITH CLIENT_ID

    */

    public function get_client(Request $request) {
        $client=Client:: find($request->client_id);
        if($client ==  null){
            return response(['Message => THERE IS NOO CLIENT'], 404);
        }
            return response($client, 200);
    }
}