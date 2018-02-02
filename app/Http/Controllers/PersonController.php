<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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


    //AJAX
    public function searchPersonByDocument(Request $request)
    {
        $idDocumentType = $request->input('idDocumentType');
        $documentNumber = $request->input('documentNumber');
        $person = Person::where('idDocumentType','=', $idDocumentType)
                            ->where('documentNumber','=', $documentNumber)
                            ->first();

        return $person;
    }

    public function createPerson(Request $request)
    {
        $idDocumentType = $request->input('idDocumentType');
        $documentNumber = $request->input('documentNumber');
        $fatherLastName = $request->input('fatherLastName');
        $motherLastName = $request->input('motherLastName');
        $firstNames = $request->input('firstNames');
        $registerDate = $request->input('registerDate');

        try {
            $person = new Person();
            $person->idDocumentType= $idDocumentType;
            $person->documentNumber= $documentNumber;
            $person->fatherLastName= $fatherLastName;
            $person->motherLastName= $motherLastName;
            $person->firstNames= $firstNames;
            $person->registerDate= date("Y-m-d H:i:s");
            $person->save();

            return  json_encode([   'Result'=>1,
                                    'Data'=>$person
                            ]);

        } catch (Illuminate\Database\QueryException $e) {
            return  json_encode([   'Result'=>0,
                                    'Data'=>null
                            ]);
        }

    }

}
