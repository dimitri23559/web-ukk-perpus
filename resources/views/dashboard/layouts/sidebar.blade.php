<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                  href="/dashboard">
                  <span data-feather="home"></span>
                  Dashboard
              </a>
          </li>
          @can('admin')
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/blogs*') ? 'active' : '' }}" href="/dashboard/blogs">
                  <span data-feather="file-text"></span>
                  My Blogs
              </a>
          </li>
      </ul>

      
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Administrator</span>
          </h6>
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                      href="/dashboard/categories">
                      <span data-feather="grid"></span>
                      Blog Categories
                  </a>
              </li>
          </ul>
      @endcan
  </div>
</nav>
