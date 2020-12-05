@extends('layouts.cpacms')
@section('metatitle', env('CONTENTS_HOMETITLE'))
@section('metadescription', env('CONTENTS_HOMEDESCRIPTION'))
@section('metaauthor', env('CONTENTS_HOMEAUTHOR'))
@section('content')
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            @foreach ($posts as $post)
                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                    <div class="bg-white flex flex-col justify-start p-6 w-full">
                        <a href="{{$post->category->publicPath()}}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->name}}</a>
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

        </section>
        @include('static-pages.about-us-widget')


    </div>
@endsection


