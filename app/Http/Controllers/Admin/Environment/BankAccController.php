<?php

namespace App\Http\Controllers\Admin\Environment;

use App\Http\Controllers\Controller;
use App\Models\Environment\BankAccount;

use Illuminate\Http\Request;
use Redirect;

class BankAccController extends Controller
{
    public function index()
    {
        $data = BankAccount::get();
        return view('admin.environment.bank_acc', [
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
        $newRow = new BankAccount;
        $data = array();
        try {
            $newRow->round = $request->round;
            $newRow->bank_name = $request->bank_name;
            $newRow->account_number = $request->account_number;
            $newRow->account_owner = $request->account_owner;
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
    public function update(Request $request, BankAccount $row)
    {
        try {
            $row->round = $request->round;
            $row->bank_name = $request->bank_name;
            $row->account_number = $request->account_number;
            $row->account_owner = $request->account_owner;
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
            BankAccount::where('id', $id)->delete();
            $data['success'] = true;
        } catch (\Throwable $th) {
            print($th);
            $data['success'] =  false;
            $data['errors'] =  collect(['Error']);
        }

        return response()->json(['data' => $data]);
    }
}
