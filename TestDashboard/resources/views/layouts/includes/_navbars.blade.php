<nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
       <!--  <a href="index.html"><img src="{{asset('admin/assets/img/logo-dark.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a> -->
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <!-- <form class="navbar-form navbar-left" method="GET" action="/pegawai">
          <div class="input-group">
            <input name="cari" type="text" value="" class="form-control" placeholder="Search">
            <span class="input-group-btn"><button type="submit" class="btn btn-primary">Search</button></span>
          </div>
        </form> -->
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
             <li>
              <a class="update-pro"><i class="fa fa-rocket"></i> <span><?php echo date(' l, d F Y ');?></span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/images/default.png" class="img-circle" alt="Avatar"> <span></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="/login"><i class="lnr lnr-exit"></i> <span>Login</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>