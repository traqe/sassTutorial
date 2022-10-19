@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in! Please place an enquiry') }} </br>
                    <div style="width: 6cm; padding-top: 2cm;">
                        <a style="padding-bottom: 2cm" href='/orders'><button style="background-color: rgb(154, 45, 64); padding: 7px; border-radius: 7px; border: 0;">See all enquiries</button></a>
                        <div style="height: 0.5cm;"></div>
                        <a style="padding-bottom: 2cm" href='/categories'><button style="background-color: rgb(154, 45, 64); padding: 7px; border-radius: 7px; border: 0;">See orders by category</button></a>
                        <div>
                        </div>
                    </div>
                    <div style="height: 2cm;"></div>
                    <marquee style="width: 3cm;">Place your order</marquee>
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div style="padding: 1cm; background-color: rgb(154, 45, 64); border-radius: 4px; color: white; width: 12cm;" class="p-6">
                                <!--SASS tutorial-->
                                <!--div container under laravel label-->
                                <div class="flex items-center">
                                    <form action="/home" method="POST">
                                        @csrf
                                        <label for="name">Name</label>
                                        </br>
                                        <input type="text" name="name"></br>
                                        <label for="description">Description</label>
                                        </br>
                                        <input type="text" name="description">
                                        <hr>
                                        <fieldset>
                                            <legend>Features</legend>
                                            <input type="checkbox" name="features[]" value="big">Big </br>
                                            <input type="checkbox" name="features[]" value="small">Small</br>
                                            <input type="checkbox" name="features[]" value="heavy">Heavy</br>
                                            <input type="checkbox" name="features[]" value="light">Light</br>
                                        </fieldset>
                                        <fieldset>
                                            <legend>Category</legend>
                                            <label for="microchip">Microchip</label>
                                            <input type="radio" id="rado" name="category" value="Microchip">
                                            </br>
                                            <label for="name">Microphone</label>
                                            <input type="radio" id="radio" name="category" value="Microphone">
                                            </br>
                                            <label for="name">Microprocessor</label>
                                            <input type="radio" id="radio" name="category" value="Microprocessor">
                                        </fieldset>
                                        <p> {{ session('msg') }} </p>
                                        <button style="background-color: white; padding: 7px; border-radius: 7px; border: 0;" type="submit">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endsection