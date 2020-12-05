@if ($paginator->hasPages())
    <div class="flex items-center py-8">
        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-end mr-3">
                <i class="fas fa-arrow-left mr-2"></i>
            </a>
        @endif
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span>{{ $element }}</span>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="{{$url}}" class="h-10 w-5 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-xs flex items-center justify-center">
                            {{$page}}
                        </a>
                    @else
                        <a href="{{$url}}" class="h-10 w-5 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-xs flex items-center justify-center">
                            {{$page}}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        @endif
    </div>

@endif







