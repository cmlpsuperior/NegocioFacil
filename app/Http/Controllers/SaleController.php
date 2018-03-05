<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentType;
use App\Item;

class SaleController extends Controller
{
    public function index()
    {
    	return 'estas en el index';
    }

    public function create()
    {
        $documentTypes = DocumentType::all(); //collection
        $itemsToSearch = Item::all()->pluck('name'); //array
        /*$itemsToSearch = array("Cemento sol","Cemento andino","ladrillo lark","ladrillo pandereta","Arena gruesa", 
                    "Cemento sol 2","Cemento andino 2","ladrillo lark 2","ladrillo pandereta 2","Arena gruesa 2",
                    "Cemento sol 3","Cemento andino 3","ladrillo lark 3","ladrillo pandereta 3","Arena gruesa 3");
        */
        //dd($itemsToSearch);
        return view('sale.create', ['documentTypes'=>$documentTypes,
                                    'itemsToSearch'=>$itemsToSearch
                                    ]);
    }

    public function store(Request $request)
    {
        //falta hacer la validacion
        $billtype =$request->input('billType');  
        $idDocumentType = $request->input('idDocumentType');
        $documentNumber = $request->input('documentNumber');
        $payment = $request->input('payment');

        return 'documento = '.$idDocumentType.' y el numero de doc es '.$documentNumber. '. El tipo de documento es '.$billtype. '. El pago fue '.$payment;
    }
}
