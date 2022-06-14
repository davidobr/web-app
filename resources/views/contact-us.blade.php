@extends('layouts.default')
@section('page-content')
    <section class="h-screen flex items-center">
        <div class="container mx-auto">
            <h1 class="text-white text-8xl mb-6 uppercase font-black">
                <form>
                	Name: <input type="text" name="name" style="margin: 5px 5px 5px 5px; color: black;"/><br/>
                	Subject: <input type="text" name="subject" style="margin: 5px 5px 5px 5px; color: black;"/></br>
                	Message: <textarea style="margin: 5px 5px 5px 5px; color: black;" rows="5" cols="20"></textarea><br/>
                	<input type="submit"/>
                </form>
            </h1>
        </div>
    </section>        
@endsection
