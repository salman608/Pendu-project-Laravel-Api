<?php


namespace App\Http\Controllers\Api\V1\Dropper;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Task;
use App\Models\TaskOffer;
use App\Models\TaskOrder;
use App\Models\TaskOrderReview;
use App\Models\TaskProduct;
use Exception;
use DB;
use Illuminate\Support\Facades\Log;

class ShoppingController  extends ApiController
{   
    // add or update product delivery info
    public function addOrUpdate(Request $request, $taskId, $productId){
        $product = TaskProduct::with('delivery')->where('task_id', $taskId)->where('id', $productId)->first();

        if(!$product){
            return $this->respondWithSuccess(
                'You have provided invalid id.'
            );
        }

        $data = [
            "available" => $request->available ?? true
        ];

        if($product->delivery){
            $product->delivery()->update($data);

            return $this->respondWithSuccess(
                'Shopping info updated successfully.',
                $product->load('delivery')
            );
        }

        $product->delivery()->create($data);

        return $this->respondWithSuccess(
            'Shopping info created successfully.',
            $product->load('delivery')
        );


        // if($product){

        // }
    }

    // remove product delivery info
    public function remove(Request $request, $taskId, $productId){
        $product = TaskProduct::with('delivery')->where('task_id', $taskId)->where('id', $productId)->first();

        if(!$product){
            return $this->respondWithSuccess(
                'You have provided invalid id.'
            );
        }

        if($product->delivery){
            $product->delivery()->delete();

            return $this->respondWithSuccess(
                'Shopping info deleted successfully.',
                []
            );
        }
        
        return $this->respondWithSuccess(
            'Failed. There is no delivery info yet.',
        );
    }
}
