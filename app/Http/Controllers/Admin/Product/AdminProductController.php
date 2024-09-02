<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminProductRequest;
use App\Models\Product;
use App\Models\ProductInfo;
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
        $data = $request->validated();

        // Calculate the sum of quantities directly from the validated data, with a fallback to an empty array
        $quantities = $data['quantities'] ?? [];
        $sumOfQuantities = array_sum($quantities);

        // Create the product record with the validated data and calculated final quantity
        $product = Product::create([
            'weight' => $data['weight'],
            'price' => $data['price'],
            'discount' => $data['discount'],
            'final_quantity' => $sumOfQuantities
            // 'en'=>[

            //     'name' => $data['name'],
            //     'model' => $data['model'],
            //     'description' => $data['description'],
            // ]
        ]);
        $product->translateOrNew('en')->fill([
            'name' => $data['name'],
            'model' => $data['model'],
            'description' => $data['description'],
        ])->save();
        $product->translateOrNew('ar')->fill([
            'name' => $data['name_ar'],
            'model' => $data['model_ar'],
            'description' => $data['description_ar'],
        ])->save();
        // Prepare data for bulk insertion into ProductInfo
        $productInfoData = array_map(function ($colorEn,$colorAr, $quantity) use ($product) {
            return [
                'product_id' => $product->id,
                'color_en' => $colorEn,
                'color_ar' => $colorAr,
                'quantity' => $quantity,
            ];
        }, $data['colorsEn'],$data['colorsAr'], $data['quantities']);

        // Bulk insert product information data to minimize database calls
        ProductInfo::insert($productInfoData);

        return redirect()->back()->with(['success' => 'Product created successfully']);
    }
    public function show(Product $product){
        return view('product.show',get_defined_vars());
    }
    public function destroy(Product $product){

        $product->delete();
        return redirect()->back()->with(['success' => 'Product deleted successfully']);
    }


}
