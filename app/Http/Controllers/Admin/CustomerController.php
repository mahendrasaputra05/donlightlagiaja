<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->get();
        return view('admin.customer.index', compact('customers'));
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required',
            'email'  => 'nullable|email',
            'alamat' => 'nullable',
        ]);

        Customer::create($request->all());

        return redirect()->route('admin.customer.index')
            ->with('success', 'Customer berhasil ditambahkan');
    }

    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'nama'   => 'required',
            'email'  => 'nullable|email',
            'alamat' => 'nullable',
        ]);

        $customer->update($request->all());

        return redirect()->route('admin.customer.index')
            ->with('success', 'Customer berhasil diperbarui');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('admin.customer.index')
            ->with('success', 'Customer berhasil dihapus');
    }
}
