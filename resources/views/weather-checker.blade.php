@extends('layouts.default')

@section('page-content')
    <section class="h-screen flex sm:flex-row flex-col items-center w-full">
        <!-- Form Section -->
        <div class="container mx-auto mb-4 sm:mb-0 sm:w-1/2 sm:mr-4 mt-40">
            <h1>
                <h2 class="font-semibold text-xl text-white leading-tight">
                    {{ __('Weather') }}
                </h2>
                <div class="max-w-xs" style="color:white;">
                    <form method="get" action="{{ route('weather') }}" class="shadow-md rounded px-8 pt-6 pb-8">
                        <p>Please enter the city you wish to see the weather for:</p>
                        <input type="text" id="weather-search" name="weather" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="London" value="London"/><br/>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">{{ __('Submit') }}</button>
                    </form>
                </div>
            </h1>
        </div>

        <!-- Weather App Section -->
        <div id="weather-app" class="flex sm:w-1/2 rounded">
            <div class="weather-container font-sans w-full max-w-lg overflow-hidden bg-gray-900 shadow-lg text-white">
                <div class="current-weather flex flex-col sm:flex-row items-center justify-between px-6 py-8 bg-black">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <div>
                            <div class="text-6xl font-semibold">{{ round($current) }}°C</div>
                            <div>{{ round($feelslike) }}°C</div>
                        </div>
                        <div class="mx-5">
                            <div class="font-semibold">{{ $condition }}</div>
                            <div class="font-semibold">{{ $location }}</div>
                        </div>
                    </div>
                    <div><img src="{{ $icon }}"/></div>
                </div> <!-- End of current weather div -->

                <p class="text-white">Powered by <a href="https://www.weatherapi.com/" title="Weather API">WeatherAPI.com</a></p>
                <a href="https://www.weatherapi.com/" title="Free Weather API"><img src='//cdn.weatherapi.com/v4/images/weatherapi_logo.png' alt="Weather data by WeatherAPI.com" border="0"></a>
            </div> <!-- End of the weather container -->
        </div> <!-- End of the weather app -->
    </section>      
@endsection
