<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

/**
 * Class ApiController
 *
 * @package \App\Http\Controllers\Api
 */
class ApiController extends Controller
{
    const CODE_SUCCESS = 200;
    const CODE_ERROR = 400;

    protected function responseSuccess($data)
    {
        return $this->responseJson(self::CODE_SUCCESS, null, $data);
    }

    protected function responseError($message)
    {
        return $this->responseJson(self::CODE_ERROR, $message, null);
    }

    protected function responseJson($code, $message, $data)
    {
        return Response::json(compact('code', 'message', 'data'));
    }
}