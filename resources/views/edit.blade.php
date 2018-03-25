@extends('master')
@section('content')

<div class="container hspace">
      <h2  class="title is-4">
       EDIT POST
       </h2>
 </div>
 
 
 <form method="post" action="{{route('posts.update',$post->id)}}">
	
    {{csrf_field()}}
		<input type="hidden" name="_method" value="PUT"/>

	<div class="field">
	  <label class="label">Title</label>
	  <div class="control">
		<input class="input" type="text"  name="title" value="{{$post->title}}">
	  </div>
	</div>
	
	<div class="field">
	  <label class="label">Body</label>
	  <div class="control">
		<textarea class="textarea" name="body">{{$post->body}}</textarea>
	  </div>
	</div>
	
	
	<div class="control">
		<button class="button is-primary">Save</button>
	</div>
	</form>

   

@endsection('content')