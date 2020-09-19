@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายชื่อสาขาวิชา</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!-- เขียนส่วนแสดงผล-->

<table class="table table-bordered">
    <tr>
        <th>ลำดับที่</th>
        <th>สาขาวิชา</th>

        </tr>
        @foreach ($program as $pro)
        <tr>
            <td>{{$pro->program_id}}</td>
            <td>{{$pro->program_name}}</td>
        </tr>
        @endforeach
</table>
 {{-- Pagination --}}
 <div class="d-flex justify-content-center">

</div>{!!$program->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
