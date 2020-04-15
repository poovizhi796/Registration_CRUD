@extends('Layout.app')
@section('title', 'Follow Up Index Page')
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
@component('component.heading')
    {{ "Course Completed Student's List" }}
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
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result as $key=>$value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->mobile }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->subject }}</td>
                    <td><a href="{{ route('registration.show', $value->id)  }}" class="badge badge-primary">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $result->links() }}
</div>
@endsection