  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('storage/app/'.$company_info->logo)}}" alt="AdminLTE Logo" class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PMS BD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/admin_asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=auth()->user()->name;?></a>
        </div>
      </div>
      <?php
        $user = Auth::user();
      ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link @if(request()->is(['home'])) active @endif">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

         <li class="nav-item">
              <a href="{{ url('sliders') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Slider
                </p>
              </a>
         </li>

{{--        <li class="nav-item">--}}
{{--          <a  href="{{ url('pos') }}" class="nav-link @if(request()->is(['pos'])) active @endif">--}}
{{--            <i class="fas fa-users nav-icon"></i>--}}
{{--            <p>--}}
{{--              Pos--}}
{{--            </p>--}}
{{--          </a>--}}
{{--        </li>--}}

{{--        <li class="nav-item">--}}
{{--          <a href="{{ url('customer') }}" class="nav-link @if(request()->is(['customer'])) active @endif">--}}
{{--            <i class="fas fa-users nav-icon"></i>--}}
{{--            <p>--}}
{{--              Customer--}}
{{--            </p>--}}
{{--          </a>--}}
{{--        </li>--}}

{{--        @if($user->can('view-user'))--}}
{{--        <li class="nav-item">--}}
{{--          <a href="{{url('users')}}" class="nav-link @if(request()->is(['users'])) active @endif">--}}
{{--            <i class="fas fa-users-cog nav-icon"></i>--}}
{{--            <p>--}}
{{--              Users--}}
{{--            </p>--}}
{{--          </a>--}}
{{--        </li>--}}
{{--        @endif--}}

        <li class="nav-item">
          <a href="{{ url('products') }}" class="nav-link @if(request()->is(['products'])) active @endif">
            <i class="fas fa-users nav-icon"></i>
            <p>
              Product
            </p>
          </a>
        </li>

@if($user->hasRole('super-admin'))
      @if($user->can('view-setting'))
        <li class="nav-item has-treeview @if(request()->is(['brands','categories','attributes','units'])) active menu-open @endif"  >
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Settings
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
{{--            @if($user->can('view-brand'))--}}
{{--            <li class="nav-item">--}}
{{--              <a href="{{url('brands')}}" class="nav-link @if(request()->is(['brands'])) active @endif">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>--}}
{{--                  Brand--}}
{{--                </p>--}}
{{--              </a>--}}
{{--            </li>--}}
{{--            @endif--}}
            <li class="nav-item">
              <a href="{{url('categories')}}" class="nav-link @if(request()->is(['categories'])) active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Category</p>
              </a>
            </li>
{{--            <li class="nav-item">--}}
{{--              <a href="{{url('attributes')}}" class="nav-link @if(request()->is(['attributes'])) active @endif">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>--}}
{{--                  Attribute--}}
{{--                </p>--}}
{{--              </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--              <a href="units" class="nav-link @if(request()->is(['units'])) active @endif">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>Unit</p>--}}
{{--              </a>--}}
{{--            </li>--}}
          </ul>
        </li>
     @endif
{{--        <li class="nav-item has-treeview @if(request()->is(['roles','permissions'])) active menu-open @endif">--}}
{{--          <a href="#" class="nav-link">--}}
{{--            <i class="nav-icon fas fa-user-lock"></i>--}}
{{--            <p>--}}
{{--              Role Permission--}}
{{--              <i class="right fas fa-angle-left"></i>--}}
{{--            </p>--}}
{{--          </a>--}}
{{--          <ul class="nav nav-treeview">--}}
{{--            <li class="nav-item">--}}
{{--              <a href="{{url('roles')}}" class="nav-link @if(request()->is(['roles'])) active @endif">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>--}}
{{--                  Roles--}}
{{--                </p>--}}
{{--              </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--              <a href="{{url('permissions')}}" class="nav-link @if(request()->is(['permissions'])) active @endif">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>--}}
{{--                  Permissions--}}
{{--                </p>--}}
{{--              </a>--}}
{{--            </li>--}}
{{--          </ul>--}}

{{--        </li>--}}

      <li class="nav-item">
          <a href="{{ url('pages') }}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Pages
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ url('company/1/edit') }}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Company Info
            </p>
          </a>
        </li>

@endif
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>
            {{ __('Logout') }}
          </p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
          </form>
        </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
