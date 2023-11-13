<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerList;

class CustomerListController extends Controller
{
    public function index()
    {

        // rediret( url('/bla'));
        $customers = CustomerList::all();

        return view('customers.customerlist', ['customers' => $customers]);
    }   

    public function destroy($id)
{
        $customer = CustomerList::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.list')->with('success', 'Customer deleted successfully.');

}

    public function create()
    {
        return view('customers.customercreate');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Naam' => 'required|regex:/^[A-Z][a-zA-Z\s]{1,18}[a-zA-Z]$/',
            'Bank_Account_Number' => 'required|numeric|min:100000',
            'Social_Security_Number' => 'required|regex:/^\d{3}-\d{2}-\d{4}$/',
        ], [
            'Naam.required' => 'The Name field is required.',
            'Naam.regex' => 'The Name field must start with a capital letter and be between 3 and 15 characters, it can only contain alphabetical characters.',
            'Bank_Account_Number.required' => 'The Bank Account Number field is required.',
            'Bank_Account_Number.numeric' => 'The Bank Account Number must be a numeric value.',
            'Bank_Account_Number.min' => 'The Bank Account Number must be at least 6 digits.',
            'Social_Security_Number.required' => 'The Social Security Number field is required.',
            'Social_Security_Number.regex' => 'The Social Security Number must be in the format XXX-XX-XXXX with a numeric value.',
        ]);        

        $newCustomer = CustomerList::create($data);

        return redirect(route('customer.list'));

        }

        
        public function edit(Customerlist $id)
        {
            return view('customers.customeredit', ['CustomerList' => $id]);
        }


        public function update(CustomerList $id, Request $request)
        {
            $data = $request->validate([
                'Naam' => 'required|regex:/^[A-Z][a-zA-Z\s]{1,18}[a-zA-Z]$/',
                'Bank_Account_Number' => 'required|numeric|min:100000',
                'Social_Security_Number' => 'required|regex:/^\d{3}-\d{2}-\d{4}$/',
            ], [
                'Naam.required' => 'The Name field is required.',
                'Naam.regex' => 'The Name field must start with a capital letter and be between 3 and 15 characters. It can only contain Alphabetical characters',
                'Bank_Account_Number.required' => 'The Bank Account Number field is required.',
                'Bank_Account_Number.numeric' => 'The Bank Account Number must be a numeric value.',
                'Bank_Account_Number.min' => 'The Bank Account Number must be at least 6 digits.',
                'Social_Security_Number.required' => 'The Social Security Number field is required.',
                'Social_Security_Number.regex' => 'The Social Security Number must be in the format XXX-XX-XXXX with a numeric value.',
            ]);     

            $id->update($data);

            return redirect(route('customer.list'))->with('confirmed', 'Product succesfully updated!');
        }
        
}
