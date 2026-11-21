<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers', [
            'customers' => $customers
        ]);
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit', [
            'customer' => $customer
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $customer = Customer::findOrFail($id);

        $customer->update($validated);

        return redirect('/customers')
            ->with('success', 'Customer updated successfully!');
    }
    public function destroy($id)
{
    $customer = Customer::findOrFail($id);

    $customer->delete();

    return redirect('/customers')
        ->with('success', 'Customer deleted successfully!');
}
}
