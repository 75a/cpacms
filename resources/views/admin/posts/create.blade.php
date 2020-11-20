@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add new post') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('admin.posts.store')}}">
                            @csrf
                            Title:
                            <input type="text" name="title" class="form-control">
                            <input type="submit" value="{{__('Save')}}" class="btn btn-primary" style="margin-top:15px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
