<?php

namespace App\Http\Controllers;

use App\Infrastructure\Persistence\Request\ResponseStatus;

abstract class Controller
{
    /**
     * @param mixed $results
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseSuccess($results)
    {
        return response()->json([
            'status' => ResponseStatus::STATUS_SUCCESS,
            'data' => $results
        ], ResponseStatus::getCode(ResponseStatus::STATUS_SUCCESS));
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseFail($message)
    {
        return response()->json([
            'status' => ResponseStatus::STATUS_FAIL,
            'message' => $message
        ], ResponseStatus::getCode(ResponseStatus::STATUS_FAIL));
    }
}
