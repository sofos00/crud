@extends('master')
@section('content')

<div class="container hspace">
      <h2  class="title is-4">
       ALL POSTS
       </h2>
 </div>
 
  <div class="container hspace">
       <a href="{{route('posts.create')}}" class="button is-success">CREATE NEW POST</a>
 </div>

 
 <table class="table is-striped">
    <thead>
    <tr>
    	<th> N° 
        <th> Title
        <th> Body
        <th> Actions
    </tr>
    </thead>
    <tbody>
        
        @foreach($posts as $post)
        <tr>
            <td> {{$post->id}}
            <td> {{$post->title}}
            <td> {{$post->body}}
            <td>  <a href="{{route('posts.edit',$post->id)}}" class="button is-link">Edit</a> 
                  <form method='post' action="{{route('posts.destroy',$post->id)}}" class='inline-right'>  
                      {{csrf_field()}}
	                  <input type="hidden" name="_method" value="DELETE"/>
                      <button class="button is-danger">Delete</button>
                  </form> 
        </tr>
        @endforeach
   		
    </tbody>
    </table>
   

@endsection('content')