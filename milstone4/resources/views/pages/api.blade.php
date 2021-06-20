@extends('layouts.falcon')
@section('title', 'My Apis')
@section('content')

@if(!$apis->count())
<div class="card mt-2">
    <div class="card-header">Create Api Key</div>
    <div class="card-body">
        <form action="{{route('create-api')}}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-md-10">
                    <input type="text" name="words" placeholder="Enter name of api key" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif

<div class="card mt-2">
    <div class="card-header"><h4>My Apis</h4></div>
    <div class="card-body rounded-soft">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hash</th>
                    <th class="white-space-nowrap" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($apis as $index => $api)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$api->hash}}</td>
                        <td class="white-space-nowrap">
                            <a href="{{route('delete-api', $api->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @empty
                     <tr>
                         <td>Nothing to show</td>
                     </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection