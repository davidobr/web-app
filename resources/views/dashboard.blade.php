@extends('layouts.default')
@section('page-content')
    <section class="h-screen flex items-center">
        <div class="container mx-auto">
            <h1 class="text-white text-8xl mb-6 uppercase font-black">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
                <div class="w-full max-w-xs" style="color:white;">
                    You're logged in, {{ Auth::user()->username }}!
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
			    </div>
            </h1>
        </div>
    </section>        
@endsection