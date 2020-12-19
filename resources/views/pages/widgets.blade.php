@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Widgets')
{{-- vendor scripts --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/dragula.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/widgets.css')}}">
@endsection
@section('content')
<!-- Widgets Statistics start -->
<section id="widgets-Statistics">
  <div class="row">
    <div class="col-12 mt-1 mb-2">
      <h4>Statistics</h4>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body">
            <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
              <i class="bx bx-edit-alt font-medium-5"></i>
            </div>
            <p class="text-muted mb-0 line-ellipsis">New Posts</p>
            <h2 class="mb-0">48</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body">
            <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
              <i class="bx bx-file font-medium-5"></i>
            </div>
            <p class="text-muted mb-0 line-ellipsis">Attached Files</p>
            <h2 class="mb-0">17</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body">
            <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
              <i class="bx bx-message font-medium-5"></i>
            </div>
            <p class="text-muted mb-0 line-ellipsis">Comments</p>
            <h2 class="mb-0">29</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body">
            <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
              <i class="bx bx-money font-medium-5"></i>
            </div>
            <p class="text-muted mb-0 line-ellipsis">Sales</p>
            <h2 class="mb-0">72</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body">
            <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-1">
              <i class="bx bx-purchase-tag font-medium-5"></i>
            </div>
            <p class="text-muted mb-0 line-ellipsis">Purchase</p>
            <h2 class="mb-0">65</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-content">
          <div class="card-body">
            <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
              <i class="bx bx-shopping-bag font-medium-5"></i>
            </div>
            <p class="text-muted mb-0 line-ellipsis">Order</p>
            <h2 class="mb-0">40</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Widgets Statistics End -->

<!-- Widgets Advance start -->
<section id="widgets-advance">
  <div class="row">
    <div class="col-12 mt-1 mb-2">
      <h4>Advance</h4>
      <hr>
    </div>
  </div>
  <div class="row widgets-text-chart">
    <!-- Notification Widget Starts -->
    <div class="col-lg-5">
      <div class="card widget-notification">
        <div class="card-header border-bottom">
          <h4 class="card-title d-flex align-items-center">
            <i class='bx bx-bell font-medium-4 mr-1'></i>Notifications</h4>
          <div class="heading-elements">
            <button type="button" class="btn btn-sm btn-light-primary">Read All</button>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                <div class="list-left d-flex">
                  <div class="list-icon mr-1">
                    <div class="avatar bg-rgba-primary m-0 p-25">
                      <div class="avatar-content">
                        <i class="bx bx-edit-alt text-primary font-medium-5"></i>
                      </div>
                    </div>
                  </div>
                  <div class="list-content">
                    <span class="list-title">New Report has been received</span>
                    <small class="text-muted d-block">Few sec ago</small>
                  </div>
                </div>
                <div class="readable-mark-icon" data-toggle="tooltip" data-placement="left" title="Mark as read">
                  <i class='bx bxs-circle text-light-primary font-medium-1'></i>
                </div>
              </li>
              <li
                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                <div class="list-left d-flex">
                  <div class="list-icon mr-1">
                    <div class="avatar bg-rgba-primary m-0">
                      <img class="img-fluid" src="{{asset('images/profile/user-uploads/social-2.jpg')}}"
                        alt="img placeholder" height="38" width="38">
                    </div>
                  </div>
                  <div class="list-content">
                    <span class="list-title">New Customer is registered</span>
                    <small class="text-muted d-block">03:44PM</small>
                  </div>
                </div>
                <div class="readable-mark-icon" data-toggle="tooltip" data-placement="left" title="Mark as read">
                  <i class='bx bxs-circle text-light-primary font-medium-1'></i>
                </div>
              </li>
              <li
                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                <div class="list-left d-flex">
                  <div class="list-icon mr-1">
                    <div class="avatar bg-rgba-danger m-0 p-25">
                      <div class="avatar-content">
                        <span class="font-medium-1 text-danger">BM</span>
                      </div>
                    </div>
                  </div>
                  <div class="list-content">
                    <span class="list-title">New Customer is registered</span>
                    <small class="text-muted d-block">03:44PM</small>
                  </div>
                </div>
                <div class="readable-mark-icon" data-toggle="tooltip" data-placement="left" title="Mark as read">
                  <i class='bx bxs-circle text-light-primary font-medium-1'></i>
                </div>
              </li>
              <li
                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                <div class="list-left d-flex">
                  <div class="list-icon mr-1">
                    <div class="avatar bg-rgba-info m-0 p-25">
                      <div class="avatar-content">
                        <i class="bx bx-cake text-info font-medium-5"></i>
                      </div>
                    </div>
                  </div>
                  <div class="list-content">
                    <span class="list-title">Julia's birthday on Monay, party arrangment</span>
                    <small class="text-muted d-block">Monday</small>
                  </div>
                </div>
                <div class="readable-mark-icon mark-as-read" data-toggle="tooltip" data-placement="left"
                  title="Mark as Unread">
                  <i class='bx bxs-circle text-light-secondary font-medium-1'></i>
                </div>
              </li>
              <li
                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                <div class="list-left d-flex">
                  <div class="list-icon mr-1">
                    <div class="avatar bg-rgba-primary m-0">
                      <img class="img-fluid" src="{{asset('images/profile/user-uploads/user-07.jpg')}}"
                        alt="img placeholder" height="38" width="38">
                    </div>
                  </div>
                  <div class="list-content">
                    <span class="list-title">New Mail From Ardis Balderson</span>
                    <small class="text-muted d-block">12 March</small>
                  </div>
                </div>
                <div class="readable-mark-icon" data-toggle="tooltip" data-placement="left" title="Mark as read">
                  <i class='bx bxs-circle text-light-primary font-medium-1'></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Notification Widget Ends -->
    <!-- Task App Widget Starts -->
    <div class="col-lg-7">
      <div class="row">
        <div class="col-12">
          <div class="card widget-todo">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
              <h4 class="card-title d-flex">
                <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Tasks
              </h4>
              <ul class="list-inline d-flex mb-0">
                <li class="d-flex align-items-center">
                  <i class='bx bx-check-circle font-medium-3 mr-50'></i>
                  <div class="dropdown">
                    <div class="dropdown-toggle mr-1" role="button" id="dropdownMenuButton" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">All Task
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Option 1</a>
                      <a class="dropdown-item" href="#">Option 2</a>
                      <a class="dropdown-item" href="#">Option 3</a>
                    </div>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <i class='bx bx-sort mr-50 font-medium-3'></i>
                  <div class="dropdown">
                    <div class="dropdown-toggle" role="button" id="dropdownMenuButton2" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">All Task
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item" href="#">Option 1</a>
                      <a class="dropdown-item" href="#">Option 2</a>
                      <a class="dropdown-item" href="#">Option 3</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-body px-0 py-1">
              <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                <li class="widget-todo-item">
                  <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                    <div class="widget-todo-title-area d-flex align-items-center">
                      <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                      <div class="checkbox checkbox-shadow">
                        <input type="checkbox" class="checkbox__input" id="checkbox1">
                        <label for="checkbox1"></label>
                      </div>
                      <span class="widget-todo-title ml-50">Add SCSS and JS files if
                        required</span>
                    </div>
                    <div class="widget-todo-item-action d-flex align-items-center">
                      <div class="badge badge-pill badge-light-success mr-1">frontend</div>
                      <div class="avatar bg-rgba-primary m-0 mr-50">
                        <div class="avatar-content">
                          <span class="font-size-base text-primary">RA</span>
                        </div>
                      </div>
                      <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                  </div>
                </li>
                <li class="widget-todo-item">
                  <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                    <div class="widget-todo-title-area d-flex align-items-center">
                      <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                      <div class="checkbox checkbox-shadow">
                        <input type="checkbox" class="checkbox__input" id="checkbox2">
                        <label for="checkbox2"></label>
                      </div>
                      <span class="widget-todo-title ml-50">Check all the changes that you did,
                        before you commit</span>
                    </div>
                    <div class="widget-todo-item-action d-flex align-items-center">
                      <div class="badge badge-pill badge-light-danger mr-1">backend</div>
                      <div class="avatar m-0 mr-50">
                        <img src="{{asset('images/profile/user-uploads/social-2.jpg')}}" alt="img placeholder"
                          height="32" width="32">
                      </div>
                      <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                  </div>
                </li>
                <li class="widget-todo-item completed">
                  <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                    <div class="widget-todo-title-area d-flex align-items-center">
                      <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                      <div class="checkbox checkbox-shadow">
                        <input type="checkbox" class="checkbox__input" id="checkbox3" checked>
                        <label for="checkbox3"></label>
                      </div>
                      <span class="widget-todo-title ml-50">Dribble, Behance, UpLabs & Pinterest
                        Post</span>
                    </div>
                    <div class="widget-todo-item-action d-flex align-items-center">
                      <div class="badge badge-pill badge-light-primary mr-1">UI/UX</div>
                      <div class="avatar bg-rgba-primary m-0 mr-50">
                        <div class="avatar-content">
                          <span class="font-size-base text-primary">JP</span>
                        </div>
                      </div>
                      <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                  </div>
                </li>
                <li class="widget-todo-item">
                  <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                    <div class="widget-todo-title-area d-flex align-items-center">
                      <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                      <div class="checkbox checkbox-shadow">
                        <input type="checkbox" class="checkbox__input" id="checkbox4">
                        <label for="checkbox4"></label>
                      </div>
                      <span class="widget-todo-title ml-50">Fresh Design Web & Responsive
                        Miracle</span>
                    </div>
                    <div class="widget-todo-item-action d-flex align-items-center">
                      <div class="badge badge-pill badge-light-info mr-1">Design</div>
                      <div class="avatar m-0 mr-50">
                        <img src="{{asset('images/profile/user-uploads/user-05.jpg')}}" alt="img placeholder"
                          height="32" width="32">
                      </div>
                      <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                  </div>
                </li>
                <li class="widget-todo-item">
                  <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                    <div class="widget-todo-title-area d-flex align-items-center">
                      <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                      <div class="checkbox checkbox-shadow">
                        <input type="checkbox" class="checkbox__input" id="checkbox5">
                        <label for="checkbox5"></label>
                      </div>
                      <span class="widget-todo-title ml-50">Add Calendar page and source and
                        credit page in
                        documentation</span>
                    </div>
                    <div class="widget-todo-item-action d-flex align-items-center">
                      <div class="badge badge-pill badge-light-warning mr-1">Javascript</div>
                      <div class="avatar bg-rgba-primary m-0 mr-50">
                        <div class="avatar-content">
                          <span class="font-size-base text-primary">AK</span>
                        </div>
                      </div>
                      <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                  </div>
                </li>
                <li class="widget-todo-item">
                  <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                    <div class="widget-todo-title-area d-flex align-items-center">
                      <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                      <div class="checkbox checkbox-shadow">
                        <input type="checkbox" class="checkbox__input" id="checkbox6">
                        <label for="checkbox6"></label>
                      </div>
                      <span class="widget-todo-title ml-50">Add Angular Starter-kit</span>
                    </div>
                    <div class="widget-todo-item-action d-flex align-items-center">
                      <div class="badge badge-pill badge-light-primary mr-1">UI/UX</div>
                      <div class="avatar m-0 mr-50">
                        <img src="{{asset('images/profile/user-uploads/user-05.jpg')}}" alt="img placeholder"
                          height="32" width="32">
                      </div>
                      <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Task App Widget Ends -->
  </div>
  <div class="row">
    <!-- Statistics progress Widget -->
    <div class="col-xl-4 col-md-6 progress-card">
      <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center pr-2">
          <h5 class="card-title">Statistics</h5>
          <ul class="list-inline mb-0">
            <li class="mr-50"> <i class="bullet bullet-xs bullet-primary mr-50"></i>First </li>
            <li><i class="bx bx-dots-vertical-rounded font-medium-3 align-middle cursor-pointer"></i></li>
          </ul>
        </div>
        <div class="table-responsive">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td class="w-25">Graphic</td>
                <td>
                  <div class="progress progress-bar-info progress-sm mb-0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="24" aria-valuemin="80"
                      aria-valuemax="100" style="width:24%;"></div>
                  </div>
                </td>
                <td class="w-25 text-right">24%</td>
              </tr>
              <tr>
                <td class="w-25">Prototyping</td>
                <td>
                  <div class="progress progress-bar-success progress-sm mb-0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="61" aria-valuemin="80"
                      aria-valuemax="100" style="width:61%;"></div>
                  </div>
                </td>
                <td class="w-25 text-right">61%</td>
              </tr>
              <tr>
                <td class="w-25">Sketching</td>
                <td>
                  <div class="progress progress-bar-primary progress-sm mb-0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="80"
                      aria-valuemax="100" style="width:60%;"></div>
                  </div>
                </td>
                <td class="w-25 text-right">24%</td>
              </tr>
              <tr>
                <td class="w-25">Modeling</td>
                <td>
                  <div class="progress progress-bar-info progress-sm mb-0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                      aria-valuemax="100" style="width:35%;"></div>
                  </div>
                </td>
                <td class="w-25 text-right">35%</td>
              </tr>
              <tr>
                <td class="w-25">Images</td>
                <td>
                  <div class="progress progress-bar-primary progress-sm mb-0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="80"
                      aria-valuemax="100" style="width:65%;"></div>
                  </div>
                </td>
                <td class="w-25 text-right">65%</td>
              </tr>
              <tr>
                <td class="w-25">HTML</td>
                <td>
                  <div class="progress progress-bar-success progress-sm mb-0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="32" aria-valuemin="80"
                      aria-valuemax="100" style="width:32%;"></div>
                  </div>
                </td>
                <td class="w-25 text-right">32%</td>
              </tr>
              <tr>
                <td class="w-25">Laravel</td>
                <td>
                  <div class="progress progress-bar-danger progress-sm mb-0">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="80"
                      aria-valuemax="100" style="width:40%;"></div>
                  </div>
                </td>
                <td class="w-25 text-right">40%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Statistics progress Widget Ends -->
    <!-- Earnings Widget Swiper Starts -->
    <div class="col-xl-4 col-md-6 earnings-card" id="widget-earnings">
      <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
          <h5 class="card-title"><i class="bx bx-dollar font-medium-5 align-middle"></i> Earnings</h5>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-content">
          <div class="card-body py-1">
            <!-- earnings swiper starts -->
            <div class="widget-earnings-swiper swiper-container p-1">
              <div class="swiper-wrapper">
                <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="repo-design">
                  <i class="bx bx-pyramid mr-50 font-large-1"></i>
                  <div class="swiper-text">Repo Design
                    <p class="mb-0 font-small-2 font-weight-normal">Incontico</p>
                  </div>
                </div>
                <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="laravel-temp">
                  <i class="bx bx-sitemap mr-50 font-large-1"></i>
                  <div class="swiper-text">Laravel Temp
                    <p class="mb-0 font-small-2 font-weight-normal">Global dish</p>
                  </div>
                </div>
                <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="admin-theme">
                  <i class="bx bx-check-shield mr-50 font-large-1"></i>
                  <div class="swiper-text">Admin Theme
                    <p class="mb-0 font-small-2 font-weight-normal">Medal owner</p>
                  </div>
                </div>
                <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="ux-devloper">
                  <i class="bx bx-devices mr-50 font-large-1"></i>
                  <div class="swiper-text">UX Devloper
                    <p class="mb-0 font-small-2 font-weight-normal">Generic name</p>
                  </div>
                </div>
                <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center"
                  id="marketing-guide">
                  <i class="bx bx-book-bookmark mr-50 font-large-1"></i>
                  <div class="swiper-text">Marketing Guide
                    <p class="mb-0 font-small-2 font-weight-normal">Cool stuff</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- earnings swiper ends -->
          </div>
        </div>
        <div class="main-wrapper-content">
          <div class="wrapper-content" data-earnings="repo-design">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Mera Baker</h6>
                          <span class="font-small-2">Ux Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="80"
                          aria-valuemax="100" style="width:55%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $860</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-10.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Jerry Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="80"
                          aria-valuemax="100" style="width:33%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-warning">- $280</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly uez</h6>
                          <span class="font-small-2">Devloper</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="80"
                          aria-valuemax="100" style="width:10%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $853</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lary Masey</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-12.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                          <span class="font-small-2">Degigner</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                          aria-valuemax="100" style="width:35%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $310</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wrapper-content" data-earnings="laravel-temp">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Myra Baker</h6>
                          <span class="font-small-2">Ux Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="80"
                          aria-valuemax="100" style="width:25%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $120</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Jesus Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="80"
                          aria-valuemax="100" style="width:28%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-info">- $280</span></td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-10.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly Dez</h6>
                          <span class="font-small-2">Devloper</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="80"
                          aria-valuemax="100" style="width:90%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $83</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lary Masey</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-12.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                          <span class="font-small-2">Devloper</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                          aria-valuemax="100" style="width:35%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $310</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wrapper-content" data-earnings="admin-theme">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-26.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Myra Baker</h6>
                          <span class="font-small-2">UI Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="80"
                          aria-valuemax="100" style="width:77%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $920</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-25.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Mera Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="52" aria-valuemin="80"
                          aria-valuemax="100" style="width:52%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-info">- $180</span></td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-15.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly Dez</h6>
                          <span class="font-small-2">Devloper</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="80"
                          aria-valuemax="100" style="width:90%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $553</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">jini mara</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-12.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                          <span class="font-small-2">UX</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                          aria-valuemax="100" style="width:35%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $150</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wrapper-content" data-earnings="ux-devloper">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Myra Baker</h6>
                          <span class="font-small-2">UI Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="59" aria-valuemin="80"
                          aria-valuemax="100" style="width:59%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $210</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-16.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Drako Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="38" aria-valuemin="80"
                          aria-valuemax="100" style="width:38%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $280</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly Dez</h6>
                          <span class="font-small-2">Devloper</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="80"
                          aria-valuemax="100" style="width:90%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $853</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lary Masey</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lvia Taylor</h6>
                          <span class="font-small-2">Devloper</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="80"
                          aria-valuemax="100" style="width:75%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $360</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wrapper-content" data-earnings="marketing-guide">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-18.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Myra Baker</h6>
                          <span class="font-small-2">UI Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="80"
                          aria-valuemax="100" style="width:22%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $120</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-19.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">yono Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="80"
                          aria-valuemax="100" style="width:28%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">- $270</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly Dez</h6>
                          <span class="font-small-2">Devloper</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="80"
                          aria-valuemax="100" style="width:90%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $853</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-12.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lary Masey</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $225</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="#">
                          <img src="{{asset('images/portrait/small/avatar-s-25.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                          <span class="font-small-2">Devloper</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                          aria-valuemax="100" style="width:35%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $350</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Earnings Widget Swiper Ends -->

    <!-- Timeline Widget Starts -->
    <div class="col-xl-4 col-md-6 timline-card">
      <div class="card ">
        <div class="card-header">
          <h4 class="card-title">
            Timeline
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <ul class="widget-timeline">
              <li class="timeline-items timeline-icon-success active">
                <div class="timeline-time">Mon 8:17pm</div>
                <h6 class="timeline-title">Jonny Richie Commented</h6>
                <p class="timeline-text">on <a href="JavaScript:void(0);">Project name</a></p>
                <div class="timeline-content">
                  Story behind vedio game and lame is very creative
                </div>
              </li>
              <li class="timeline-items timeline-icon-primary active">
                <div class="timeline-time">5 days ago</div>
                <h6 class="timeline-title">Mathew Slick attached file</h6>
                <p class="timeline-text">on <a href="JavaScript:void(0);">Project name</a></p>
                <div class="timeline-content">
                  <img src="{{asset('images/icon/sketch.png')}}" alt="document" height="36" width="27"
                    class="mr-50">Data Folder.sketch
                </div>
              </li>
              <li class="timeline-items timeline-icon-danger active">
                <div class="timeline-time">7 hours ago</div>
                <h6 class="timeline-title">Mathew Slick docs</h6>
                <p class="timeline-text">on <a href="JavaScript:void(0);">Project name</a></p>
                <div class="timeline-content">
                  <img src="{{asset('images/icon/pdf.png')}}" alt="document" height="36" width="27"
                    class="mr-50">Updated Docs.pdf
                </div>
              </li>
              <li class="timeline-items timeline-icon-info active">
                <div class="timeline-time">5 hour ago</div>
                <h6 class="timeline-title">Ndrew send you a message</h6>
                <p class="timeline-text">on <a href="JavaScript:void(0);">Project name</a></p>
                <div class="timeline-content">
                  Nor again is there anyone who loves or pursues or desires to obtain pain of itself,
                  because it is
                  pain, but because occasionally circumstances
                </div>
              </li>
              <li class="timeline-items timeline-icon-warning">
                <div class="timeline-time">2 min ago</div>
                <h6 class="timeline-title">Mathew Slick liked </h6>
                <p class="timeline-text">on <a href="JavaScript:void(0);">Project name</a></p>
                <div class="timeline-content">
                  The Amairates
                </div>
              </li>
            </ul>
            <button class="btn btn-block btn-primary">View All Notifications</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Timeline Widget Ends -->

    <!-- chat Widget Starts -->
    <div class="col-xl-4 col-md-6 widget-chat-card">
      <div class="widget-chat widget-chat-messages">
        <div class="card">
          <div class="card-header border-bottom p-0">
            <div class="media m-75">
              <a class="media-left" href="JavaScript:void(0);">
                <div class="avatar mr-75">
                  <img src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="avtar images" width="32"
                    height="32">
                  <span class="avatar-status-online"></span>
                </div>
              </a>
              <div class="media-body">
                <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a>
                </h6>
                <span class="text-muted font-small-3">Active</span>
              </div>
              <i class="bx bx-x float-right my-auto cursor-pointer"></i>
            </div>
          </div>
          <div class="card-body widget-chat-container widget-chat-scroll">
            <div class="chat-content">
              <div class="chat">
                <div class="chat-body">
                  <div class="chat-message">
                    <p>How can we help? We're here for you! 😄</p>
                    <span class="chat-time">7:45 AM</span>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-body">
                  <div class="chat-message">
                    <p>Hey John, I am looking for the best admin template.</p>
                    <p>Could you please help me to find it out? 🤔</p>
                    <span class="chat-time">7:50 AM</span>
                  </div>
                  <div class="chat-message">
                    <p>It should be Bootstrap 4 🤩 compatible.</p>
                    <span class="chat-time">7:58 AM</span>
                  </div>
                </div>
              </div>
              <div class="badge badge-pill badge-light-secondary my-1">Yesterday</div>
              <div class="chat">
                <div class="chat-body">
                  <div class="chat-message">
                    <p>Absolutely!</p>
                    <span class="chat-time">8:00 AM</span>
                  </div>
                  <div class="chat-message">
                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                    <span class="chat-time">8:01 AM</span>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-body">
                  <div class="chat-message">
                    <p>Looks clean and fresh UI. 😃</p>
                    <span class="chat-time">10:12 AM</span>
                  </div>
                  <div class="chat-message">
                    <p>It's perfect for my next project.</p>
                    <span class="chat-time">10:15 AM</span>
                  </div>
                  <div class="chat-message">
                    <p>How can I purchase 🤑 it?</p>
                    <span class="chat-time">10:18 AM</span>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-body">
                  <div class="chat-message">
                    <p>Thanks 🤝 , from ThemeForest.</p>
                    <span class="chat-time">10:20 AM</span>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-body">
                  <div class="chat-message">
                    <p>I will purchase it for sure. 👍</p>
                    <span class="chat-time">3:32 PM</span>
                  </div>
                  <div class="chat-message">
                    <p>Thanks.</p>
                    <span class="chat-time">3:33 PM</span>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-body">
                  <div class="chat-message">
                    <p>Great, Feel free to get in touch on</p>
                    <span class="chat-time">3:34 PM</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer border-top p-1">
            <form class="d-flex align-items-center" onsubmit="widgetMessageSend();" action="javascript:void(0);">
              <i class="bx bx-face cursor-pointer"></i>
              <i class="bx bx-paperclip ml-75 cursor-pointer"></i>
              <input type="text" class="form-control widget-chat-message mx-75" placeholder="Type here...">
              <button type="submit" class="btn btn-primary glow"><i class="bx bx-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- chat Widget Ends -->
    <!-- User Detals Widget Starts -->
    <div class="col-lg-12 col-xl-8 user-details-card">
      <div class="card widget-user-details">
        <div class="card-header">
          <div class="card-title-details d-flex align-items-center">
            <div class="avatar bg-rgba-primary p-25 mr-2 ml-0">
              <img class="img-fluid" src="{{asset('images/profile/user-uploads/social-2.jpg')}}"
                alt="img placeholder" height="70" width="70">
            </div>
            <div>
              <h5>Financial Report for Emirates Airlines</h5>
              <div class="card-subtitle">Awesome App for Project Management</div>
            </div>
          </div>
          <div class="heading-elements">
            <i class="bx bx-dots-vertical-rounded font-medium-3 align-middle"></i>
          </div>
        </div>
        <div class="card-content">
          <div Class="card-body">
            <div class="table-responsive">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td class="pb-0 pl-0"><strong>Start Date</strong></td>
                    <td class="pb-0 pl-0"><strong>Due Date</strong></td>
                    <td class="pb-0"><strong>Members</strong></td>
                    <td class="pb-0"><strong>Budget</strong></td>
                    <td class="pb-0"><strong>Expenses</strong></td>
                  </tr>
                  <tr>
                    <td class="pl-0">
                      <div class="badge badge-light-primary text-bold-500 py-50">02 Apr 2019</div>
                    </td>
                    <td class="pl-0">
                      <div class="badge badge-light-danger text-bold-500 py-50">06 May 2019</div>
                    </td>
                    <td>
                      <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                          data-original-title="Lai Lewandowski" class="avatar pull-up">
                          <img class="media-object rounded-circle"
                            src="{{asset('images/portrait/small/avatar-s-6.jpg')}}" alt="Avatar" height="30"
                            width="30">
                        </li>
                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                          data-original-title="Elicia Rieske" class="avatar pull-up">
                          <img class="media-object rounded-circle"
                            src="{{asset('images/portrait/small/avatar-s-7.jpg')}}" alt="Avatar" height="30"
                            width="30">
                        </li>
                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                          data-original-title="Darcey Nooner" class="avatar pull-up">
                          <img class="media-object rounded-circle"
                            src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="Avatar" height="30"
                            width="30">
                        </li>
                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                          data-original-title="Julee Rossignol" class="avatar pull-up">
                          <img class="media-object rounded-circle"
                            src="{{asset('images/portrait/small/avatar-s-10.jpg')}}" alt="Avatar" height="30"
                            width="30">
                        </li>
                        <li class="avatar pull-up">
                          <span class="badge badge-pill badge-light-primary badge-round">+7</span>
                        </li>
                      </ul>
                    </td>
                    <td>$249,500</td>
                    <td>$76,810</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <span>Progress</span>
            <div class="progress progress-bar-primary progress-sm mb-3">
              <div class="progress-bar progress-label" role="progressbar" aria-valuenow="78" style="width:78%"></div>
            </div>
            <span>I distinguish three main text objectives. First, your objective could be merely to inform
              people. A
              second be to persuade people.</span>
          </div>
        </div>
        <div class="card-footer d-flex justify-content-between border-top">
          <div class="d-flex">
            <div class="d-inline-flex align-items-center mr-2">
              <i class='bx bx-check mr-25'></i>
              <small>72 Tasks</small>
            </div>
            <div class="d-inline-flex align-items-center">
              <i class='bx bx-message mr-25'></i>
              <small>648 Comments</small>
            </div>
          </div>
          <div>
            <button type="button" class="btn btn-primary glow">Details</button>
          </div>
        </div>
      </div>
    </div>
    <!-- User Detals Widget Ends -->

    <!-- User Widget with Image-top Starts -->
    <div class="col-xl-4 col-md-6 img-top-card">
      <div class="card widget-img-top">
        <div class="card-content">
          <img class="card-img-top img-fluid mb-1" src="{{asset('images/profile/user-uploads/girl-image.jpg')}}"
            alt="Card image cap" />
          <div class="heading-elements">
            <i class="bx bx-dots-vertical-rounded font-medium-3 align-middle text-white"></i>
          </div>
          <div class="text-center">
            <h4>Agnes Horton</h4>
            <p>Designer</p>
            <p class="px-2 pb-1">Jelly beans halvah cake chocolate gummies jelly pudding gingerbread ice
              cream. Jelly
              candy canes halvah ice cream donut. I love jujubes wafer pie ice cream tiramisu.</p>
          </div>
        </div>
        <div class="card-footer text-center">
          <div class="d-flex justify-content-around mb-1">
            <div class="d-flex flex-column align-items-center content-post">
              <span>593</span>
              <small class="text-muted">Total Post</small>
            </div>
            <div class="d-flex flex-column align-items-center content-followers">
              <span>456</span>
              <small class="text-muted">Followers</small>
            </div>
            <div class="d-flex flex-column align-items-center content-following">
              <span>468</span>
              <small class="text-muted">Following</small>
            </div>
          </div>
          <button type="button" class="btn btn-primary glow px-4">Follow</button>
        </div>
      </div>
    </div>
    <!-- User Widget with Image-top Ends -->
    <!-- User Widget with Overlay Image Starts -->
    <div class="col-xl-4 col-md-6 overlay-image-card">
      <div class="card widget-overlay">
        <div class="card widget-overlay-card mb-0">
          <div class="card-content">
            <div class="card-body p-0">
              <img class="card-img img-fluid" src="{{asset('images/cards/finance.jpg')}}" alt="Card image">
              <div class="card-img-overlay overlay-primary">
                <div class="d-flex justify-content-between">
                  <span class="card-title text-white">Income</span>
                  <div class="dropdown">
                    <button class="btn btn-outline-white dropdown-toggle" type="button" id="dropdownMenuButtonSec"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      2019
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                      <a class="dropdown-item" href="#">2019</a>
                      <a class="dropdown-item" href="#">2018</a>
                      <a class="dropdown-item" href="#">2017</a>
                    </div>
                  </div>
                </div>
                <h1 class="font-large-2 text-center widget-overlay-card-title">$18,100</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="card widget-overlay-content mb-0">
          <div class="card-content text-center">
            <button class="btn btn-lg btn-white shadow inclusive-btn" type="button">Inclusive All
              Earnings</button>
          </div>
          <div class="card-body px-0 pb-0">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
              <li class="nav-item mr-1">
                <a class=" nav-link active" id="january-tab" data-toggle="tab" href="#january" aria-controls="january"
                  role="tab" aria-selected="true">
                  January</a>
              </li>
              <li class="nav-item mr-1">
                <a class=" nav-link " id="february-tab" data-toggle="tab" href="#february" aria-controls="february"
                  role="tab" aria-selected="false">
                  February</a>
              </li>
              <li class="nav-item mr-1">
                <a class="  nav-link " id="march-tab" data-toggle="tab" href="#march" aria-controls="march" role="tab"
                  aria-selected="false">
                  March</a>
              </li>
              <li class="nav-item mr-1">
                <a class="  nav-link " id="april-tab" data-toggle="tab" href="#april" aria-controls="april" role="tab"
                  aria-selected="false">
                  April</a>
              </li>
            </ul>
            <div class="tab-content pl-0">
              <div class="tab-pane active" id="january" aria-labelledby="january-tab" role="tabpanel">
                <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr class="border-0">
                        <th>Template</th>
                        <th>Status</th>
                        <th>Team</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pr-0">
                          <span class="text-bold-500 d-block">Frest</span>
                          <small>Frest By PIXINVENT</small>
                        </td>
                        <td>
                          <div class="badge badge-pill badge-light-danger">Pending</div>
                        </td>
                        <td>
                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Lai Lewandowski" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-6.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Elicia Rieske" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-7.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-3.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                          </ul>
                        </td>
                        <td class="text-primary">$66,840</td>
                      </tr>
                      <tr>
                        <td class="pr-0">
                          <span class="text-bold-500 d-block">Materialize</span>
                          <small>Materialize By PIXINVENT</small>
                        </td>
                        <td>
                          <div class="badge badge-pill badge-light-success">Updated</div>
                        </td>
                        <td>
                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Lai Lewandowski" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-6.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Elicia Rieske" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-7.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-3.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li class="avatar pull-up">
                              <span class="badge badge-pill badge-light-primary badge-round">+7</span>
                            </li>
                          </ul>
                        </td>
                        <td class="text-primary">12,850</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane pl-0" id="february" aria-labelledby="february-tab" role="tabpanel">
                <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr class="border-0">
                        <th>Template</th>
                        <th>Status</th>
                        <th>Team</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pr-0">
                          <span class="text-bold-500 d-block">Stack</span>
                          <small>Stack By PIXINVENT</small>
                        </td>
                        <td>
                          <div class="badge badge-pill badge-light-primary">New</div>
                        </td>
                        <td>
                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Lai Lewandowski" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Elicia Rieske" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                          </ul>
                        </td>
                        <td class="text-primary">$24,520</td>
                      </tr>
                      <tr>
                        <td class="pr-0">
                          <span class="text-bold-500 d-block">Angular</span>
                          <small>Angular By PIXINVENT</small>
                        </td>
                        <td>
                          <div class="badge badge-pill badge-light-warning">Cancel</div>
                        </td>
                        <td>
                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Lai Lewandowski" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                          </ul>
                        </td>
                        <td class="text-primary">$18,252</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane pl-0" id="march" aria-labelledby="march-tab" role="tabpanel">
                <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr class="border-0">
                        <th>Template</th>
                        <th>Status</th>
                        <th>Team</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pr-0">
                          <span class="text-bold-500 d-block">Robust</span>
                          <small>Robust HTML By PIXINVENT</small>
                        </td>
                        <td>
                          <div class="badge badge-pill badge-light-success">Updated</div>
                        </td>
                        <td>
                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Lai Lewandowski" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-7.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Elicia Rieske" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-22.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-23.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-13.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                          </ul>
                        </td>
                        <td class="text-primary">$12,623</td>
                      </tr>
                      <tr>
                        <td class="pr-0">
                          <span class="text-bold-500 d-block">Modern</span>
                          <small>Modern By PIXINVENT</small>
                        </td>
                        <td>
                          <div class="badge badge-pill badge-light-danger">Pending</div>
                        </td>
                        <td>
                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Lai Lewandowski" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-17.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Elicia Rieske" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-18.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-19.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                          </ul>
                        </td>
                        <td class="text-primary">$23,562</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane pl-0" id="april" aria-labelledby="april-tab" role="tabpanel">
                <div class="table-responsive">
                  <table class="table table-borderless">
                    <thead>
                      <tr class="border-0">
                        <th>Template</th>
                        <th>Status</th>
                        <th>Team</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pr-0">
                          <span class="text-bold-500 d-block">Convex</span>
                          <small>Convex HTML By PIXINVENT</small>
                        </td>
                        <td>
                          <div class="badge badge-pill badge-light-primary">New</div>
                        </td>
                        <td>
                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Lai Lewandowski" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-18.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Elicia Rieske" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-19.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-10.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li class="avatar pull-up">
                              <span class="badge badge-pill badge-light-primary badge-round">+5</span>
                            </li>
                          </ul>
                        </td>
                        <td class="text-primary">$12,623</td>
                      </tr>
                      <tr>
                        <td class="pr-0">
                          <span class="text-bold-500 d-block">CryptiICO</span>
                          <small>CryptiICO By PIXINVENT</small>
                        </td>
                        <td>
                          <div class="badge badge-pill badge-light-danger">Pending</div>
                        </td>
                        <td>
                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Lai Lewandowski" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-22.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Elicia Rieske" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-21.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom"
                              data-original-title="Darcey Nooner" class="avatar pull-up">
                              <img class="media-object rounded-circle"
                                src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="Avatar" height="30"
                                width="30">
                            </li>
                          </ul>
                        </td>
                        <td class="text-primary">$10,240</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- User Widget with Overlay Image Ends -->

    <!-- User widget Card & Whether Card Starts -->
    <div class="col-xl-4 col-md-12 whether-card">
      <div class="row">
        <!-- User Widget Starts -->
        <div class="col-xl-12 col-md-6 col-12 user-profile-card">
          <div class="card">
            <div class="card-header mx-auto pt-3">
              <div class="avatar bg-rgba-primary p-50">
                <img class="img-fluid" src="{{asset('images/profile/user-uploads/social-2.jpg')}}"
                  alt="img placeholder" height="134" width="134">
              </div>
            </div>
            <div class="card-content">
              <div class="card-body text-center">
                <h4>Maria Arnold</h4>
                <p>Developer</p>
                <!-- <p class="px-1">Jelly beans halvah cake chocolate gummies.</p> -->
                <div class="d-flex justify-content-around mb-1">
                  <div class="card-icons d-flex flex-column">
                    <i class='bx bx-camera font-medium-5 font-weight-bold'></i>
                    <p>5693</p>
                  </div>
                  <div class="card-icons d-flex flex-column">
                    <i class='bx bx-heart font-medium-5 font-weight-bold'></i>
                    <p>856</p>
                  </div>
                  <div class="card-icons d-flex flex-column">
                    <i class='bx bx-user font-medium-5 font-weight-bold'></i>
                    <p>468</p>
                  </div>
                </div>
                <button type="button" class="btn btn-primary glow px-4">Follow</button>
              </div>
            </div>
          </div>
        </div>
        <!-- User Widget Ends -->
        <!-- Clowd Widget Starts -->
        <div class="col-xl-12 col-md-6 col-12 whether">
          <div class="card">
            <div class="card-header">
              <div>
                <h3 class="font-weight-normal mb-0">16<sup>o</sup>C</h3>
                <div Class="text-muted">Cloudy</div>
              </div>
              <div class="heading-elements">
                <i class='bx bx-rotate-right font-medium-4'></i>
              </div>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <p class="mb-0">Sicklerville, New Jeresey</p>
                    <span>Fri 13 May, 2019</span>
                  </div>
                  <i class="bx bx-cloud font-large-2"></i>
                </div>
                <hr>
                <div class="d-flex align-items-center justify-content-around">
                  <div class="d-flex flex-column align-items-center">
                    <small class="text-muted">No</small>
                    <i class='bx bx-cloud-lightning text-bold-700 font-medium-2 my-50'></i>
                    <small class="text-muted">2<sup>+</sup></small>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <small class="text-muted">7:0</small>
                    <i class='bx bx-cloud-light-rain font-medium-2 my-50'></i>
                    <small class="text-muted">22<sup>o</sup></small>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <small class="text-muted">8:0</small>
                    <i class='bx bx-cloud-snow font-medium-2 my-50'></i>
                    <small class="text-muted">2<sup>+</sup></small>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <small class="text-muted">9:0</small>
                    <i class='bx bx-sun font-medium-2 my-50'></i>
                    <small class="text-muted">3<sup>+</sup></small>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <small class="text-muted">10:0</small>
                    <i class='bx bx-wind font-medium-2 my-50'></i>
                    <small class="text-muted">3<sup>+</sup></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Clowd Widget Ends -->
      </div>
    </div>
    <!-- User widget Card & Whether Card Ends -->
  </div>
</section>
<!-- Widgets Advance End -->

<!-- Widgets Charts start -->
<section id="widgets-chart">
  <div class="row">
    <div class="col-12 mt-1 mb-2">
      <h4>Charts</h4>
      <hr>
    </div>
  </div>
  <div class="row widget-radial-charts">
    <!-- Radial Followers Primary Chart Starts -->
    <div class="col-sm-4">
      <div class="card">
        <div class="card-content">
          <div class="card-body p-0">
            <div class="d-lg-flex justify-content-between">
              <div class="widget-card-details d-flex flex-column justify-content-between p-2">
                <div>
                  <h5 class="font-medium-2 font-weight-normal">Followers</h5>
                  <p class="text-muted">Get Around Easily With Limousine Service</p>
                </div>
                <a href="#">Details</a>
              </div>
              <div id="radial-chart-primary"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Radial Followers Primary Chart Ends -->
    <!-- Radial Users Success Chart Starts -->
    <div class="col-sm-4">
      <div class="card">
        <div class="card-content">
          <div class="card-body p-0">
            <div class="d-lg-flex justify-content-between">
              <div class="widget-card-details d-flex flex-column justify-content-between p-2">
                <div>
                  <h5 class="font-medium-2 font-weight-normal">Users</h5>
                  <p class="text-muted">How To Stop Living Your Life On Auto Mode.</p>
                </div>
                <a href="#">Details</a>
              </div>
              <div id="radial-chart-success"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Radial Users Success Chart Ends -->
    <!-- Radial Registrations Danger Chart Starts -->
    <div class="col-sm-4">
      <div class="card">
        <div class="card-content">
          <div class="card-body p-0">
            <div class="d-lg-flex justify-content-between">
              <div class="widget-card-details d-flex flex-column justify-content-between p-2">
                <div>
                  <h5 class="font-medium-2 font-weight-normal">Registrations</h5>
                  <p class="text-muted">After uploading photo, you can submit form.</p>
                </div>
                <a href="#">Details</a>
              </div>
              <div id="radial-chart-danger"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Radial Registrations Danger Chart Ends -->
  </div>
  <div class="row">
    <!-- Followers Danger Line Chart Starts -->
    <div class="col-xl-4 col-md-6">
      <div class="card widget-followers">
        <div class="card-header d-flex align-items-center justify-content-between">
          <div>
            <h4 class="card-title">Followers</h4>
            <small class="text-muted">System project</small>
          </div>
          <div class="d-flex align-items-center widget-followers-heading-right">
            <h5 class="mr-2 font-weight-normal mb-0">860K</h5>
            <div class="d-flex flex-column align-items-center">
              <i class='bx bx-caret-down text-danger font-medium-1'></i>
              <small class="text-muted">-31%</small>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="follower-danger-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Followers Danger Line Chart Ends -->
    <!-- Followers Primary Line Chart Starts -->
    <div class="col-xl-4 col-md-6">
      <div class="card widget-followers">
        <div class="card-header d-flex align-items-center justify-content-between">
          <div>
            <h4 class="card-title">Followers</h4>
            <small class="text-muted">System project</small>
          </div>
          <div class="d-flex align-items-center widget-followers-heading-right">
            <h5 class="mr-2 font-weight-normal mb-0">520K</h5>
            <div class="d-flex flex-column align-items-center">
              <i class='bx bx-caret-up text-success font-medium-1'></i>
              <small class="text-muted">+31%</small>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="follower-primary-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Followers Primary Line Chart Ends -->
    <!-- Followers Success Line Chart Starts -->
    <div class="col-xl-4 col-md-6">
      <div class="card widget-followers">
        <div class="card-header d-flex align-items-center justify-content-between">
          <div>
            <h4 class="card-title">Followers</h4>
            <small class="text-muted">System project</small>
          </div>
          <div class="d-flex align-items-center widget-followers-heading-right">
            <h5 class="mr-2 font-weight-normal mb-0">673K</h5>
            <div class="d-flex flex-column align-items-center">
              <i class='bx bx-caret-up text-success font-medium-1'></i>
              <small class="text-muted">+62%</small>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="follower-success-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Followers Success Line Chart Ends -->
  </div>
  <div class="row">
    <!-- Statistics Multi Radial Chart Starts -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
          <h4 class="card-title">Statistics</h4>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="radial-chart-multi"></div>
            <ul class="list-inline text-center">
              <li class="mr-2"> <span class="bullet bullet-xs bullet-primary mr-50"></span>Comments</li>
              <li class="mr-2"> <span class="bullet bullet-xs bullet-warning mr-50"></span>Sharing</li>
              <li> <i class="bullet bullet-xs bullet-danger mr-50"></i>Replies</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Statistics Multi Radial Chart Ends -->
    <!-- Statistics Half Radial Chart Starts -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
          <h4 class="card-title">Statistics</h4>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-content">
          <div class="card-body pt-1">
            <div id="radial-chart-half"></div>
            <div class="chart-details text-center">
              <h6 class="font-medium-2 mb-1">Awesome</h6>
              <p class="text-muted">Close to reach 1000k followers !</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Statistics Half Radial Chart Ends -->
    <!-- Gauge Chart Starts -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
          <h4 class="card-title">Gauge Chart</h4>
          <ul class="list-inline mb-0">
            <li class="mr-50"> <i class="bullet bullet-xs bullet-warning mr-50"></i>First</li>
            <li><i class="bx bx-dots-vertical-rounded font-medium-3 align-middle cursor-pointer"></i></li>
          </ul>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="gauge-chart" class="mb-2"></div>
            <p class="text-center">Jelly beans halvah cake chocolate gummies.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Gauge Chart Ends -->
    <!-- Statistics Donut Chart Starts -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
          <h4 class="card-title">Statistics</h4>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="pb-1 pt-3" id="donut-chart-statistics"></div>
            <div class="chart-info d-flex justify-content-between mb-1">
              <div class="d-flex align-items-center">
                <i class="bullet bullet-xs bullet-primary mr-50"></i>
                <span class="text-muted text-bold-600 ml-50">Installation</span>
              </div>
              <div class="text-muted">70%</div>
            </div>
            <div class="chart-info d-flex justify-content-between mb-1">
              <div class="d-flex align-items-center">
                <i class="bullet bullet-xs bullet-warning mr-50"></i>
                <span class="text-muted text-bold-600 ml-50">Page Views</span>
              </div>
              <div class="text-muted">30%</div>
            </div>
            <div class="chart-info d-flex justify-content-between">
              <div class="d-flex align-items-center">
                <i class="bullet bullet-xs bullet-danger mr-50"></i>
                <span class="text-muted text-bold-600 ml-50">Active Users</span>
              </div>
              <div class="text-muted">40%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Statistics Donut Chart Ends -->
    <!-- Spending Donut Chart Starts -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h4 class="card-title">Spending</h4>
          <i class="bx bx-dots-vertical-rounded font-medium-3 align-middle cursor-pointer"></i>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="donut-chart-spending" class="py-2"></div>
            <div class="chart-info d-flex justify-content-between mb-75">
              <div class="d-flex align-items-center">
                <i class="bullet bullet-xs bullet-primary mr-50"></i>
                <span class="text-muted text-bold-600 ml-50">Public Transport</span>
              </div>
              <div class="text-muted">44%</div>
            </div>
            <div class="chart-info d-flex justify-content-between mb-75">
              <div class="d-flex align-items-center">
                <i class="bullet bullet-xs bullet-danger mr-50"></i>
                <span class="text-muted text-bold-600 ml-50">Cafe & Restautants</span>
              </div>
              <div class="text-muted">55%</div>
            </div>
            <div class="chart-info d-flex justify-content-between mb-75">
              <div class="d-flex align-items-center">
                <i class="bullet bullet-xs bullet-warning mr-50"></i>
                <span class="text-muted text-bold-600 ml-50">Business Projects</span>
              </div>
              <div class="text-muted">13%</div>
            </div>
            <div class="chart-info d-flex justify-content-between">
              <div class="d-flex align-items-center">
                <i class="bullet bullet-xs bullet-success mr-50"></i>
                <span class="text-muted text-bold-600 ml-50">Travelling & Vocation</span>
              </div>
              <div class="text-muted">33%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Spending Donut Chart Ends -->
    <!-- Radar Multi Series chart Starts -->
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
          <h4 class="card-title">Gauge Chart</h4>
          <ul class="list-inline mb-0">
            <li class="mr-50"> <i class="bullet bullet-xs bullet-warning mr-50"></i>First</li>
            <li><i class="bx bx-dots-vertical-rounded font-medium-3 align-middle cursor-pointer"></i></li>
          </ul>
        </div>
        <div class="card-content">
          <div class="card-body pb-0">
            <div id="radar-multi-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Radar Multi Series chart Ends -->
  </div>
  <div class="row">
    <!-- Statistics Line Chart Starts -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
          <h4 class="card-title">Statistics</h4>
          <ul class="list-inline mb-0">
            <li class="mr-50"> <i class="bullet bullet-xs bullet-info mr-50"></i>Views </li>
            <li class="mr-1"> <i class="bullet bullet-xs bullet-success mr-50"></i>Likes </li>
            <li><i class="bx bx-dots-vertical-rounded font-medium-3 align-middle cursor-pointer"></i></li>
          </ul>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="statistics-line-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Statistics Line Chart Ends -->
    <!-- Sales Heat Map Chart Starts -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Daily Sales States
          </h4>
          <div class="heading-elements">
            <i class="bx bx-dots-vertical-rounded font-medium-3 align-middle cursor-pointer"></i>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="sales-heatmap-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sales Heat Map Chart Ends -->
  </div>
  <div class="row">
    <!-- Statistics Multi Radial Chart Starts -->
    <div class="col-lg-6">
      <div class="card widget-state-multi-radial">
        <div class="card-header d-sm-flex justify-content-between">
          <h4 class="card-title">Statistics</h4>
          <ul class="nav nav-tabs mt-sm-0 mt-50 mb-0" role="tablist">
            <li class="nav-item">
              <a class=" nav-link active" id="category-tab" data-toggle="tab" href="#category" aria-controls="category"
                role="tab" aria-selected="true">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" aria-controls="service" role="tab"
                aria-selected="false">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab"
                aria-selected="false">Account</a>
            </li>
          </ul>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="text-center">
                  <div id="statistics-multi-radial-chart"></div>
                </div>
              </div>
              <div class="col-md-6 d-flex flex-column justify-content-around">
                <div class="tab-content">
                  <div class="tab-pane active" id="category" aria-labelledby="category-tab" role="tabpanel">
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-primary mr-50"></i>
                        <span class="text-bold-600 ml-50">Computer</span>
                      </div>
                      <div class="text-muted">$430</div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-success mr-50"></i>
                        <span class="text-bold-600 ml-50">Storage</span>
                      </div>
                      <div class="text-muted">$640</div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-danger mr-50"></i>
                        <span class="text-bold-600 ml-50">Database</span>
                      </div>
                      <div class="text-muted">$500</div>
                    </div>
                  </div>
                  <div class="tab-pane" id="service" aria-labelledby="service-tab" role="tabpanel">
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-primary mr-50"></i>
                        <span class="text-bold-600 ml-50">Repairing</span>
                      </div>
                      <div class="text-muted">$740</div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-success mr-50"></i>
                        <span class="text-bold-600 ml-50">Damage</span>
                      </div>
                      <div class="text-muted">$1530</div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-danger mr-50"></i>
                        <span class="text-bold-600 ml-50">Renew</span>
                      </div>
                      <div class="text-muted">$258</div>
                    </div>
                  </div>
                  <div class="tab-pane" id="account" aria-labelledby="account-tab" role="tabpanel">
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-primary mr-50"></i>
                        <span class="text-bold-600 ml-50">Sales</span>
                      </div>
                      <div class="text-muted">$230</div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-success mr-50"></i>
                        <span class="text-bold-600 ml-50">Purchase</span>
                      </div>
                      <div class="text-muted">$523</div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-75">
                      <div class="d-flex align-items-center">
                        <i class="bullet bullet-danger mr-50"></i>
                        <span class="text-bold-600 ml-50">Resale</span>
                      </div>
                      <div class="text-muted">$652</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 text-center">
                <span class="text-muted">You're within monthly expanse</span>
              </div>
              <div class="col-6 text-right">
                <a href="#" class="align-self-end">View All</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Statistics Multi Radial Chart Ends -->
    <!-- Average Order Chart Starts -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Average Order</h4>
          <div class="heading-elements">
            <div class="form-group position-relative has-icon-left w-75 ml-auto">
              <input type="text" class="form-control single-daterange">
              <div class="form-control-position">
                <i class='bx bx-calendar'></i>
              </div>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="avg-order-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Average Order Chart Ends -->
  </div>
  <div class="row">
    <!-- Order Activity Chart Starts -->
    <div class="col-12">
      <div class="card widget-order-activity">
        <div class="card-header d-md-flex justify-content-between align-items-center">
          <h4 class="card-title">Order Activity</h4>
          <div class="header-right mt-md-0 mt-50">
            <fieldset class="d-inline-block form-group position-relative has-icon-left mb-50">
              <input type="text" class="form-control daterange">
              <div class="form-control-position">
                <i class='bx bx-calendar'></i>
              </div>
            </fieldset>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn active">Monthly</button>
              <button type="button" class="btn">Annually</button>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="order-activity-line-chart"></div>
          </div>
        </div>
        <div class="card-footer border-top widget-order-activity-footer">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="d-flex flex-column">
                <span>Direct</span>
                <div class="d-flex align-items-center">
                  <div class="badge-circle badge-circle-lg badge-circle-light-secondary flex-column mr-1">
                    <i class='bx bx-caret-up text-success font-medium-4'></i>
                    <small class="text-muted">+31%</small>
                  </div>
                  <h4 class="mb-0">$2,931</h4>
                </div>
                <small class="text-muted mt-1">Look Up In The Sky</small>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="d-flex flex-column">
                <span>email</span>
                <div class="d-flex align-items-center">
                  <div class="badge-circle badge-circle-lg badge-circle-light-secondary flex-column mr-1">
                    <i class='bx bx-caret-down text-danger font-medium-4'></i>
                    <small class="text-muted">-1%</small>
                  </div>
                  <h4 class="mb-0">$1,231</h4>
                </div>
                <small class="text-muted mt-1">Look Up In The Sky</small>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="d-flex flex-column">
                <span>email</span>
                <div class="d-flex align-items-center">
                  <div class="badge-circle badge-circle-lg badge-circle-light-secondary flex-column mr-1">
                    <i class='bx bx-caret-down text-danger font-medium-4'></i>
                    <small class="text-muted">-12%</small>
                  </div>
                  <h4 class="mb-0">$545</h4>
                </div>
                <small class="text-muted mt-1">Choose The Perfect</small>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="d-flex flex-column">
                <span>Other</span>
                <div class="d-flex align-items-center">
                  <div class="badge-circle badge-circle-lg badge-circle-light-secondary flex-column mr-1">
                    <i class='bx bx-caret-up text-success font-medium-4'></i>
                    <small class="text-muted">+31%</small>
                  </div>
                  <h4 class="mb-0">$332</h4>
                </div>
                <small class="text-muted mt-1">How to Cook</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Order Activity Chart Ends -->
  </div>
</section>
<!-- Widgets Charts End -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/pickers/daterange/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/dragula.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/cards/widgets.js')}}"></script>
@endsection