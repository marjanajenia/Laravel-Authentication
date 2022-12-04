<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href=" {{ Route('dashboard') }}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="mailbox.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Admin</label>
       <!--------------Frontend----------->
        <li class="br-menu-item">
            <a href="{{ url('/') }}" class="br-menu-link" target="_blank">
                <i class="menu-item-icon icon ion-help-buoy tx-22"></i>
                <span class="menu-item-label">Live Visit</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <!-------------Logout------------------>
        <li class="br-menu-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();"class="br-menu-link">
                    <i class="menu-item-icon icon ion-power tx-22 text-danger"></i>
                    <span class="menu-item-label">Logout</span>
                </a><!-- br-menu-link -->
            </form>
        </li><!-- br-menu-item -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
