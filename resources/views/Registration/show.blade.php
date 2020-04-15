@extends('Layout.app')
@section('title', 'View Registration')
@section('content')

@if ($OneRow)
    <h3 class="text-center m-2">{{ $OneRow->name }} - Record</h3>
    <div class="row">
        <div class="offset-md-2 col-md-8">
        
            <table class="table table-default table-striped reg_table nav justify-content-center">
                <tbody>
                    <tr><th>Name</th><td>{{ $OneRow->name }}</td></tr>
                    <tr><th>Mobile</th><td>{{ $OneRow->mobile }}</td></tr>
                    <tr><th>Address</th><td>{{ $OneRow->address }}</td></tr>
                    <tr><th>Gender</th><td>{{ $OneRow->gender }}</td></tr>
                    <tr><th>Subject</th><td>{{ $OneRow->subject }}</td></tr>
                    <tr><th>District</th><td>{{ $OneRow->district }}</td></tr>
                    @if($OneRow->photo != null)
                    <tr><th>Photo</th><td><img src="/stud_photos/{{$OneRow->photo }}" height="80px" width="100px" class="img-responsive"></td></tr>
                    @else
                    <tr><th>Photo</th><td>No Image</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endif

@endsection