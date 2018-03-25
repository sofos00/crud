@extends('master')
@section('content')

<div class="container hspace">
      <h2  class="title is-4">
       CREATE NEW POST
       </h2>
 </div>
 
 
 <form method="post" action="{{route('posts.store')}}">
	
    {{csrf_field()}}

	<div class="field">
	  <label class="label">Title</label>
	  <div class="control">
		<input class="input" type="text"  name="title">
	  </div>
	</div>
	
	<div class="field">
	  <label class="label">Body</label>
	  <div class="control">
		<textarea class="textarea" name="body"></textarea>
	  </div>
	</div>
	
	
	<div class="control">
		<button class="button is-primary">Save</button>
	</div>
	</form>

   

@endsection('content')