@extends('layouts.falcon')
@section('title', 'Configuration')

@section('content')


@if($api)
  <div class="card mt-2">
      <div class="card-header">
          Api Key: {{$api->hash}}
      </div>
      <div class="card-header">Bind</div>
      <div class="card-body">
          <form action="{{route('config-save')}}" method="POST">
              @csrf
              <div class="form-group row">
                  <div class="col-lg-10 col-md-10">
                      <input type="text" name="signature_data" placeholder="Enter your signature data" class="form-control" required>
                  </div>
                  <div class="col-lg-2 col-md-2">
                      <button type="submit" class="btn btn-primary" style="width:100%">Bind</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
@endif

<div class="card">
</div>

 <div class="card mt-2">
     <div class="card-header">Configuration Settings</div>
     <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Finger Print</th>
                    <th scope="col">Time</th>
                    <th scope="col">Public Key</th>
                    <th scope="col">Status</th>
                    <th class="white-space-nowrap" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($configs as $index => $config)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$config->finger_print}}</td>
                        <td>{{$config->created_at}}</td>
                        <td>{{$config->ppk}}</td>
                        <td>
                            @if($config->status)
                             <span class="btn btn-default btn-light">Successful</span>
                             @else 
                             <span class="alert alert-warning">Processing</span>
                            @endif
                        </td>
                        <td class="white-space-nowrap">
                            <a href="{{route('config-delete', $config->id)}}" class="btn btn-danger btn-sm">Delete</a>
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