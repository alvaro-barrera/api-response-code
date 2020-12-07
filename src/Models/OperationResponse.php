<?php

namespace Whitehatdevelop;

use Illuminate\Database\Eloquent\Model;

class OperationResponse extends Model
{
    public static function response($code = 200)
    {
        $response = OperationResponse::where('code', $code)->first();
        $data_response['api_code'] = $response->code;
        $data_response['api_status'] = $response->status;
        $data_response['api_message'] = $response->message;
        $data_response['api_description'] = $response->description;

        return $data_response;
    }
}
