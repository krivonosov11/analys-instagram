{{-- vertical-menu --}}
@if($configData['mainLayoutType'] == 'vertical-menu')
    <div
        class="main-menu menu-fixed @if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow"
        data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{asset('/')}}">
                        <div class="brand-logo">
                            <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
                        </div>
                        <h2 class="brand-text mb-0">
                            @if(!empty($configData['templateTitle']) && isset($configData['templateTitle']))
                                {{$configData['templateTitle']}}
                            @else
                                Profile
                            @endif
                        </h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                        <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary"
                           data-ticon="bx-disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
                data-icon-style="lines">
                <li class="nav-item">
                    <a href="{{route('profile.show', $profile->name)}}">
                        <i class="menu-livicon" data-icon="users"></i>
                        <span class="menu-title">User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profile.posts', $profile->name)}}">
                        <i class="menu-livicon" data-icon="comments"></i>
                        <span class="menu-title">User Posts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profile.dynamic', $profile->name)}}">
                        <i class="menu-livicon" data-icon="calendar"></i>
                        <span class="menu-title">User Dynamic</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profile.with', $profile->name)}}">
                        <i class="menu-livicon" data-icon="grid"></i>
                        <span class="menu-title">Compare profile</span>
                    </a>
                </li>
                <li class="nav-item" onclick="window.print();">
                    <a href="#">
                        <i class="menu-livicon" data-icon="save"></i>
                        <span class="menu-title">Save Report</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/">
                        <i class="menu-livicon" data-icon="retweet"></i>
                        <span class="menu-title">New Parse</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endif
