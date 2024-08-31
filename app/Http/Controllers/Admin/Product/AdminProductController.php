<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AdminProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate();
        // dd($products);
        return view('product.index', get_defined_vars());
    }
    // public function store(Request $request)
    public function store(StoreAdminProductRequest $request)
    {
        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        // Check if validation fails
        if ($validator->fails()) {
            // Aggregate errors into a single message
            $errors = $validator->errors()->getMessages();
            $errorMessages = [];

            foreach ($errors as $field => $messages) {
                $errorMessages[] = $messages[0];
            }

            $errorMessage = implode(' ', $errorMessages);

            // Redirect back with the aggregated error message
            return redirect()->back()->withErrors([$errorMessage])->withInput();
        }
          // Dump all request data
    dd($request->validated());

    // Calculate the sum of quantities
    $quantities = $request->input('quantities', []);
    $sumOfQuantities = array_sum($quantities);

    // Dump the sum of quantities along with request data
    dd($request->all(), $sumOfQuantities);
    $product = Product::create([
        ''
    ]);
    }
}
