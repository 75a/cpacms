<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing category:') }} {{$category->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <form action="/categories-manager/{{$category->id}}" method="post">
                    @csrf
                    @method('put')
                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="name"
                                     name="name"
                                     :value="$category->name"

                                      />
                        @error('name')
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

