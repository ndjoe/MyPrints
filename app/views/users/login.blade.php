{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
    <h2 class="form-signin-heading">Silahkan Login</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
     <div class='form-group'>
        {{ Form::text('username', null, array('class'=>'form-control','placeholder'=>'username')) }} 
     </div>
     <div class='form-group'>
        {{ Form::password('password', array('class'=>'form-control','placeholder'=>'Password')) }} 
     </div>
    {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}