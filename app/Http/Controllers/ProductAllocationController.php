<?php

namespace App\Http\Controllers;

use App\Models\LocationProduct;
use Illuminate\Http\JsonResponse;

class ProductAllocationController extends Controller
{
    public function allocateProducts($method): JsonResponse
    {
        // ดึงสินค้าทั้งหมดที่มี quantity > 0 โดยเลือกเฉพาะฟิลด์ที่จำเป็นและใช้ index
        $inventory = LocationProduct::select('id', 'location_id', 'product_id', 'quantity', 'unit', 'batch_no', 'expiration_date')
            ->with('product')
            ->where('quantity', '>', 0)
            ->orderBy('location_id')  // ใช้ index ของ location_id
            ->orderBy('product_id')   // ใช้ index ของ product_id
            ->get();

        // ตรวจสอบวิธีการจัดสรร (FIFO หรือ FEFO)
        if ($method === 'fifo') {
            // เรียกใช้ฟังก์ชัน FIFO
            $products = $this->allocateFIFO($inventory);
        } elseif ($method === 'fefo') {
            // เรียกใช้ฟังก์ชัน FEFO
            $products = $this->allocateFEFO($inventory);
        } else {
            return response()->json(['error' => 'Invalid allocation method'], 400);
        }

        return response()->json(['allocated_products' => $products]);
    }

    // ฟังก์ชันสำหรับการจัดสรรสินค้าแบบ FIFO
    private function allocateFIFO($inventory)
    {
        $fifoProducts = $inventory->filter(function ($item) {
            return $item->product && $item->product->type !== 'expiration';
        })->sortBy('created_at')->values();

        return $fifoProducts;
    }

    // ฟังก์ชันสำหรับการจัดสรรสินค้าแบบ FEFO
    private function allocateFEFO($inventory)
    {
        $fefoProducts = $inventory->filter(function ($item) {
            return $item->product && $item->product->type === 'expiration';
        })->sortBy('product.expiration_date')->values();

        return $fefoProducts;
    }
}
