<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * @param string $message
     * @param array $errorMessages
     * @param int $code
     * @return JsonResponse
     */
    public function sendResponse($result, $message, $statusCode=200)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, $statusCode);
    }

    /**
     * @param mixed $data
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    public function sendError($error, $errorMessages = [], $statusCode = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $statusCode);
    }
}
