<?php

namespace App\Http\Controllers\Admin\Environment;

use App\Http\Controllers\Controller;
use App\Models\Environment\Center;
use App\Models\Environment\Freights;

use Illuminate\Http\Request;
use Redirect;

class DlvFreeController extends Controller
{
    private function getCenters() {
        $centers = Center::get();
        $centerArray = array();
        foreach($centers as $center) {
            $methods = explode(',', $center->shipping_method);
            $newCenter = $center->toArray();
            foreach($methods as $method) {
                $newCenter['method'] = $newCenter['city'] . '/' . trim($method);
                $newCenter['ship_method'] = trim($method);
                array_push($centerArray, $newCenter);
            }
        }
        return $centerArray;
    }

    public function index($city = null, $method = null)
    {
        $centerArray = $this->getCenters();
        $tabCenter = count($centerArray) > 0? $centerArray[0]['method']: '';
        if(isset($city) && isset($method)) {
            $tabCenter = $city . '/' . $method;
        }

        $data = array();
        if(count($centerArray) != 0) {
            if(!isset($method)) {
                $method = $centerArray[0]['ship_method'];
                $city = $centerArray[0]['city'];
            }
            $data = Freights::where('city', $city)->where('shipping_method', $method)->get()->toArray();
        }

        return view('admin.environment.dlv_free', [
            'centers' => $centerArray,
            'tabCenter' => $tabCenter,
            'data' =>  count($data) > 0? $data: array()
        ]);
    }

     /**
        * Create new resource in storage.
        *
        * @return Response
        */
    public function create(Request $request)
    {
        $newRow = new Freights;
        $data = array();
        try {
            $newRow->city = $request->city;
            $newRow->shipping_method = $request->shipping_method;
            $newRow->weight = $request->weight;
            $newRow->price = $request->price;
            $newRow->level = $request->level;
            if ($newRow->save()) {
                $data['success'] = true;
            } else {
                $data['success'] = false;
            }
        } catch (\Throwable $th) {
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }

        return response()->json(['data' => $data]);
    }

     /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function destroy($city = null, $method = null)
    {
        try {
            Freights::where('city', $city)->where('shipping_method', $method)->delete();
            $data['success'] = true;
        } catch (\Throwable $th) {
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }

        return response()->json(['data' => $data]);
    }
}
