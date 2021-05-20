<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function ping()
    {
        return 'OK';
    }

    public function me()
    {
        return response()->json([
            'Project' => 'Pendu by Increments Inc',
            'Developer' => 'Masud Rana && Salman Rahman'
        ], 200);
    }

    /**
     * Fallback route response
     */
    public function fallback()
    {   
        return response()->json(['message' => 'Route does not exist'], 404);
    }

    /**
     *  Response Json Success
     *
     * @param string $message
     * @param array $data
     * @param integer $code
     * @return void
     */
    protected function respondWithSuccess($message = '', $data = [], $code = 200){
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' =>[]
        ]);
    }

    /**
     *  Response Json Fail
     *
     * @param string $message
     * @param array $data
     * @param integer $code
     * @return void
     */
    protected function respondWithError($message = '', $data = [], $code = 200){
        return response()->json([
            'success' => false,
            'message' => $message,
            'data' =>[]
        ]);
    }
}
