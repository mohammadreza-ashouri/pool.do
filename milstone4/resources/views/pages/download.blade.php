@extends('layouts.falcon')
@section('title', 'Dwonload')
@section('content')
<div class="card mt-2">
    <div class="card-header">Download</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tool Name</th>
                    <th scope="col">Download Link</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($downloads as $index => $download)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$download->name}}</td>
                        <td>
                            <a href="{{$download->link}}"><span class="fa fa-download"></span> Download</a>
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