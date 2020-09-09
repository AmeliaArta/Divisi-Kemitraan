<nav class="navbar navbar-default navbar-fixed-top">
  <div class="brand">
    <a href="/dashboard">
      <img src="/admin/assets/img/test.png" alt="Logo Del" class="img-responsive logo">
    </a>
  </div>

      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
      
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
             <li>
              <a class="update-pro"><i class="fa fa-rocket"></i> <span><?php echo date(' l, d F Y ');?></span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/images/default.png" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>