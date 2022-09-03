<?php

namespace App\Http\Controllers\Admin\Environment;

use App\Http\Controllers\Controller;
use App\Models\Environment\WaybillBandwidths;

use Illuminate\Http\Request;
use Redirect;

class IvcBandWhController extends Controller
{
    public function index()
    {
        $data = WaybillBandwidths::get();
        return view('admin.environment.ivc_band_wh', [
            'data' => $data
        ]);
    }

    /**
        * Create new resource in storage.
        *
        * @return Response
        */
    public function create(Request $request)
    {
        $newRow = new WaybillBandwidths;
        $data = array();
        try {
            $newRow->city = $request->city;
            $newRow->shipping_method = $request->shipping_method;
            $newRow->courier_company = $request->courier_company;
            $newRow->title = $request->title;
            $newRow->bandwidth_bottom = $request->bandwidth_bottom;
            $newRow->bandwidth_top = $request->bandwidth_top;
            $newRow->bandwidth_total = $request->bandwidth_total;
            $newRow->use_quantity = $request->use_quantity;
            $newRow->available_quantity = $request->available_quantity;
            $newRow->status = $request->status;
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
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function update(Request $request, WaybillBandwidths $row)
    {
        try {
            $row->status = $request->status;

            if ($row->save()) {
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
    public function destroy($id)
    {
        try {
            WaybillBandwidths::where('id', $id)->delete();
            $data['success'] = true;
        } catch (\Throwable $th) {
            print($th);
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }

        return response()->json(['data' => $data]);
    }
}
