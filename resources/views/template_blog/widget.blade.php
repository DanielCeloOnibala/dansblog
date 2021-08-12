<style>
    .social-widget .gmail {
        padding: 20px;
    }
</style>
<script type="text/javascript" language="javascript">
    function myFunction()
    {

        alert("My Gmail : dasilva22.dc@gmail.com");
    }
</script>

<div class="col-md-4">				
   <!-- /ad widget -->

   <!-- social widget -->
   <div class="aside-widget">
      <div class="section-title">
         <h2 class="title">Social Media</h2>
     </div>
     <div class="social-widget">
         <ul>
            <li>
               <a href="https://www.instagram.com/celo_daniel_22/" class="social-instagram">
                  <i class="fa fa-instagram"></i>
                  <span><font size="1">@celo_daniel_22</font></span>
              </a>
          </li>
          <li>
           <a href="https://twitter.com/DanielCelo22" class="social-twitter">
              <i class="fa fa-twitter"></i>
              <span><font size="1">@Daniel_Celo22</font></span>
          </a>
      </li>
      <li>
        <div class="gmail">
          <button onclick="sweet()">Click To<br>See My Gmail</button>
        </div>
  </li>
</ul>
</div>
</div>
<!-- /social widget -->

<!-- category widget -->
<div class="aside-widget">
  <div class="section-title">
     <h2 class="title">Categories</h2>
 </div>
 <div class="category-widget">
     <ul>
        @foreach($category_widget as $hasil)
            <li><a href="{{ route('blog.category', $hasil->slug) }}">{{$hasil->name}} <span>{{ $hasil->post->count() }}</span></a></li>
        @endforeach
    </ul>
</div>
</div>
<!-- /category widget -->

<!-- post widget -->
<div class="aside-widget">
  <div class="section-title">
     <h2 class="title">Popular Posts</h2>
 </div>
 <!-- post -->
 <div class="post post-widget">
     <a class="post-img" href="blog-post.html"><img src="{{ asset('public') }}/callie/img/widget-3.jpg" alt=""></a>
     <div class="post-body">
        <div class="post-category">
           <a href="category.html">Lifestyle</a>
       </div>
       <h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
   </div>
</div>
<!-- /post -->

<!-- post -->
<div class="post post-widget">
 <a class="post-img" href="blog-post.html"><img src="{{ asset('public') }}/callie/img/widget-2.jpg" alt=""></a>
 <div class="post-body">
    <div class="post-category">
       <a href="category.html">Technology</a>
       <a href="category.html">Lifestyle</a>
   </div>
   <h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
</div>
</div>
<!-- /post -->

<!-- post -->
<div class="post post-widget">
 <a class="post-img" href="blog-post.html"><img src="{{ asset('public') }}/callie/img/widget-4.jpg" alt=""></a>
 <div class="post-body">
    <div class="post-category">
       <a href="category.html">Health</a>
   </div>
   <h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
</div>
</div>
<!-- /post -->

<!-- post -->
<div class="post post-widget">
 <a class="post-img" href="blog-post.html"><img src="{{ asset('public') }}/callie/img/widget-5.jpg" alt=""></a>
 <div class="post-body">
    <div class="post-category">
       <a href="category.html">Health</a>
       <a href="category.html">Lifestyle</a>
   </div>
   <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
</div>
</div>
<!-- /post -->
</div>
<!-- /post widget -->
</div>