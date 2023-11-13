@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="mx-auto max-w-md bg-white p-6 rounded-md">
        <form method="post" action="{{ route('customer.update', ['id' => $CustomerList->id]) }}">
        @csrf
     @method('put')
            <div class="mb-4">
                <label for="Naam" class="block text-gray-700 font-semibold">Naam:</label>
                <input type="text" name="Naam" id="Naam" placeholder="Broderick Effertz" value="{{$CustomerList->Naam}}" class="w-full p-2 border rounded-md">
                @error('Naam')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="Bank_Account_Number" class="block text-gray-700 font-semibold">Bankk Account Number:</label>
                <input type="text" name="Bank_Account_Number" id="Bank_Account_Number" placeholder="5078681199" value="{{$CustomerList->Bank_Account_Number}}" class="w-full p-2 border rounded-md">
                @error('Bank_Account_Number')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="Social_Security_Number" class="block text-gray-700 font-semibold">Social Security Number:</label>
                <input type="text" name="Social_Security_Number" id="Social_Security_Number" placeholder="057-92-4913" value="{{$CustomerList->Social_Security_Number}}" class="w-full p-2 border rounded-md">
                @error('Social_Security_Number')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="submit" value="Update" class="bg-blue-500 text-white p-2 rounded-md cursor-pointer w-full">
            </div>
        </form>
        <a href="{{ url()->previous() }}" class="">Back</a>
    </div>
</body>
</html>

@endsection
