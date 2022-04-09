<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Basket\StoreRequest;
use App\Http\Requests\Front\Basket\UpdateRequest;
use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('front.basket.home', [
            'products' => auth()->user()->UserProduct
        ]);
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
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $basket = Basket::where('product_id', $data['product_id'])->where('user_id', $data['user_id'])->first();
        if(!empty($basket)){
            $data['count'] += $basket['count'];
            $basket->update($data);
        }
        else{
            Basket::firstOrCreate($data);
        }

        return Redirect::back();
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
        return view('front.basket.edit', [
            'product' => auth()->user()->userProduct->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        $basket = Basket::find($id);

        $basket->update($data);

        return redirect()->route('front.baskets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Basket::find($id)->delete();
        return redirect()->route('front.baskets.index');
    }
}
