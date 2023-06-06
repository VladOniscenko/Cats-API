<?php

namespace App\Http\Controllers;

use App\Models\Cats;
use App\Http\Requests\StoreCatsRequest;
use App\Http\Requests\UpdateCatsRequest;

class CatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $randomNumber = rand(1, 250);
        $imageSrc = "https://oniscenko.com/projecten/Cats/images/" . $randomNumber . ".jpg";

        $data[] = array(
            'id' => $randomNumber,
            'src' => $imageSrc
        );

        if($data){

            return response()->json([
                'status' => 200,
                'cats' => $data
            ], 200);

        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No records found'
            ], 404);   
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($count)
    {
        $data = array();

        for ($i = 1; $i <= $count; $i++) {
            $randomNumber = rand(1, 250);
           
            $imageSrc = "https://oniscenko.com/projecten/Cats/images/" . $randomNumber . ".jpg";
        
            $data[] = array(
                'id' => $randomNumber,
                'src' => $imageSrc
            );
        }

        if($data){

            return response()->json([
                'status' => 200,
                'cats' => $data
            ], 200);

        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No records found'
            ], 404);   
        }
    }

    public function info(){
        $data = array();

        for ($i = 0; $i < 5; $i++) {
            $randomNumber = rand(1, 250);
            $imageSrc = "https://oniscenko.com/projecten/Cats/images/" . $randomNumber . ".jpg";
        
            $data[] = array(
                'id' => $randomNumber,
                'src' => $imageSrc
            );
        }

        //$randomCat = index();
        return view('info', ['Cats' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCatsRequest $request)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cats $cats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatsRequest $request, Cats $cats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cats $cats)
    {
        //
    }
}
