<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing post:') }} {{$post->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <form action="/post-manager/{{$post->id}}" method="post">
                    @csrf
                    @method('put')
                    <div>
                        <x-jet-label for="category_id" value="Category" />
                        <select name="category_id" id="category_id" class="form-select mt-1 block w-full">
                            @foreach ($categories as $category)

                                <option value="{{$category->id}}"
                                    @if ($category->name === $post->category->name)
                                        selected
                                    @endif
                                >
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <x-jet-label for="metatitle" value="Meta title" />
                        <x-jet-input class="block mt-1 w-full" type="text" id="metatitle"
                                     name="metatitle" :value="$post->metatitle"/>
                        @error('metatitle')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="metadescription" value="Meta description" />
                        <textarea class="border p-2 w-full" id="metadescription" name="metadescription">{{$post->metadescription}}</textarea>
                        @error('metadescription')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="metaauthor" value="Meta author" />
                        <x-jet-input class="block mt-1 w-full" type="text" id="metaauthor" name="metaauthor" :value="$post->metaauthor"/>
                        @error('metaauthor')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="slug" value="Slug" />
                        <x-jet-input id="slug" class="block mt-1 w-full" type="text"
                                     name="slug" :value="$post->slug"

                        />
                        @error('slug')
                        <small>{{$message}}</small>
                        @enderror
                    </div>


                    <div>
                        <x-jet-label for="logo_text" value="logo_text" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="logo_text" id="logo_text" :value="$post->logo_text"/>
                        @error('logo_text')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="logo_src" value="logo_src" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="logo_src" id="logo_src" :value="$post->logo_src"/>
                        @error('logo_src')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="menu_link_text" value="menu-link-text" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="menu_link_text" id="menu_link_text" :value="$post->menu_link_text"/>
                        @error('menu_link_text')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="menu_link_product_name" value="menu_link_product_name" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="menu_link_product_name" id="menu_link_product_name" :value="$post->menu_link_product_name"/>
                        @error('menu_link_product_name')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="menu_link_product_url" value="menu_link_product_url" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="menu_link_product_url" id="menu_link_product_url" :value="$post->menu_link_product_url"/>
                        @error('menu_link_product_url')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="featured_header" value="featured_header" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="featured_header" id="featured_header" :value="$post->featured_header"/>
                        @error('featured_header')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="featured_description" value="featured_description" />
                        <textarea class="border p-2 w-full" id="featured_description" name="featured_description">{{$post->featured_description}}</textarea>
                        @error('featured_description')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="featured_image_src" value="featured_image_src" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="featured_image_src" id="featured_image_src" :value="$post->featured_image_src"/>
                        @error('featured_image_src')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="featured_image_alt" value="featured_image_alt" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="featured_image_alt" id="featured_image_alt" :value="$post->featured_image_alt"/>
                        @error('featured_image_alt')
                        <small>{{$message}}</small>
                        @enderror
                    </div>


                    <div>
                        <x-jet-label for="article_header" value="article_header" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="article_header" id="article_header" :value="$post->article_header"/>
                        @error('article_header')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="article_text" value="article_text" />
                        <textarea class="border p-2 w-full" id="article_text" name="article_text">{{$post->article_text}}</textarea>
                        @error('article_text')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="generator_header" value="generator_header" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="generator_header" id="generator_header" :value="$post->generator_header"/>
                        @error('generator_header')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="inputs" value="inputs" />
                        <textarea class="border p-2 w-full" id="inputs" name="inputs">{{$post->inputs}}</textarea>
                        @error('inputs')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="call_to_action_header" value="call_to_action_header" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="call_to_action_header" id="call_to_action_header" :value="$post->call_to_action_header"/>
                        @error('call_to_action_header')
                        <small>{{$message}}</small>
                        @enderror
                    </div>

                    <div>
                        <x-jet-label for="call_image1_src" value="Call to action: Image #1 URL" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="call_image1_src" id="call_image1_src" :value="$post->call_image1_src"/>
                        @error('call_image1_src')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="call_image1_alt" value="Call to action: Image #1 description" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="call_image1_alt" id="call_image1_alt" :value="$post->call_image1_alt"/>
                        @error('call_image1_alt')
                        <small>{{$message}}</small>
                        @enderror
                    </div>


                    <div>
                        <x-jet-label for="call_image2_src" value="Call to action: Image #2 URL" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="call_image2_src" id="call_image2_src" :value="$post->call_image2_src"/>
                        @error('call_image2_src')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="call_image2_alt" value="Call to action: Image #2 description" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="call_image2_alt" id="call_image2_alt" :value="$post->call_image2_alt"/>
                        @error('call_image2_alt')
                        <small>{{$message}}</small>
                        @enderror
                    </div>


                    <div>
                        <x-jet-label for="call_image3_src" value="Call to action: Image #3 URL" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="call_image3_src" id="call_image3_src" :value="$post->call_image3_src"/>
                        @error('call_image3_src')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="call_image3_alt" value="Call to action: Image #3 description" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="call_image3_alt" id="call_image3_alt" :value="$post->call_image3_alt"/>
                        @error('call_image3_alt')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <!-- Generator -->
                    <div>
                        <x-jet-label for="connecting" value="connecting" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="connecting" id="connecting" :value="$post->connecting"/>
                        @error('connecting')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="connected" value="connected" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="connected" id="connected" :value="$post->connected"/>
                        @error('connected')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="secondstep" value="secondstep" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="secondstep" id="secondstep" :value="$post->secondstep"/>
                        @error('secondstep')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="secondstepfinished" value="secondstepfinished" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="secondstepfinished" id="secondstepfinished" :value="$post->secondstepfinished"/>
                        @error('secondstepfinished')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="thirdstep" value="thirdstep" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="thirdstep" id="thirdstep" :value="$post->thirdstep"/>
                        @error('thirdstep')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="thirdsteperror" value="thirdsteperror" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="thirdsteperror" id="thirdsteperror" :value="$post->thirdsteperror"/>
                        @error('thirdsteperror')
                        <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div>
                        <x-jet-label for="thirdstepwaiting" value="thirdstepwaiting" />
                        <x-jet-input class="block mt-1 w-full" type="text"
                                     name="thirdstepwaiting" id="thirdstepwaiting" :value="$post->thirdstepwaiting"/>
                        @error('thirdstepwaiting')
                        <small>{{$message}}</small>
                        @enderror
                    </div>




                    <div class="flex items-center justify-start mt-4">
                        <x-jet-button class="ml-4 p-3">
                            {{ __('Edit') }}
                        </x-jet-button>
                    </div>

               </form>
            </div>
        </div>
    </div>
</x-app-layout>

