<?php

namespace App\Http\Controllers;

use App\Orders;
use App\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/Orders/RecordOrder');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Orders::get();
        return view('/Orders/TrackingOrders', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Orders $orders)
    {
        $InvoiceNumber = rand(0001, 999999);
        $file = $request->file('FrontImage');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $FrontImage = $request->file('FrontImage')->move("FrontImage", $name);
        $file = $request->file('BackImage');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $BackImage = $request->file('BackImage')->move("BackImage", $name);
        $user_id = auth()->user()->id;
        Orders::create([
            'user_id' => $user_id,
            'Product' => $request['Product'],
            'Paperback' => $request['Paperback'],
            'PaperHeat' => $request['PaperHeat'],
            'Services' => $request['Services'],
            'Size' => $request['Size'],
            'Circulation' => $request['Circulation'],
            'Description' => $request['Description'],
            'FrontImage' => $FrontImage,
            'BackImage' => $BackImage,
            'InvoiceNumber' => $InvoiceNumber,
//            $user = new User,
//            $user->user_id = $request->user_id,
//            $orders->users()->save($user),

        ]);
        session()->flash('alert', 'سفارش شما با موفقیت ثبت شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orde)
    {
        return view('/Orders/ViewAndEdit', compact('orde'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Unpaid()
    {
        return view('/Orders/Unpaid');
    }

    public function OrderToSend()
    {
        return view('/Orders/OrderToSend');

    }

    public function RequestsSubmitted()
    {
        return view('/Orders/RequestsSubmitted');

    }
}
