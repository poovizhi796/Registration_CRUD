@extends('Layout.app')
@section('title', 'Registration - Course Enquiry')
@section('content')
@if ($success_text = Session::get('success'))
    @component('component.alert', ['type' => 'success'])
       {{ 'Success!' }} {{ $success_text }}
    @endcomponent
@endif
@if ($failed_text = Session::get('failed'))
    @component('component.alert', ['type' => 'danger'])
        {{ 'OOps!' }}{{ $failed_text }}
    @endcomponent
@endif
@if ($reg_data)
<div class="row">
<div class="offset-md-1 col-md-10">
@component('component.heading')
    {{ 'Walkin Students List' }}
@endcomponent
<div class="table-responsive">
<table class="container table table-primary table-striped reg_table">
    <thead>
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Subject</th>
            <th>Image</th>
            <th colspan="2" style="text-align:center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reg_data as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->mobile }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->subject }}</td>
                @if($value->photo != null)
                    <td><img src="/stud_photos/{{$value->photo }}" height="50px" width="50px" class="img-responsive"></td>
                @else
                    <td>No Image</td>
                @endif
                <td><a href="{{ route('registration.show', $value->id) }}" class="badge badge-pill badge-secondary">View</a></td>
                <td><a href="{{ route('registration.edit', $value->id) }}" class="badge badge-pill badge-warning">Edit</a></td>
                <td>
                    {{ Form::open(['route' => ['registration.destroy', $value->id], 'method' => 'DELETE']) }}
                    <button class="badge badge-pill badge-danger" type="submit">Remove</button>
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
{{ $reg_data->links() }}
</div>
</div>
@endif
@endsection