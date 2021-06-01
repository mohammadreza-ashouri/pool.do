@extends('layouts.falcon')

@section('content')
<carvas id="myChart"></carvas>
<div class="card mb-3">
    <div class="card-body rounded-soft bg-gradient">
        <div class="row text-white align-items-center no-gutters">
            <div class="col">
                <h4 class="text-white mb-0">Today $<span id="price">764.39</span></h4>
            </div>
            <!-- <div class="col-auto d-none d-sm-block">
                <select class="custom-select custom-select-sm mb-3" id="dashboard-chart-select">
                    <option value="all">All Payments</option>
                    <option value="successful" selected="selected">Successful Payments</option>
                    <option value="failed">Failed Payments</option>
                </select>
            </div> -->
        </div>
        <canvas class="max-w-100 rounded" id="chart-line" width="1618" height="500" aria-label="Line chart" role="img"></canvas>
    </div>
</div>
<!-- <div class="card bg-light mb-3">
    <div class="card-body p-3">
        <p class="fs--1 mb-0"><a href="#!"><span class="fas fa-exchange-alt mr-2" data-fa-transform="rotate-90"></span>A payout for <strong>$921.42 </strong>was deposited 13 days ago</a>. Your next deposit is expected on <strong>Tuesday, March 13.</strong></p>
    </div>
</div> -->
<div class="card-deck">
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-1.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <h6>Difficulty</h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning" id="difficulty">58.39k</div>
        </div>
    </div>
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-2.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <h6>Address Count</h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info" id="addressCount">73.46k</div>
        </div>
    </div>
    <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
        <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-3.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <h6>Current Price
                <!-- <span class="badge badge-soft-success rounded-capsule ml-2">9.54%</span> -->
            </h6>
            <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif" data-countup='' id="currentPrice">0</div>
        </div>
    </div>
</div>




<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Top Farmers</h5>
            </div>
            <div class="col-6 col-sm-auto ml-auto text-right pl-0">
                <div class="d-none" id="purchases-actions">
                    <div class="input-group input-group-sm">
                        <!-- <select class="custom-select cus" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select> -->
                        <!-- <button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button> -->
                    </div>
                </div>
                <!-- <div id="dashboard-actions">
                    <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">New</span></button>
                    <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Filter</span></button>
                    <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ml-1">Export</span></button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="card-body px-0 pt-0">
        <div class="dashboard-data-table">
            <table class="table table-sm table-dashboard fs--1 data-table border-bottom" data-options='{"responsive":false,"pagingType":"simple","lengthChange":false,"searching":false,"pageLength":8,"columnDefs":[{"targets":[0,6],"orderable":false}],"language":{"info":"_START_ to _END_ Items of _TOTAL_ — <a href=\"#!\" class=\"font-weight-semi-bold\"> view all <span class=\"fas fa-angle-right\" data-fa-transform=\"down-1\"></span> </a>"},"buttons":["copy","excel"]}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <!-- <th class="no-sort pr-1 align-middle data-table-row-bulk-select">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input checkbox-bulk-select" id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#purchases" data-checkbox-actions="#purchases-actions" data-checkbox-replaced-element="#dashboard-actions" />
                                <label class="custom-control-label" for="checkbox-bulk-purchases-select"></label>
                            </div>
                        </th> -->
                        <th class="sort pr-1 align-middle">Rank</th>
                        <th class="sort pr-1 align-middle text-center">Address</th>
                        <th class="sort pr-1 align-middle">Block Won</th>
                        <th class="sort pr-1 align-middle text-right">24h Block Won</th>
                    </tr>
                </thead>
                <tbody id="purchases">
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- <div class="row no-gutters">
    <div class="col-lg-4 pr-lg-2">
        <div class="card h-100 bg-gradient">
            <div class="card-header bg-transparent">
                <h5 class="text-white">Active users right now</h5>
                <div class="real-time-user display-1 font-weight-normal text-white" data-countup='{"count":119}'>0</div>
            </div>
            <div class="card-body text-white fs--1">
                <p class="border-bottom pb-2" style="border-color: rgba(255, 255, 255, 0.15) !important">Page views per second</p>
                <canvas class="max-w-100" id="real-time-user" width="10" height="4"></canvas>
                <div class="list-group-flush mt-4">
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0" style="border-color: rgba(255, 255, 255, 0.15)">
                        <p class="mb-0">Top Active Pages</p>
                        <p class="mb-0">Active Users</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                        <p class="mb-0">/bootstrap-themes/</p>
                        <p class="mb-0">3</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                        <p class="mb-0">/tags/html5/</p>
                        <p class="mb-0">3</p>
                    </div>
                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
                        <p class="mb-0">/</p>
                        <p class="mb-0">2</p>
                    </div>
                    <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
                        <p class="mb-0">/preview/falcon/dashboard/</p>
                        <p class="mb-0">2</p>
                    </div>
                    <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
                        <p class="mb-0">/100-best-themes...all-time/</p>
                        <p class="mb-0">1</p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right bg-transparent border-top" style="border-color: rgba(255, 255, 255, 0.15) !important"><a class="text-white" href="#!">Real-time report<span class="fa fa-chevron-right ml-1 fs--1"></span></a></div>
        </div>
    </div>
    <div class="col-lg-8 pl-lg-2">
        <div class="card h-100 mt-3 mt-lg-0">
            <div class="card-header bg-light d-flex flex-between-center">
                <h5 class="mb-0">Active users</h5>
                <div class="dropdown text-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                    <div class="dropdown-menu dropdown-menu-right border py-0">
                        <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Move</a><a class="dropdown-item" href="#!">Resize</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body h-100 p-0">
                <div class="h-100 bg-white" id="map" style="min-height: 300px;"></div>
            </div>
            <div class="card-footer bg-light">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <select class="custom-select custom-select-sm">
        <option value="week" selected="selected">Last 7 days</option>
        <option value="month">Last month</option>
        <option value="year">Last year</option>
        </select>
                    </div>
                    <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="d-none d-sm-inline-block mr-1">Location</span>overview<span class="fa fa-chevron-right ml-1 fs--1"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
