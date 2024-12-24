<?php

namespace App\Http\Controllers\front;

use App\Models\front\User;
use Illuminate\Http\Request;
use App\Http\Traits\Message_Trait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserBalanceController extends Controller
{
    use Message_Trait;

    public function index()
    {
        return view('front.users.balance.index');
    }


    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $rules = [
                'amount' => 'required|numeric|min:1',
                'payment_method' => 'required',
            ];
            $messages = [
                'amount.required' => ' من فضلك حدد المبلغ  ',
                'amount.numeric' => ' المبلغ يجب ان يكون رقم صحيح  ',
                'amount.min' => ' المبلغ يجب ان يكون اكبر من 1  ',
                'payment_method.required' => ' من فضلك حدد طريقة الدفع  ',
            ];
            $validator = Validator::make($data, $rules, $messages);

            if ($validator->fails()) {
                return Redirect()->back()->withErrors($validator)->withInput();
            }
            $user = User::find(auth()->user()->id);

            $user->balance += $request->amount;
            $user->save();
            return $this->success_message(' تم اضافة الرصيد بنجاح ');
        }

    }
}
