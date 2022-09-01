<?php

namespace App\Http\Controllers\Admin\Environment;

use App\Http\Controllers\Controller;
use App\Models\Environment\MemberGrade;

use Illuminate\Http\Request;
use Redirect;

class MemGradeController extends Controller
{
    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        $data = MemberGrade::orderBy('grade')->get();
        return view('admin.environment.mem_grade', [
            'data' => $data,
        ]);
    }

    /**
        * Create new resource in storage.
        *
        * @return Response
        */
    public function create(Request $request)
    {
        $newRow = new MemberGrade;
        $data = array();
        try {
            $newRow->grade = $request->grade;
            $newRow->name = $request->name;
            $newRow->send_amount_from = $request->send_amount_from;
            $newRow->send_amount_to = $request->send_amount_to;
            $newRow->purchase_fee = $request->purchase_fee;
            $newRow->coupon_delivery_count = $request->coupon_delivery_count;
            $newRow->coupon_value = $request->coupon_value;
            $newRow->integral = $request->integral;
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
    public function update(Request $request, MemberGrade $row)
    {
        try {
            $row->grade = $request->grade;
            $row->name = $request->name;
            $row->send_amount_from = $request->send_amount_from;
            $row->send_amount_to = $request->send_amount_to;
            $row->purchase_fee = $request->purchase_fee;
            $row->coupon_delivery_count = $request->coupon_delivery_count;
            $row->coupon_value = $request->coupon_value;
            $row->integral = $request->integral;
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
            MemberGrade::where('id', $id)->delete();
            $data['success'] = true;
        } catch (\Throwable $th) {
            print($th);
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }

        return response()->json(['data' => $data]);
    }
}
