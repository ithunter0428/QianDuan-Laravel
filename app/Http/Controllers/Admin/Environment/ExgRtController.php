<?php

namespace App\Http\Controllers\Admin\Environment;

use App\Http\Controllers\Controller;
use App\Models\Environment\CustomsExchangeRate;

use Illuminate\Http\Request;
use Redirect;

class ExgRtController extends Controller
{
    public function index()
    {
        $data = CustomsExchangeRate::get();
        return view('admin.environment.exg_rt', [
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
        $newRow = new CustomsExchangeRate;
        $data = array();
        try {
            $newRow->country = $request->country;
            $newRow->round = $request->round;
            $newRow->period = $request->period;
            $newRow->exchange_rate = $request->exchange_rate;
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
    public function destroy($id)
    {
        try {
            CustomsExchangeRate::where('id', $id)->delete();
            $data['success'] = true;
        } catch (\Throwable $th) {
            print($th);
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }

        return response()->json(['data' => $data]);
    }
}
