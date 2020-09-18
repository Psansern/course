@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!-- เขียนส่วนแสดงผล-->
{{@count}}
<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>name</th>
        <th width="280px">Action</th>
        </tr>
        @foreach ($faculty as $faculty)
        <tr>
            <td>{{$faculty->faculty_id}}</td>
            <td>{{$faculty->faculty_name}}</td>
        </tr>
        @endforeach
</table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
