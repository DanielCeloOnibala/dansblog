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
 @foreach($data as $post_terbaru)
 <div class="post post-widget">
     <a class="post-img" href=""><img src="{{ $post_terbaru->gambar }}" style="border-radius: 10px;"></a>
     <div class="post-body">
        <div class="post-category">
           <a href="">{{ $post_terbaru->category->name }}</a>
       </div>
       <h3 class="post-title"><a href="">{{ $post_terbaru->judul }}</a></h3>
   </div>
</div>
@endforeach
<!-- /post -->
</div>
<!-- /post widget -->
</div>