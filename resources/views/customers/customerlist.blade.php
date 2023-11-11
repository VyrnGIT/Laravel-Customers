@extends('layouts.app')

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md border border-gray-200">
        <thead>

    <form action="{{ route('customer.create')}}">
        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
        Create
        </button>
    </form> 

            <tr class="bg-gray-100">
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Bank Account Number</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Social Security Number</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Edit User</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Delete User</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($customers as $customer)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $customer->Naam }}</td> 
                    <td class="px-6 py-4 whitespace-nowrap">{{ $customer['Bank_Account_Number'] }}</td> 
                    <td class="px-6 py-4 whitespace-nowrap">{{ $customer['Social_Security_Number'] }}</td> 
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('customer.edit', ['id' => $customer->id]) }}" class="text-blue-500 hover:underline">Edit</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form action="{{ route('customer.destroy', $customer['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     @if(session()->has('confirmed'))
        <div>
            {{session('confirmed')}}
        </div>
         @endif
</div>
@endsection
