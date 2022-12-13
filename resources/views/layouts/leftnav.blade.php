@php
  use App\Enums\RoleEnum;
@endphp
<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="active">
          <a href="" ><img src="{{asset('assets/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
        </li>
        <li class="submenu">
          <a ><img src="{{asset('assets/img/icons/product.svg')}}" alt="img"><span> catégories</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="{{route('admin-categories')}}">liste des categories </a></li>
          </ul>

        </li>
                
        <li class="submenu">
          <a ><img src="{{asset('assets/img/icons/product.svg')}}" alt="img"><span> managers</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="{{route('admin-managers')}}">liste des managers </a></li>
          </ul>
        </li>
        <li class="submenu">
          <a ><img src="{{asset('assets/img/icons/product.svg')}}" alt="img"><span> locations</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="{{route('admin-location')}}">liste des locations </a></li>
          </ul>
        </li>
        
        <li class="submenu">
          <a ><img src="{{asset('assets/img/icons/product.svg')}}" alt="img"><span> produits</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="">liste des produits </a></li>
          </ul>
        </li>
        
        

        
      </ul>
    </div>
  </div>
</div>