<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // "category_id"      => 'required',
            "title"            => 'required',
            // "additional_note"  => 'required',
            // "product_cost"     => 'required',
            "shop_address"     => 'required',
            "delivery_address" => 'required',
            "deliver_time"     => "required",
            // "item_cost"        => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category_id.required'      => "Please select category",
            'additional_note.required'  => "Additional note is required",
            'product_cost.required'     => "Product cost is required",
            'shop_address.required'     => "Shop address is required",
            'delivery_address.required' => "Delivery address is required",
            'deliver_time.required'     => "Delivery time is required",
        ];
    }
}
