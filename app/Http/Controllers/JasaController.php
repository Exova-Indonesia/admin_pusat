<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inv;
use App\Models\Jasa;
use App\Models\Buyer;

class JasaController extends Controller
{
    public function jasa_orders() {
        $jasa_orders = Jasa::first()->with(['users_orders_details', 'users_orders'])->take(4)->get();
        $inv_orders = Inv::with(['inv_orders_details', 'users_inv_orders'])->take(4)->get();
        return view('/home', ['jasa_orders' => $jasa_orders, 'inv_orders' => $inv_orders]);
        //return response()->json(['data' => $jasa_orders]);
    }
    public function modals($id) {
        $jasa_orders = Jasa::with(['users_orders_details', 'users_orders'])->find([$id]);
        return view('modal.modal-jasa', ['jasa_orders' => $jasa_orders]);
    }
    public function modals_inv($id) {
        $inv_orders = Inv::with(['inv_orders_details', 'users_inv_orders'])->find([$id]);
        return view('modal.modal-inv', ['inv_orders' => $inv_orders]);
    }
}
