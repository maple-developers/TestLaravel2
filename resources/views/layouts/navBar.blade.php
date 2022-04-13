<style>
    #logoutButton {
        color: #ffffff;
        background-color: #0e1726;
        border: aliceblue;
    }

</style>
<div class="header-container">
    <header class="header navbar navbar-expand-sm">

        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg></a>

        <div class="nav-logo align-self-center">
            <a class="navbar-brand" href="index.php"><img alt="logo" src="../assets/img/logo.png"> <span
                    class="navbar-brand-name">Maple Systems</span></a>
        </div>
        <marquee scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();" id="currentCallMarquee"
            style="font-size: 30px;font-family: HIGHSPEED;">
        </marquee>

        <ul class="navbar-item flex-row nav-dropdowns">
            <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="../assets/img/logo.png" class="img-fluid" alt="admin-profile">
                        <div class="media-body align-self-center">
                            @if (isset(Auth::user()->id))
                                <h6><span>Hi,</span> {{ Auth::user()->name }}</h6>
                            @endif
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
                    <div class="">
                        <div class="dropdown-item">
                            <a class="" href="user_profile.html"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> My Profile</a>
                        </div>
                        <div class="dropdown-item">
                            <form action="{{ url('logout') }}" method="post">
                                @csrf
                                <button id="logoutButton" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> Sign Out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
