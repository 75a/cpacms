@extends('layouts.cpacms')
@section('metatitle')
    Meta title
@endsection
@section('content')
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <article class="flex flex-col shadow my-4">
                        <!-- Article Image -->
                        <div class="bg-white flex flex-col justify-start p-6 w-full">
                            <a href="/{{$post->slug}}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->featured_header}}</a>
                            <p href="#" class="text-sm pb-3">
                                Published on {{$post->updated_at}}
                            </p>
                            <a href="#" class="pb-6">{{$post->featured_description}}</a>
                        </div>
                    </article>
                @endforeach
                <!-- Pagination -->
                 {{$posts->links('welcome-paginator')}}
            @else
                <h2 class="text-xl">Sorry, no posts found in category {{$category->name}}.</h2>
            @endif

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>
        </aside>

    </div>
@endsection


