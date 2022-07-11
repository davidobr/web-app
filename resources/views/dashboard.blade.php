@extends('layouts.default')
@section('page-content')
    <section class="h-screen flex items-center">
        <div class="container mx-auto">
            <h1 class="text-white text-8xl mb-6 uppercase font-black">
                <h2 class="font-semibold text-xl text-white leading-tight">
                    {{ __('Dashboard') }}
                </h2>
                <div class="w-full max-w-xs" style="color:white;">
                    You're logged in, {{ Auth::user()->username }}!
                    <!-- I'll deal with this later, can't work out why it's not working as of yet 
                    <p>Want to reset your password? Sure do it <a href="#" class="text-blue-500">here</a></p>-->
                    <p>You can check the weather <a href="{{ route('weather') }}" class="text-blue-500">here</a></p>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
			    </div>
            </h1>
        </div>
    </section>        
@endsection