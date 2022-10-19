@extends('layouts.layout')

@section('content-welcome')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <p style="color:white;">Orders by category</p>
                <div style="border: 2px solid; border-color: rgb(154, 45, 64); " class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <p style="color:white; background-color:rgb(154, 45, 64);"><strong>Microchip</strong></p>
                            @foreach($orders as $order)
                            @if($order->category == "Microchip")
                            <p style="color: white;">{{ $order->name }}</br></p>
                            @endif
                            @endforeach
                            <p style="color:white; background-color:rgb(154, 45, 64);"><strong>Microphone</strong></p>
                            @foreach($orders as $order)
                            @if($order->category == "Microphone")
                            <p style="color: white;">{{ $order->name }}</br></p>
                            @endif
                            @endforeach
                            <p style="color:white; background-color:rgb(154, 45, 64);"><strong>Microprocessor</strong></p>
                            @foreach($orders as $order)
                            @if($order->category == "Microprocessor")
                            <p style="color: white;">{{ $order->name }}</br></p>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="flex items-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection