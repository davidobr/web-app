@extends('layouts.default')
@section('page-content')
    <section class="h-screen flex items-center">
        <div class="container mx-auto">
            <h1 class="text-white text-8xl mb-6 uppercase font-black">
                <h2 class="font-semibold text-xl text-white leading-tight">
                    {{ __('Weather') }}
                </h2>
                <div class="w-full max-w-xs" style="color:white;">
                    <form method="get" action="{{ route('weather') }}" class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <p>Please enter the city you wish to see the weather for:</p>
                        <input type="text" for="weather-search" name="weather" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="London" value="London"/><br/>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">{{ __('Submit') }}</button>
                    </form>
                </div>
            </h1>
        </div>
        <div id="weather-app" class="flex pt-16 rounded" style="position: relative; left: -45%;">
            <div class="weather-container font-sans w-128 max-w-lg overflow-hidden bg-gray-900 shadow-lg mt-4 text-white">
                <div class="current-weather flex items-center justify-between px-6 py-8 bg-black">
                    <div class="flex items-center">
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



                <!--
                    
                Potential work in the future, won't be addressing this right now
                
                
                
                <div class="future-weather text-sm bg-gray-800 px-6 py-8 overflow-hidden">
                    <div class="flex items-center mt-8">
                        <div class="w-1/6 text-lg text-gray-200">MON</div>
                        <div class="w-1/6 px-4 flex items-center">Icon</div>
                        <div class="ml-3">Cloudy with a chance of showers</div>
                        <div class="w-1/6 text-right">
                            <div>4°C</div>
                            <div>2°C</div>
                        </div>
                    </div>
                    <div class="flex items-center mt-8">
                        <div class="w-1/6 text-lg text-gray-200">TUE</div>
                        <div class="w-1/6 px-4 flex items-center">Icon</div>
                        <div class="ml-3">Raining with a chance of sun</div>
                        <div class="w-1/6 text-right">
                            <div>6°C</div>
                            <div>3°C</div>
                        </div>
                    </div>
                    <div class="flex items-center mt-8">
                        <div class="w-1/6 text-lg text-gray-200">WED</div>
                        <div class="w-1/6 px-4 flex items-center">Icon</div>
                        <div class="ml-3">Sunny with a chance of rain</div>
                        <div class="w-1/6 text-right">
                            <div>12°C</div>
                            <div>9°C</div>
                        </div>
                    </div>

                </div> <!-- End future weather div -->
                <p class="text-white">Powered by <a href="https://www.weatherapi.com/" title="Weather API">WeatherAPI.com</a></p>
                <a href="https://www.weatherapi.com/" title="Free Weather API"><img src='//cdn.weatherapi.com/v4/images/weatherapi_logo.png' alt="Weather data by WeatherAPI.com" border="0"></a>
            </div> <!-- End of the weather container -->
        
        </div> <!-- End of the weather app --> 
    </section>      
@endsection
