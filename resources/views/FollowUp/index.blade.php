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
    {{ "Today Follow Up - Yesterday Registered Student's List" }}
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
                <th>Status</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $key=>$value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->mobile }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->subject }}</td>
                    <td>{{ Form::open(['url' => 'followup/update_row', 'method' => 'post']) }}
                        {{ Form::hidden('Row_id', $value->id, ['class' => 'hidden_id']) }}
                        <select onChange="this.form.submit()" name="status">
                            <option selected="selected">{{ $value->status }}</option>
                            <option value="Joined">Joined</option>
                            <option value="Not-Interested">Not-Interested</option>
                            <option value="Not-Joined">Not-Joined</option>
                        </select>
                        {{ Form::close() }}
                    </td>
                    <td><a href="{{ route('registration.show', $value->id)  }}" class="badge badge-primary">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $results->links() }}
</div>
<script>
$(document).ready( function () {
    $('.status_update').click( function(){
        var Pos = $(this).closest('tr').index();
        var hidden_id = $(this).closest('td').find('.hidden_id').val();
        //sweet alert start
        $('#myModal').modal('show');
        //sweet alert end here
    });
});
</script>
@endsection