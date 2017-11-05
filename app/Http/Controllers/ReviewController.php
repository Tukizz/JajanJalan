<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Branch;

class ReviewController extends Controller
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
    public function store(Request $request, $branchId)
    {
        $this->validate($request, array(

                'reviewDescription' => 'required|min:5|max:500',
                'reviewById' => 'required',
            ));

        $branch = Branch::find($branchId);

        $review = new Review();
        $review->reviewDescription = $request->reviewDescription;
        $review->reviewById = $request->reviewById;
        $review->branch()->associate($branch);
        $review->save();


        return redirect(url()->previous().'#comments');
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
        $delete = Review::find($id);
        $delete->delete();
        return redirect(url()->previous().'#comments');
    }
}
