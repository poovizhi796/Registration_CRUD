        <div class="form-group">
            {{ Form::label('name', 'Enter Your Name')  }}
            {{ Form::text('name', null, ['class'=> 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('mobile', 'Enter Your Mobile Number')  }}
            {{ Form::number('mobile', null, ['class'=> 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('address', 'Enter Your Address')  }}
            {{ Form::textarea('address', null, ['class'=> 'form-control', 'rows'=>2]) }}
        </div>
        <div class="form-group">
            {{ Form::label('gender', 'Gender')  }}<br>
            {{ Form::radio('gender', 'male', '') }} Male <br>
            {{ Form::radio('gender', 'female', '') }} Female
        </div>
        <div class="form-group">
        {{ Form::label('Selected Subjects: ') }}<br>
            {{ Form::checkbox('subject', 'PHP', '')}} PHP
            {{ Form::checkbox('subject', 'DOTNET', '')}} DOTNET
            {{ Form::checkbox('subject', 'JAVA', '')}} JAVA
            {{ Form::checkbox('subject', 'NODE JS', '')}} NODE JS
            {{ Form::checkbox('subject', 'ANGULAR JS', '')}} ANGULAR JS
            {{ Form::checkbox('subject', 'REACT JS', '')}} REACT JS
        </div>
        <div class="form-group">
            {{ Form::label('Upload Images') }}<br>
            {{ Form::file('photo', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('District') }}
            <div class="col-md-4">
                {{ Form::select('district', ['select' => 'Select Here', 'cbe'=>'Coimbatore', 'erode' => 'Erode', 'chennai' => 'Chennai'], null, ['class' => 'form-control']) }}
            </div>
        </div>