<?php

namespace Modules\Suppliers\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Suppliers\Models\Supplier;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::get();

        return view('suppliers::index', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers::create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        Supplier::create([
            'name' => $request->input('name')
        ]);

        return redirect(route('app.suppliers.index'));
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('suppliers::edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        Supplier::findOrFail($id)->update([
            'name' => $request->input('name')
        ]);

        return redirect(route('app.suppliers.index'));
    }

    public function destroy($id)
    {
        Supplier::findOrFail($id)->delete();

        return redirect(route('app.suppliers.index'));
    }
}
