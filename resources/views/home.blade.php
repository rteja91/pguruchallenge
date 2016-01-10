@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col s6 propList">
                @include('proplist')
            </div>
            <div class="col s6 propDetails">
                @include('propdetails')
            </div>
        </div>
    </div>

@endsection