<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="/css/bulma.css">
    <script defer src="/js/bulma.js"></script>
	
 <style>
   .hspace{margin-bottom: 1em;}
   .top{margin-top:-2em;}
   .footer{background-color:#34495e; color:#BBB; text-align:center; font-weight:bold;}
   .main{margin-bottom:2em;}
   .inline-right{float:right; margin-left: 8px;}
  </style>
    
  </head>
  <body>

<br>

<section class="hero is-primary hspace top">
  <div class="hero-body">
      
  <div class="columns">
  <div class="column is-10">
      <h1 class="title">
       POSTS - CRUD Application
      </h1>
  </div>
  <div class="column is-2"><h1> <a href="{{route('posts.index')}}"  class='title is-4'>Home</a> </h1></div>
 </div> 

 </div>
</section>



<section class="container main">


@yield('content')


</section>


<footer class="footer">
<div class="container">      
    
        Laravel - CRUD Application.   <br>
       
    </div>
</footer>
  
  </body>
</html>