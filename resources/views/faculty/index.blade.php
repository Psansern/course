@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายชื่อคณะและศูนย์สำนัก</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<!-- เขียนส่วนแสดงผล-->

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>คณะ</th>

        </tr>
        @foreach ($faculty as $fac)
        <tr>
            <td>{{$fac->faculty_id}}</td>
            <td>{{$fac->faculty_name}}</td>
        </tr>
        @endforeach
</table>
 {{-- Pagination --}}
 <div class="d-flex justify-content-center">

</div>{!!$faculty->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
