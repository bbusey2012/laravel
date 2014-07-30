{{ Form::open() }}

//Text field with a default value
{{ Form::text('email', 'Your email') }}

//Regular text field
{{ Form::text('username') }}
 
 // Regular password field
{{ Form::password('password') }}
 
// Password field with a default value
{{ Form::text('password', 'Password') }}

{{Form::close()}}