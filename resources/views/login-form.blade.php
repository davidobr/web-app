@extends('layouts.default')
@section('page-content')
    <section class="h-screen flex items-center">
        <div class="container mx-auto">
            <h1 class="text-white text-8xl mb-6 uppercase font-black">
                <form method="post">
                	Username: <input type="input" name="user" style="margin-left: 0.5%; margin-bottom: 5px;"/><p>
                	Password: <input type="password" name="password" style="margin-left: 0.115%; margin-bottom: 5px;"/><br/>
                	<input type="submit" style="position: relative; left: 8.1%;"/>
                </form>
            </h1>
        </div>
    </section>        
@endsection