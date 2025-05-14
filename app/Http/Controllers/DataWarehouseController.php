<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;

class DataWarehouseController extends Controller
{
    public function index(): JsonResponse
    {
        $products = Product::with([
            'locationProducts.location.zone.warehouse',
            'locationProducts.location.zone.featureAssignments.feature',
            'locationProducts.location.zone.warehouse.featureAssignments.feature',
            'suppliers',
        ])->get();

        // แปลงข้อมูลให้อยู่ในโครงสร้างที่ต้องการ
        $data = $products->map(function ($product) {
            return $product->locationProducts->map(function ($locProd) use ($product) {
                $location = $locProd->location;
                $zone = $location->zone;
                $warehouse = $zone->warehouse;

                return [
                    'warehouse' => [
                        'id'    => $warehouse->id,
                        'code'  => $warehouse->code,
                        'name'  => $warehouse->name,
                        'features' => $warehouse->featureAssignments->map(function ($wa) {
                            return [
                                'feature_id'  => $wa->feature->id,
                                'feature_code'=> $wa->feature->code,
                                'value'       => $wa->value,
                            ];
                        }),
                    ],
                    'zone' => [
                        'id'    => $zone->id,
                        'name'  => $zone->name,
                        'type'  => $zone->type,
                        'features' => $zone->featureAssignments->map(function ($za) {
                            return [
                                'feature_id'  => $za->feature->id,
                                'feature_code'=> $za->feature->code,
                                'value'       => $za->value,
                            ];
                        }),
                    ],
                    'location' => [
                        'id'            => $location->id,
                        'name'          => $location->name,
                        'max_weight'    => $location->max_weight,
                        'max_volume'    => $location->max_volume,
                        'allowed_types' => $location->allowed_types,
                    ],
                    'location_product' => [
                        'quantity'        => $locProd->quantity,
                        'unit'            => $locProd->unit,
                        'batch_no'        => $locProd->batch_no,
                        'expiration_date' => $locProd->expiration_date,
                    ],
                    'product' => [
                        'id'              => $product->id,
                        'sku'             => $product->sku,
                        'type'            => $product->type,
                        'barcode'         => $product->barcode,
                        'source'          => $product->source,
                        'production_date' => $product->production_date,
                        'expiration_date' => $product->expiration_date,
                        'price'           => $product->price,
                        'suppliers'       => $product->suppliers->map(function ($s) {
                            return [
                                'id'        => $s->id,
                                'name'      => $s->name,
                               'preferred' => $s->pivot ? $s->pivot->preferred : null,  // ตรวจสอบก่อนว่า pivot มีค่า
                              'price'     => $s->pivot ? $s->pivot->price : null,  // ตรวจสอบก่อนว่า pivot มีค่า
                            ];
                        }),
                    ],
                ];
            });
        })->flatten(1);

        return response()->json([
            'products' => $data
        ]);
    }
}
