@extends('layouts.layout')

@section('content-welcome')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <p style="color:white;">All the orders</p>
                <p style="color:white;"> {{ session('delete') }} </p>
                @foreach($orders as $order)
                <div style="border: 2px solid; border-color: rgb(154, 45, 64); " class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <p style="color:white;"><strong>name:</strong> {{ $order->name }} </p>
                            <p style="color:white;"><strong>ordered by:</strong> {{ $order->user['name'] }} </p>
                            <p style="color:white;"><strong>description:</strong> {{ $order->description }} </p>
                            <p style="color:white;"><strong>features:</strong> </br></p>
                            @foreach($order->features as $feature)
                            <p style="color:white;padding-left: 1.6cm;"> {{ $feature }} </br></p>
                            @endforeach
                            <form action="/orders/{{ $order->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button style="background-color: rgb(154, 45, 65); padding: 7px; border-radius: 7px;" type="submit">CHECK ORDER</button>
                            </form>
                        </div>
                    </div>
                    <div class="flex items-center">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @endsection