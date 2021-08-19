<style>
    .sidebar-brand{
        background-color: ;
        padding-right: 30px;
    }
</style>
<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">            
            <font size="3" face="calibri"><b>Homepage Admin DansBlog</b></font>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <img src="{{ asset('public') }}/gambar/DansBlogLogo.png" width="65px" height="65px">
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="active"><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i> <span>
              Dashboard</span></a></li>             
              <li class="menu-header">Starter</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Posts</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('post.index') }}">List Posts</a></li>
                  <li><a class="nav-link" href="{{ route('post.tampil_hapus') }}">Recycle Postingan</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard-list"></i> <span>Kategori</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('category.index') }}">List Kategori</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-bookmark"></i> <span>Tags</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('tag.index') }}">List Tags</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('user.index') }}">List User</a></li>
                </ul>
              </li>
                            

        </aside>
      </div>
