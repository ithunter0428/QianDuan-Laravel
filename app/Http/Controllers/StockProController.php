<?php

namespace App\Http\Controllers;

use App\Models\StockRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class StockProController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('stockpro');
    }

    public function create(Request $request)
    {
        $params = $request->all();
        $newRow = new StockRequest;
        $data = array();
        try {
            $newRow->mall_url = $params['mall_url'];
            $newRow->clearance_category_search = $params['clearance_category_search'];
            $newRow->tracking_number = $params['tracking_number'];
            $newRow->quantity = $params['quantity'];
            $newRow->unit_price = $params['unit_price'];
            $newRow->product_url = $params['product_url'];
            $newRow->trademark = $params['trademark'];
            $newRow->product_english_name = $params['product_english_name'];
            $newRow->color = $params['color'];
            $newRow->size = $params['size'];
            $newRow->product_image_url = $params['product_image_url'];
            if ($newRow->save()) {
                $data['success'] = true;
            } else {
                $data['success'] = false;
            }
        } catch (\Throwable $th) {
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }
        // return redirect('/');
    }
}
