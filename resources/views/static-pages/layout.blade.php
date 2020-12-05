@extends('layouts.cpacms')

@section('content')
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <section class="bg-white w-full md:w-2/3 flex flex-col items-center px-3 shadow my-4">
            <div class=" flex flex-col justify-start p-6 w-full">
                <p class="text-xl font-semibold pb-5">@yield('static-page-title')</p>
                @yield('static-content')
            </div>

        </section>
        @include('static-pages.about-us-widget')


    </div>
@endsection


