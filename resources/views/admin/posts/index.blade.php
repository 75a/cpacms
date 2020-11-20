@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Posts') }}</div>

                    <div class="card-body">
                        <a href="{{route('admin.posts.create')}}" class="btn btn-sm btn-primary" style="display:block;">
                            {{__('Add new')}}
                        </a>

                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th></th>
                            </tr>
                            @forelse($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-sm btn-info">
                                            {{__('Edit')}}
                                        </a>
                                        <form method="POST" action="{{route('admin.posts.destroy',$post->id)}}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="submit" value="{{__('Delete')}}" class="btn btn-sm btn-danger">

                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">{{__('No records found')}}</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
