@extends('Layout.app')
@section('title', 'Regular Classes')
@section('content')
@if($successtext = Session::get('success'))
    @component('component.alert', ['type' => 'success'])
        {{ $successtext }}
    @endcomponent
@endif
@if ($failed_text = Session::get('failed'))
    @component('component.alert', ['type' => 'danger'])
        {{ 'OOps!' }}{{ $failed_text }}
    @endcomponent
@endif
<!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    {{ Form::open(['action' => 'RegularController@block', 'method' => 'post']) }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Reason</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <textarea name="reason" class="form-control" placeholder="Enter the Reson for why u block or discontinue..."></textarea>
                    <input type="hidden" name="hidden_block_id" id="hidden_block_id">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    {{ Form::close() }}
    </div>
    <div class="row">
        @foreach($result as $value)
        <div class="col-md-3">
            <div class="card text-white bg-dark border-success mb-3" style="max-width: 18rem;">
                <div class="card-header bg-transparent border-secondary"> {!! '<b>Student Name</b> - '.$value->name !!}</div>
                <div class="card-body text-white">
                    <h5 class="card-title">{{ $value->subject }}</h5>
                    <p class="card-text">
                        {{ $value->mobile }}
                        <div class="clearfix"></div>
                        {{ $value->created_at  }}
                    </p>
                </div>
                <div class="card-footer bg-transparent border-secondary">
                    <a href="{{ url('completed', $value->id) }}" class="btn btn-success">Completed</a>
                    <a href="" data-id="{{ $value->id }}" class="btn btn-danger block_btn" data-toggle="modal" data-target="#exampleModalLong">Block</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script>
    $(document).ready(function (){
        $('.block_btn').click(function(){
            var data_id = $(this).attr('data-id');
            $('#hidden_block_id').val(data_id);
        });
    });
    </script>
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
