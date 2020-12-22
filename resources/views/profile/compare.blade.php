@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title', $profile->full_name)
{{-- vendor css --}}
@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
@endsection
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

@section('content')
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Please select user</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <select class="select2 form-control" id="user-select">
                                            <option value="">Please select ...</option>
                                            @foreach($allProfiles as $item)
                                                <option @if($with == $item->name) selected
                                                        @endif value="{{$item->name}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Multi Radial Chart Starts -->
            <div class="col-xl-6 col-md-6 col-12 dashboard-visit">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">{{$profile->full_name}}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body text-center">
                            <img class="rounded-circle" src="{{$profile->picture}}" alt="" width="150" height="150">
                            <div class="d-flex justify-content-around">
                                <div class="card-body py-1 d-flex justify-content-center">
                                    <div
                                        class="badge-circle badge-circle-lg badge-circle-light-success mr-1">
                                        <i class="bx bx-briefcase-alt font-medium-5"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted line-ellipsis">Posts</div>
                                        <h3 class="mb-0">{{$profile->activities->last()->posts}}</h3>
                                    </div>
                                </div>
                                <div class="card-body py-1 d-flex justify-content-center">
                                    <div
                                        class="badge-circle badge-circle-lg badge-circle-light-danger mr-1">
                                        <i class="bx bx-user font-medium-5"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted line-ellipsis">Following</div>
                                        <h3 class="mb-0">{{$profile->activities->last()->follows}}</h3>
                                    </div>
                                </div>
                                <div class="card-body py-1 d-flex justify-content-center">
                                    <div
                                        class="badge-circle badge-circle-lg badge-circle-light-info mr-1">
                                        <i class="bx bx-user font-medium-5"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted line-ellipsis">Followers</div>
                                        <h3 class="mb-0">{{$profile->activities->last()->followers}}</h3>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-1">
                                {!! $profile->biography !!}
                            </p>
                            <a href="{{$profile->profile_url}}" target="_blank" class="btn btn-info">View
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            @if($profileWith)
                <div class="col-xl-6 col-md-6 col-12 dashboard-visit">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">{{$profileWith->full_name}}</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="{{$profileWith->picture}}" alt="" width="150"
                                     height="150">
                                <div class="d-flex justify-content-around">
                                    <div class="card-body py-1 d-flex justify-content-center">
                                        <div
                                            class="badge-circle badge-circle-lg badge-circle-light-success mr-1">
                                            <i class="bx bx-briefcase-alt font-medium-5"></i>
                                        </div>
                                        <div>
                                            <div class="text-muted line-ellipsis">Posts</div>
                                            <h3 class="mb-0">{{$profileWith->activities->last()->posts}}</h3>
                                        </div>
                                    </div>
                                    <div class="card-body py-1 d-flex justify-content-center">
                                        <div
                                            class="badge-circle badge-circle-lg badge-circle-light-danger mr-1">
                                            <i class="bx bx-user font-medium-5"></i>
                                        </div>
                                        <div>
                                            <div class="text-muted line-ellipsis">Following</div>
                                            <h3 class="mb-0">{{$profileWith->activities->last()->follows}}</h3>
                                        </div>
                                    </div>
                                    <div class="card-body py-1 d-flex justify-content-center">
                                        <div
                                            class="badge-circle badge-circle-lg badge-circle-light-info mr-1">
                                            <i class="bx bx-user font-medium-5"></i>
                                        </div>
                                        <div>
                                            <div class="text-muted line-ellipsis">Followers</div>
                                            <h3 class="mb-0">{{$profileWith->activities->last()->followers}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-1">
                                    {!! $profileWith->biography !!}
                                </p>
                                <a href="{{$profileWith->profile_url}}" target="_blank" class="btn btn-info">View
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="row mt-3">
            <div class="col-6 dashboard-order-summary mb-2">
                <div class="card">
                    <div class="row">
                        <!-- Order Summary Starts -->
                        <div class="col-md-8 col-12 order-summary border-right pr-md-0">
                            <div class="card mb-0">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Dynamic Profile</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="line-area-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sales History Starts -->
                        <div class="col-md-4 col-12 pl-md-0">
                            <div class="card mb-0">
                                <div class="card-header pb-50">
                                    <h4 class="card-title">Activity</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body py-1">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div class="sales-item-name">
                                                <p class="mb-0">Posts</p>
                                                <small
                                                    class="text-muted">{{$profile->activities->last()->created_at->format('Y/m/d H:i:s')}}</small>
                                            </div>
                                            <div class="sales-item-amount">
                                                <h6 class="mb-0">{{$profile->activities->last()->posts}}</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div class="sales-item-name">
                                                <p class="mb-0">Follows</p>
                                                <small
                                                    class="text-muted">{{$profile->activities->last()->created_at->format('Y/m/d H:i:s')}}</small>
                                            </div>
                                            <div class="sales-item-amount">
                                                <h6 class="mb-0">
                                                    {{$profile->activities->last()->follows}}
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sales-item-name">
                                                <p class="mb-0">Followers</p>
                                                <small
                                                    class="text-muted">{{$profile->activities->last()->created_at->format('Y/m/d H:i:s')}}</small>
                                            </div>
                                            <div class="sales-item-amount">
                                                <h6 class="mb-0">
                                                    {{$profile->activities->last()->followers}}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-top pb-0">
                                        <h5>Total Likes</h5>
                                        <small
                                            class="text-muted">{{$profile->activityPosts->last()->created_at->format('Y/m/d')}}</small>
                                        <span class="text-primary text-bold-500">{{$sumLikes}}</span>
                                    </div>
                                    <div class="card-footer border-top pb-0">
                                        <h5>Total Comments</h5>
                                        <small
                                            class="text-muted">{{$profile->activityPosts->last()->created_at->format('Y/m/d')}}</small>
                                        <span class="text-primary text-bold-500">{{$sumComments}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($profileWith)
                <div class="col-6 dashboard-order-summary mb-2">
                    <div class="card">
                        <div class="row">
                            <!-- Order Summary Starts -->
                            <div class="col-md-8 col-12 order-summary border-right pr-md-0">
                                <div class="card mb-0">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">Dynamic Profile</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div id="line-area-chart-with"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sales History Starts -->
                            <div class="col-md-4 col-12 pl-md-0">
                                <div class="card mb-0">
                                    <div class="card-header pb-50">
                                        <h4 class="card-title">Activity</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <div class="sales-item-name">
                                                    <p class="mb-0">Posts</p>
                                                    <small
                                                        class="text-muted">{{$profileWith->activities->last()->created_at->format('Y/m/d H:i:s')}}</small>
                                                </div>
                                                <div class="sales-item-amount">
                                                    <h6 class="mb-0">{{$profileWith->activities->last()->posts}}</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <div class="sales-item-name">
                                                    <p class="mb-0">Follows</p>
                                                    <small
                                                        class="text-muted">{{$profileWith->activities->last()->created_at->format('Y/m/d H:i:s')}}</small>
                                                </div>
                                                <div class="sales-item-amount">
                                                    <h6 class="mb-0">
                                                        {{$profileWith->activities->last()->follows}}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="sales-item-name">
                                                    <p class="mb-0">Followers</p>
                                                    <small
                                                        class="text-muted">{{$profileWith->activities->last()->created_at->format('Y/m/d H:i:s')}}</small>
                                                </div>
                                                <div class="sales-item-amount">
                                                    <h6 class="mb-0">
                                                        {{$profileWith->activities->last()->followers}}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-top pb-0">
                                            <h5>Total Likes</h5>
                                            <small
                                                class="text-muted">{{$profileWith->activityPosts->last()->created_at->format('Y/m/d')}}</small>
                                            <span class="text-primary text-bold-500">{{$sumLikesWith}}</span>
                                        </div>
                                        <div class="card-footer border-top pb-0">
                                            <h5>Total Comments</h5>
                                            <small
                                                class="text-muted">{{$profileWith->activityPosts->last()->created_at->format('Y/m/d')}}</small>
                                            <span class="text-primary text-bold-500">{{$sumCommentsWith}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
        <!-- Latest Update Starts -->
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-6 ">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center pb-50">
                        <h4 class="card-title">Last Posts</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0 pb-1">
                            <ul class="list-group list-group-flush">
                                @foreach($lastPosts as $postUser)
                                    <li
                                        class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                        <div class="list-left d-flex">
                                            <div class="list-icon mr-1">
                                                <div class="avatar bg-rgba-primary m-0">
                                                    <img src="{{$postUser->image_url}}" alt="" width="100" height="100">
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <span
                                                    class="list-title">{!! mb_substr($postUser->content, 0, 500, 'UTF-8').'...' !!}</span>
                                            </div>
                                        </div>
                                        <div class="ml-5">
                                            <div class="d-flex">
                                                <b style="width: 30px">{{$postUser->count_likes}}</b>
                                                <i class="bx bxs-heart"></i>
                                            </div>
                                            <div class="d-flex">
                                                <b style="width: 30px">{{$postUser->count_comments}}</b>
                                                <i class="bx bxs-comment"></i>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($lastPostsWith) && $lastPostsWith)
                <div class="col-6 ">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center pb-50">
                            <h4 class="card-title">Last Posts</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body p-0 pb-1">
                                <ul class="list-group list-group-flush">
                                    @foreach($lastPostsWith as $postUser)
                                        <li
                                            class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                            <div class="list-left d-flex">
                                                <div class="list-icon mr-1">
                                                    <div class="avatar bg-rgba-primary m-0">
                                                        <img src="{{$postUser->image_url}}" alt="" width="100"
                                                             height="100">
                                                    </div>
                                                </div>
                                                <div class="list-content">
                                                <span
                                                    class="list-title">{!! mb_substr($postUser->content, 0, 500, 'UTF-8').'...' !!}</span>
                                                </div>
                                            </div>
                                            <div class="ml-5">
                                                <div class="d-flex">
                                                    <b style="width: 30px">{{$postUser->count_likes}}</b>
                                                    <i class="bx bxs-heart"></i>
                                                </div>
                                                <div class="d-flex">
                                                    <b style="width: 30px">{{$postUser->count_comments}}</b>
                                                    <i class="bx bxs-comment"></i>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-scripts')
    <script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
    <script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
@endsection

@section('page-scripts')
    <script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
    <script type="text/javascript">
        var $primary = '#5A8DEE',
            $success = '#39DA8A',
            $danger = '#FF5B5C',
            $warning = '#FDAC41',
            $info = '#00CFDD',
            $label_color_light = '#E6EAEE';

        var themeColors = [$primary, $warning, $danger, $success, $info];


        $(document).ready(function (e) {
            // Line Area Chart
            // ----------------------------------
            var lineAreaOptions = {
                chart: {
                    height: 350,
                    type: 'area',
                },
                colors: themeColors,
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                series: {!! json_encode($statistic['series']) !!},
                legend: {
                    offsetY: -10
                },
                xaxis: {
                    type: 'date',
                    categories: {!! json_encode($statistic['categories']) !!},
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy'
                    },
                }
            }
            var lineAreaChart = new ApexCharts(
                document.querySelector("#line-area-chart"),
                lineAreaOptions
            );
            lineAreaChart.render();
            @if(isset($statisticWith) && $statisticWith)
            var lineAreaOptionsWith = {
                chart: {
                    height: 350,
                    type: 'area',
                },
                colors: themeColors,
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                series: {!! json_encode($statisticWith['series']) !!},
                legend: {
                    offsetY: -10
                },
                xaxis: {
                    type: 'date',
                    categories: {!! json_encode($statisticWith['categories']) !!},
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy'
                    },
                }
            }
            var lineAreaChartWith = new ApexCharts(
                document.querySelector("#line-area-chart-with"),
                lineAreaOptionsWith
            );
            lineAreaChartWith.render();
            @endif
            $('#user-select').off('change').change(function (e) {
                var user = $(this).val();
                if (user.length > 0) {
                    var currentUser = '{{$profile->name}}';

                    window.location.href = '/profile/' + currentUser + '/with/' + user;
                }
            })
        });
    </script>
@endsection
@section('vendor-scripts')
@endsection
