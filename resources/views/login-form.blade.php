@extends('layouts.default')
@section('page-content')
    <section class="h-screen flex items-center">
        <div class="container mx-auto">
            <h1 class="text-white text-8xl mb-6 uppercase font-black">
            	<p class="text-blue-500">Login</p>
                <div class="w-full max-w-xs">
                	<?php //Form code was taking from tailwind: https://v1.tailwindcss.com/components/forms will need to learn more about tailwind and refactor more ?>
			  <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
			    <div class="mb-4">
			      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
				Username
			      </label>
			      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" 				placeholder="John Doe">
			    </div>
			    <div class="mb-6">
			      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
				Password
			      </label>
			      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" 				type="password" placeholder="******************">
			      <?php //<p class="text-red-500 text-xs italic">Please choose a password.</p> ?>
			    </div>
			    <div class="flex items-center justify-between">
			      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
				Sign In
			      </button>
			      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
				Forgot Password?
			      </a>
			    </div>
			  </form>
			</div>
            </h1>
        </div>
    </section>        
@endsection
