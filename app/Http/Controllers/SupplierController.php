<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class SupplierController extends Controller
{
    public function index()
    {
        // $suppliers = Supplier::get();
        // $suppliers = DB::table('suppliers')->paginate(10);
        // return view('pages.supplier.index-supplier', compact('suppliers'));

        // $suppliers = DB::table('suppliers')->paginate(10);
        return view('pages.supplier.index-supplier');
    }

    public function fetchData()
    {
        $suppliers = DB::table('suppliers')->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $suppliers
        ]);
    }

    public function store(Request $request, $id='')
    {
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ]);

            $supplier = Supplier::find($id);
            if (!$supplier) {
                $supplierData = Supplier::create($request->all());
                return response()->json([
                    'success' => true,
                    'message' => 'Hore! data tersimpan nih...'. '😊',
                    'data'    => $supplierData 
                ], 200);
            }

            $supplierData = $supplier::update([$request->all()]);
            return response()->json([
                'success' => true,
                'message' => 'Hore! data udah berubah ya...'. '😊',
                'data'    => $supplierData 
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(). 'form cannot be empty 😊',
                'data'    => ''
            ]);
        }
    }

    public function detailSupplier($id){
        $supplier = Supplier::find($id);
        return response()->json([
            'success' => true,
            'data'    => $supplier 
        ], 200);
    }
}
