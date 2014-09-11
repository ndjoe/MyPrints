

{{ Form::open(array('url'=>'/create', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Please Register</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
     <div class='form-group'>
        {{ Form::text('username', null, array('class'=>'form-control','placeholder'=>'username')) }} 
     </div>
     <div class='form-group'>
        {{ Form::text('email', null, array('class'=>'form-control','placeholder'=>'Email Address')) }} 
     </div>
     <div class='form-group'>
        {{ Form::password('password', array('class'=>'form-control','placeholder'=>'Password')) }} 
     </div>
     <div class='form-group'>
        {{ Form::password('password_confirmation', array('class'=>'form-control','placeholder'=>'Confirm Password')) }} 
     </div>
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}