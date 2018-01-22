<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocumentType;

class SaleController extends Controller
{
    public function index()
    {
    	return 'estas en el index';
    }

    public function create()
    {
        $documentTypes = DocumentType::all();

        return view('sale.create', ['documentTypes'=>$documentTypes]);
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
