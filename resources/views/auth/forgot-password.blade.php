@extends('layouts.default')
@section('page-content')
    <section class="h-screen flex items-center">
        <div class="container mx-auto">
            <h1 class="text-white text-8xl mb-6 uppercase font-black">
            	<p class="text-blue-500">Forgot password? No problem</p>
                <div class="w-full max-w-xs">
                	<?php //Form code was taking from tailwind: https://v1.tailwindcss.com/components/forms will need to learn more about tailwind and refactor more ?>
			  <form method="POST" action="{{ route('password.email') }}" class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
			  @csrf
			    <div class="mb-4">
			      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
				Email address
			      </label>
			      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" 				placeholder="John Doe">
			    </div>
			    <div class="flex items-center justify-between mb-6">			      
                  <button class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    {{ __('Reset Password') }}
                </button>
			    </div>
			  </form>
			  <!-- Session Status -->
			  <x-auth-session-status class="mb-4" :status="session('status')" />

			  <!-- Validation Errors -->
			  <x-auth-validation-errors class="mb-4" :errors="$errors" />
			</div>
            </h1>
        </div>
    </section>        
@endsection
