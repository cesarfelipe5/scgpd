<?php

namespace App\Utils;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidatorRequest
{
    public static function validator(Request $request, array $rules)
    {
        $errors = array();

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        return false;
    }
}
