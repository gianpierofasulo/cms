<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index', compact('customers'));
    }

    public function detail($id)
    {
        $customer_detail = DB::table('customers')->where('id',$id)->first();
        return view('admin.customer.detail', compact('customer_detail'));
    }

    public function make_active($id)
    {
        $data['customer_status'] = 'Active';
        DB::table('customers')->where('id',$id)->update($data);

        return redirect()->route('admin.customer.index')->with('success', 'Customer status is changed to active successfully!');
    }

    public function make_pending($id)
    {
        $data['customer_status'] = 'Pending';
        DB::table('customers')->where('id',$id)->update($data);

        return redirect()->route('admin.customer.index')->with('success', 'Customer status is changed to pending successfully!');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $data = $request->only($customer->getFillable());

        $request->validate([
          
           'customer_email' => [
                'required', 'email', Rule::unique((new Customer)->getTable())->ignore($id ?? null)
            ],

            'customer_phone' => [
                'required', Rule::unique((new Customer)->getTable())->ignore($id ?? null)
            ],

            'customer_name' => 'required',
            'customer_country' => 'required'
        ]);

        $customer->fill($data)->save();
        return redirect()->route('admin.customer.index')->with('success', 'Customer is updated successfully!');
    }

    public function destroy($id)
    {
        DB::table('customers')->where('id', $id)->delete();

        return Redirect()->back()->with('success', 'Customer is deleted successfully!');
    }

}
