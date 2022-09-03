<?php

namespace App\Http\Controllers\Admin\Environment;

use App\Http\Controllers\Controller;
use App\Models\Environment\Center;

use Illuminate\Http\Request;
use Redirect;

class CenterController extends Controller
{
    public function index()
    {
        $data = Center::get();
        return view('admin.environment.center', [
            'data' => $data
        ]);
    }

    public function list()
    {
        $data = Center::get();
        return response()->json(['data' => $data]);
    }

    /**
        * Create new resource in storage.
        *
        * @return Response
        */
    public function create(Request $request)
    {
        $newRow = new Center;
        $data = array();
        try {
            $newRow->country = $request->country;
            $newRow->city = $request->city;
            $newRow->zipcode = $request->zipcode;
            $newRow->measurement_unit = $request->measurement_unit;
            $newRow->shipping_method = $request->shipping_method;
            $newRow->address = $request->address;
            $newRow->phone = $request->phone;
            $newRow->shipping_center = $request->shipping_center;
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
    public function update(Request $request, Center $row)
    {
        try {
            $row->country = $request->country;
            $row->city = $request->city;
            $row->zipcode = $request->zipcode;
            $row->measurement_unit = $request->measurement_unit;
            $row->shipping_method = $request->shipping_method;
            $row->address = $request->address;
            $row->phone = $request->phone;
            $row->shipping_center = $request->shipping_center;
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
            Center::where('id', $id)->delete();
            $data['success'] = true;
        } catch (\Throwable $th) {
            print($th);
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }

        return response()->json(['data' => $data]);
    }
}
