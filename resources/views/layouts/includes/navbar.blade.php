<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
           <h1 class="offcanvas-title" id="sidebarMenuLabel" style="margin-left: 40px;">Blog Posts System</h1> 
         
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <!-- <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{route('posts.index')}}">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Posts
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="{{route('posts.index')}}">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Users
              </a>

            </li>
            -->

           <hr class="my-3"> 

           <ul class="nav flex-column mb-auto"> 
  
             <li class="nav-item"> 
           
            <div style="width: 100%; overflow: hidden;">
       
              <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                     style="float: left;">
                                        <svg class="bi"><use xlink:href="#door-closed"/></svg>             
                                        {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}"  method="POST" class="d-none">
                                        @csrf
              </form>
        
           </div> 
             </li> 
          </ul> 
        </div>
      </div>
    </div>