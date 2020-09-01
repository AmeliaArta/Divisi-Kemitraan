<div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
              @if(auth()->user()->role == '1')
            <li><a href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="/infoker" class=""><i class="lnr lnr-plus-circle"></i> <span>Naskah</span></a></li>
            <li><a href="/mitras" class=""><i class="lnr lnr-users"></i> <span>Mitra</span></a></li>
            <li><a href="/naskahfinals/{id}" class=""><i class="lnr lnr-plus-circle"></i> <span>Naskah Final</span></a></li>
            <li><a href="/infokerjasamas" class=""><i class="lnr lnr-screen"></i> <span>Daftar Kerjasama</span></a></li>
            
              <!-- <li><a href="/formMail" class=""><i class="lnr lnr-envelope"></i> <span>Email</span></a></li> -->
                @endif
            @if(auth()->user()->role == '2')
             <li><a href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="/infoker" class=""><i class="lnr lnr-screen"></i> <span>Naskah</span></a></li>
            <li><a href="/infokerjasamas" class=""><i class="lnr lnr-screen"></i> <span>Info Kerjasama</span></a></li>
          @endif
           
           @if(auth()->user()->role == '3')
            <li><a href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
          <li><a href="/naskahfinals/{id}" class=""><i class="lnr lnr-plus-circle"></i> <span>Naskah Final</span></a></li>
          <li><a href="/infokerjasamas" class=""><i class="lnr lnr-screen"></i> <span>Info Kerjasama</span></a></li>
          @endif

        </nav>
      </div>
    </div>







