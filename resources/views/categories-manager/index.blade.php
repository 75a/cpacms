<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <div class="flex items-center justify-start mt-2 mb-2">
                    <x-jet-button class="ml-1" >
                        <a href="{{route('categories-manager.create')}}">{{ __('Add new') }}</a>
                    </x-jet-button>
                </div>
                <table class="w-full">
                    <thead>
                    <tr class="text-left">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)

                        <tr class="hover:bg-green-100">
                            <td>
                                {{$category->id}}
                            </td>
                            <td>
                                {{$category->name}}
                            </td>
                            <td>
                                {{$category->slug}}
                            </td>
                            <td>
                                <x-jet-button class="m-1">
                                    <a href="{{route('categories-manager.edit', $category)}}" target="_blank">
                                        {{ __('Edit') }}
                                    </a>
                                </x-jet-button>
                            </td>
                            <td>
                                <form action="/categories-manager/{{$category->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <x-jet-button class="ml-4 p-3">
                                        {{ __('Delete') }}
                                    </x-jet-button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>




            </div>
        </div>
    </div>
</x-app-layout>
