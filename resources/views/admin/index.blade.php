@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Revenue</h5>
                                <h2 class="mb-0 text-danger">$25054</h2>
                            </div>
                            <img src="{{ asset('admin/images/icon-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Refund</h5>
                                <h2 class="mb-0 text-primary">$1874</h2>
                            </div>
                            <img src="{{ asset('admin/images/icon-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Current Sales</h5>
                                <h2 class="mb-0 text-success">287</h2>
                            </div>
                            <img src="{{ asset('admin/images/icon-3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box pull-up">
                    <div class="box-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Recurring Sales</h5>
                                <h2 class="mb-0 text-warning">$2284</h2>
                            </div>
                            <div class="bar"
                                data-peity="{ &quot;fill&quot;: [&quot;#5949d6&quot;, &quot;#9fb3ca&quot;, &quot;#007eff&quot;, &quot;#2a8853&quot;, &quot;#ea9715&quot;, &quot;#fb3d4e&quot;, &quot;#bcc2c8&quot;, &quot;#205081&quot;], &quot;height&quot;: 61, &quot;width&quot;: 100, &quot;padding&quot;:0.4 }"
                                style="display: none;">10,15,8,20,18,11,7,18</div><svg class="peity" height="61"
                                width="100">
                                <rect fill="#5949d6" x="5" y="30.5" width="2.5" height="30.5"></rect>
                                <rect fill="#9fb3ca" x="17.5" y="15.25" width="2.5" height="45.75"></rect>
                                <rect fill="#007eff" x="30" y="36.599999999999994" width="2.5"
                                    height="24.400000000000006"></rect>
                                <rect fill="#2a8853" x="42.5" y="0" width="2.5" height="61"></rect>
                                <rect fill="#ea9715" x="55.00000000000001" y="6.100000000000001"
                                    width="2.499999999999986" height="54.9"></rect>
                                <rect fill="#fb3d4e" x="67.5" y="27.449999999999996" width="2.5"
                                    height="33.550000000000004"></rect>
                                <rect fill="#bcc2c8" x="80" y="39.650000000000006" width="2.5"
                                    height="21.349999999999994"></rect>
                                <rect fill="#205081" x="92.5" y="6.100000000000001" width="2.5" height="54.9"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Revenue Statistics
                        </h4>
                        <div class="box-controls pull-right">
                            <ul class="nav nav-pills nav-pills-sm" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
                                        <span class="nav-text base-font">Month</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
                                        <span class="nav-text base-font">Week</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-2 px-4 b-0 active" data-toggle="tab" href="#">
                                        <span class="nav-text base-font">Day</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-9 col-12">
                                <div id="charts_widget_2_chart" style="min-height: 290px;">
                                    <div id="apexcharts5bpxh13d"
                                        class="apexcharts-canvas apexcharts5bpxh13d apexcharts-theme-light"
                                        style="width: 498px; height: 290px;"><svg id="SvgjsSvg3544" width="498"
                                            height="290" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG3546" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(22, 30)">
                                                <defs id="SvgjsDefs3545">
                                                    <clipPath id="gridRectMask5bpxh13d">
                                                        <rect id="SvgjsRect3551" width="474" height="226.348" x="-4"
                                                            y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask5bpxh13d">
                                                        <rect id="SvgjsRect3552" width="490" height="246.348" x="-12"
                                                            y="-12" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient3577" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop3578" stop-opacity="1"
                                                            stop-color="rgba(234,151,21,1)" offset="0"></stop>
                                                        <stop id="SvgjsStop3579" stop-opacity="0.01"
                                                            stop-color="rgba(255,255,255,0.01)" offset="0.9"></stop>
                                                        <stop id="SvgjsStop3580" stop-opacity="0.01"
                                                            stop-color="rgba(255,255,255,0.01)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine3550" x1="51.27777777777777" y1="0"
                                                    x2="51.27777777777777" y2="222.348" stroke="#b6b6b6"
                                                    stroke-dasharray="3"
                                                    class="apexcharts-xcrosshairs apexcharts-active"
                                                    x="51.27777777777777" y="0" width="1" height="222.348"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                                </line>
                                                <g id="SvgjsG3583" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3584" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"><text id="SvgjsText3586"
                                                            font-family="Helvetica, Arial, sans-serif" x="0" y="251.348"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3587">Jan</tspan>
                                                            <title>Jan</title>
                                                        </text><text id="SvgjsText3589"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="51.777777777777786" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3590">Feb</tspan>
                                                            <title>Feb</title>
                                                        </text><text id="SvgjsText3592"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="103.55555555555557" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3593">Mar</tspan>
                                                            <title>Mar</title>
                                                        </text><text id="SvgjsText3595"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="155.33333333333334" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3596">Apr</tspan>
                                                            <title>Apr</title>
                                                        </text><text id="SvgjsText3598"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="207.11111111111111" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3599">May</tspan>
                                                            <title>May</title>
                                                        </text><text id="SvgjsText3601"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="258.88888888888886" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3602">Jun</tspan>
                                                            <title>Jun</title>
                                                        </text><text id="SvgjsText3604"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="310.66666666666663" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3605">Jul</tspan>
                                                            <title>Jul</title>
                                                        </text><text id="SvgjsText3607"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="362.4444444444444" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3608">Aug</tspan>
                                                            <title>Aug</title>
                                                        </text><text id="SvgjsText3610"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="414.2222222222222" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3611">Sep</tspan>
                                                            <title>Sep</title>
                                                        </text><text id="SvgjsText3613"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="465.99999999999994" y="251.348" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#8a99b5"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3614">Oct</tspan>
                                                            <title>Oct</title>
                                                        </text></g>
                                                    <line id="SvgjsLine3615" x1="0" y1="223.348" x2="466" y2="223.348"
                                                        stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                                </g>
                                                <g id="SvgjsG3618" class="apexcharts-grid">
                                                    <g id="SvgjsG3619" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine3631" x1="0" y1="0" x2="466" y2="0"
                                                            stroke="#8a99b5" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3632" x1="0" y1="55.587" x2="466" y2="55.587"
                                                            stroke="#8a99b5" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3633" x1="0" y1="111.174" x2="466"
                                                            y2="111.174" stroke="#8a99b5" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3634" x1="0" y1="166.76100000000002" x2="466"
                                                            y2="166.76100000000002" stroke="#8a99b5"
                                                            stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3635" x1="0" y1="222.348" x2="466"
                                                            y2="222.348" stroke="#8a99b5" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3620" class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine3621" x1="0" y1="223.348" x2="0" y2="229.348"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3622" x1="51.77777777777778" y1="223.348"
                                                        x2="51.77777777777778" y2="229.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3623" x1="103.55555555555556" y1="223.348"
                                                        x2="103.55555555555556" y2="229.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3624" x1="155.33333333333334" y1="223.348"
                                                        x2="155.33333333333334" y2="229.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3625" x1="207.11111111111111" y1="223.348"
                                                        x2="207.11111111111111" y2="229.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3626" x1="258.8888888888889" y1="223.348"
                                                        x2="258.8888888888889" y2="229.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3627" x1="310.6666666666667" y1="223.348"
                                                        x2="310.6666666666667" y2="229.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3628" x1="362.44444444444446" y1="223.348"
                                                        x2="362.44444444444446" y2="229.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3629" x1="414.22222222222223" y1="223.348"
                                                        x2="414.22222222222223" y2="229.348" stroke="#e0e0e0"
                                                        stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine3630" x1="466" y1="223.348" x2="466" y2="229.348"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <rect id="SvgjsRect3636" width="466" height="55.587" x="0" y="0"
                                                        rx="0" ry="0" opacity="0" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="transparent"
                                                        clip-path="url(#gridRectMask5bpxh13d)"
                                                        class="apexcharts-grid-row"></rect>
                                                    <rect id="SvgjsRect3637" width="466" height="55.587" x="0"
                                                        y="55.587" rx="0" ry="0" opacity="0" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="transparent"
                                                        clip-path="url(#gridRectMask5bpxh13d)"
                                                        class="apexcharts-grid-row"></rect>
                                                    <rect id="SvgjsRect3638" width="466" height="55.587" x="0"
                                                        y="111.174" rx="0" ry="0" opacity="0" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="transparent"
                                                        clip-path="url(#gridRectMask5bpxh13d)"
                                                        class="apexcharts-grid-row"></rect>
                                                    <rect id="SvgjsRect3639" width="466" height="55.587" x="0"
                                                        y="166.76100000000002" rx="0" ry="0" opacity="0"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="transparent" clip-path="url(#gridRectMask5bpxh13d)"
                                                        class="apexcharts-grid-row"></rect>
                                                    <line id="SvgjsLine3641" x1="0" y1="222.348" x2="466" y2="222.348"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3640" x1="0" y1="1" x2="0" y2="222.348"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3554"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG3555" class="apexcharts-series" seriesName="Profit"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3581"
                                                            d="M 0 222.348L 0 222.348L 51.77777777777777 166.761L 103.55555555555554 69.48374999999999L 155.33333333333331 125.07075L 207.1111111111111 83.38049999999998L 258.88888888888886 138.9675L 310.66666666666663 41.69024999999999L 362.4444444444444 145.915875L 414.2222222222222 27.793499999999995L 465.99999999999994 48.63862499999999L 465.99999999999994 222.348M 465.99999999999994 48.63862499999999z"
                                                            fill="url(#SvgjsLinearGradient3577)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask5bpxh13d)"
                                                            pathTo="M 0 222.348L 0 222.348L 51.77777777777777 166.761L 103.55555555555554 69.48374999999999L 155.33333333333331 125.07075L 207.1111111111111 83.38049999999998L 258.88888888888886 138.9675L 310.66666666666663 41.69024999999999L 362.4444444444444 145.915875L 414.2222222222222 27.793499999999995L 465.99999999999994 48.63862499999999L 465.99999999999994 222.348M 465.99999999999994 48.63862499999999z"
                                                            pathFrom="M -1 222.348L -1 222.348L 51.77777777777777 222.348L 103.55555555555554 222.348L 155.33333333333331 222.348L 207.1111111111111 222.348L 258.88888888888886 222.348L 310.66666666666663 222.348L 362.4444444444444 222.348L 414.2222222222222 222.348L 465.99999999999994 222.348">
                                                        </path>
                                                        <path id="SvgjsPath3582"
                                                            d="M 0 222.348L 51.77777777777777 166.761L 103.55555555555554 69.48374999999999L 155.33333333333331 125.07075L 207.1111111111111 83.38049999999998L 258.88888888888886 138.9675L 310.66666666666663 41.69024999999999L 362.4444444444444 145.915875L 414.2222222222222 27.793499999999995L 465.99999999999994 48.63862499999999"
                                                            fill="none" fill-opacity="1" stroke="#ea9715"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask5bpxh13d)"
                                                            pathTo="M 0 222.348L 51.77777777777777 166.761L 103.55555555555554 69.48374999999999L 155.33333333333331 125.07075L 207.1111111111111 83.38049999999998L 258.88888888888886 138.9675L 310.66666666666663 41.69024999999999L 362.4444444444444 145.915875L 414.2222222222222 27.793499999999995L 465.99999999999994 48.63862499999999"
                                                            pathFrom="M -1 222.348L -1 222.348L 51.77777777777777 222.348L 103.55555555555554 222.348L 155.33333333333331 222.348L 207.1111111111111 222.348L 258.88888888888886 222.348L 310.66666666666663 222.348L 362.4444444444444 222.348L 414.2222222222222 222.348L 465.99999999999994 222.348">
                                                        </path>
                                                        <g id="SvgjsG3556" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG3558" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3559" r="5" cx="0" cy="222.348"
                                                                    class="apexcharts-marker no-pointer-events wmlbbwzx9"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="0" j="0"
                                                                    index="0" default-marker-size="5"></circle>
                                                                <circle id="SvgjsCircle3560" r="8"
                                                                    cx="51.77777777777777" cy="166.761"
                                                                    class="apexcharts-marker no-pointer-events w34jf7e0h"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="1" j="1"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                            <g id="SvgjsG3561" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3562" r="5"
                                                                    cx="103.55555555555554" cy="69.48374999999999"
                                                                    class="apexcharts-marker no-pointer-events w4z5x78d1"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="2" j="2"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                            <g id="SvgjsG3563" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3564" r="5"
                                                                    cx="155.33333333333331" cy="125.07075"
                                                                    class="apexcharts-marker no-pointer-events w2k26uv87f"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="3" j="3"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                            <g id="SvgjsG3565" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3566" r="5"
                                                                    cx="207.1111111111111" cy="83.38049999999998"
                                                                    class="apexcharts-marker no-pointer-events w3llgin8q"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="4" j="4"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                            <g id="SvgjsG3567" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3568" r="5"
                                                                    cx="258.88888888888886" cy="138.9675"
                                                                    class="apexcharts-marker no-pointer-events wti1zhplg"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="5" j="5"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                            <g id="SvgjsG3569" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3570" r="5"
                                                                    cx="310.66666666666663" cy="41.69024999999999"
                                                                    class="apexcharts-marker no-pointer-events wiye2mjdc"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="6" j="6"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                            <g id="SvgjsG3571" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3572" r="5"
                                                                    cx="362.4444444444444" cy="145.915875"
                                                                    class="apexcharts-marker no-pointer-events wi4fvt03q"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="7" j="7"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                            <g id="SvgjsG3573" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3574" r="5"
                                                                    cx="414.2222222222222" cy="27.793499999999995"
                                                                    class="apexcharts-marker no-pointer-events wbln6xmio"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="8" j="8"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                            <g id="SvgjsG3575" class="apexcharts-series-markers"
                                                                clip-path="url(#gridRectMarkerMask5bpxh13d)">
                                                                <circle id="SvgjsCircle3576" r="5"
                                                                    cx="465.99999999999994" cy="48.63862499999999"
                                                                    class="apexcharts-marker no-pointer-events wrqrdmo5j"
                                                                    stroke="#ea9715" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="9" j="9"
                                                                    index="0" default-marker-size="5"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3557" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3642" x1="0" y1="0" x2="466" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3643" x1="0" y1="0" x2="466" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3644" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3645" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3646" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3549" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG3616" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-8, 0)">
                                                <g id="SvgjsG3617" class="apexcharts-yaxis-texts-g"></g>
                                            </g>
                                            <g id="SvgjsG3547" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light apexcharts-active"
                                            style="left: 86.7778px; top: 170.761px;">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Feb
                                            </div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                style="display: flex;"><span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(234, 151, 21);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label">Profit: </span><span
                                                            class="apexcharts-tooltip-text-value">40K</span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light apexcharts-active"
                                            style="left: 50.1059px; top: 254.348px;">
                                            <div class="apexcharts-xaxistooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 24.3438px;">
                                                Feb</div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                        <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                            <div class="apexcharts-menu-icon" title="Menu"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                </svg></div>
                                            <div class="apexcharts-menu">
                                                <div class="apexcharts-menu-item exportSVG" title="Download SVG">
                                                    Download SVG</div>
                                                <div class="apexcharts-menu-item exportPNG" title="Download PNG">
                                                    Download PNG</div>
                                                <div class="apexcharts-menu-item exportCSV" title="Download CSV">
                                                    Download CSV</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 509px; height: 291px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="p-20">
                                    <div class="mb-40">
                                        <h2 class="mb-0 text-primary font-weight-500">$125952</h2>
                                        <p class="mb-0">Income</p>
                                        <div id="barchart1"><canvas width="146" height="38"
                                                style="display: inline-block; width: 146px; height: 38px; vertical-align: top;"></canvas>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="mb-0 text-info font-weight-500">$42.6%</h2>
                                        <p class="mb-0">Income</p>
                                        <div id="barchart2"><canvas width="146" height="38"
                                                style="display: inline-block; width: 146px; height: 38px; vertical-align: top;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="box overflow-hidden bg-primary">
                    <div class="box-body p-0" style="position: relative;">
                        <div class="px-30 pt-20">
                            <h2 class="text-white mb-0">34,042 </h2>
                            <p class="text-white-50">Patients this month</p>
                        </div>
                        <div id="statisticschart3" style="min-height: 295px;">
                            <div id="apexchartszz6xjd59"
                                class="apexcharts-canvas apexchartszz6xjd59 apexcharts-theme-light"
                                style="width: 600px; height: 295px;"><svg id="SvgjsSvg3481" width="600" height="295"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(-50, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG3483" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(22, 30)">
                                        <defs id="SvgjsDefs3482">
                                            <clipPath id="gridRectMaskzz6xjd59">
                                                <rect id="SvgjsRect3488" width="577" height="232.348" x="-4.5" y="-2.5"
                                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskzz6xjd59">
                                                <rect id="SvgjsRect3489" width="572" height="231.348" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine3487" x1="226.7" y1="0" x2="226.7" y2="227.348"
                                            stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                            x="226.7" y="0" width="1" height="227.348" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG3496" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG3497" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText3499"
                                                    font-family="Helvetica, Arial, sans-serif" x="0" y="256.348"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3500">1</tspan>
                                                    <title>1</title>
                                                </text><text id="SvgjsText3502"
                                                    font-family="Helvetica, Arial, sans-serif" x="56.79999999999999"
                                                    y="256.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3503">2</tspan>
                                                    <title>2</title>
                                                </text><text id="SvgjsText3505"
                                                    font-family="Helvetica, Arial, sans-serif" x="113.6" y="256.348"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3506">3</tspan>
                                                    <title>3</title>
                                                </text><text id="SvgjsText3508"
                                                    font-family="Helvetica, Arial, sans-serif" x="170.4" y="256.348"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3509">4</tspan>
                                                    <title>4</title>
                                                </text><text id="SvgjsText3511"
                                                    font-family="Helvetica, Arial, sans-serif" x="227.20000000000002"
                                                    y="256.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3512">5</tspan>
                                                    <title>5</title>
                                                </text><text id="SvgjsText3514"
                                                    font-family="Helvetica, Arial, sans-serif" x="284.00000000000006"
                                                    y="256.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3515">6</tspan>
                                                    <title>6</title>
                                                </text><text id="SvgjsText3517"
                                                    font-family="Helvetica, Arial, sans-serif" x="340.80000000000007"
                                                    y="256.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3518">7</tspan>
                                                    <title>7</title>
                                                </text><text id="SvgjsText3520"
                                                    font-family="Helvetica, Arial, sans-serif" x="397.6000000000001"
                                                    y="256.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3521">8</tspan>
                                                    <title>8</title>
                                                </text><text id="SvgjsText3523"
                                                    font-family="Helvetica, Arial, sans-serif" x="454.4000000000001"
                                                    y="256.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3524">9</tspan>
                                                    <title>9</title>
                                                </text><text id="SvgjsText3526"
                                                    font-family="Helvetica, Arial, sans-serif" x="511.20000000000005"
                                                    y="256.348" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3527">10</tspan>
                                                    <title>10</title>
                                                </text><text id="SvgjsText3529"
                                                    font-family="Helvetica, Arial, sans-serif" x="568" y="256.348"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                    font-weight="400" fill="#8a99b5"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan3530">11</tspan>
                                                    <title>11</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG3533" class="apexcharts-grid">
                                            <g id="SvgjsG3534" class="apexcharts-gridlines-horizontal"></g>
                                            <g id="SvgjsG3535" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine3537" x1="0" y1="227.348" x2="568" y2="227.348"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine3536" x1="0" y1="1" x2="0" y2="227.348"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG3491" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG3492" class="apexcharts-series" seriesName="series1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath3495"
                                                    d="M 0 93.97050666666667C 19.88 93.97050666666667 36.92 25.766106666666644 56.8 25.766106666666644C 76.67999999999999 25.766106666666644 93.72 68.20439999999996 113.6 68.20439999999996C 133.48 68.20439999999996 150.52 59.110479999999995 170.4 59.110479999999995C 190.28 59.110479999999995 207.32 147.01837333333333 227.2 147.01837333333333C 247.07999999999998 147.01837333333333 264.12 77.29831999999999 284 77.29831999999999C 303.88 77.29831999999999 320.92 127.31487999999999 340.8 127.31487999999999C 360.68 127.31487999999999 377.71999999999997 128.83053333333334 397.59999999999997 128.83053333333334C 417.47999999999996 128.83053333333334 434.52 184.90970666666666 454.4 184.90970666666666C 474.28 184.90970666666666 491.32 110.64269333333331 511.2 110.64269333333331C 531.08 110.64269333333331 548.12 122.76792 568 122.76792"
                                                    fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                    stroke-dasharray="0" class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMaskzz6xjd59)"
                                                    pathTo="M 0 93.97050666666667C 19.88 93.97050666666667 36.92 25.766106666666644 56.8 25.766106666666644C 76.67999999999999 25.766106666666644 93.72 68.20439999999996 113.6 68.20439999999996C 133.48 68.20439999999996 150.52 59.110479999999995 170.4 59.110479999999995C 190.28 59.110479999999995 207.32 147.01837333333333 227.2 147.01837333333333C 247.07999999999998 147.01837333333333 264.12 77.29831999999999 284 77.29831999999999C 303.88 77.29831999999999 320.92 127.31487999999999 340.8 127.31487999999999C 360.68 127.31487999999999 377.71999999999997 128.83053333333334 397.59999999999997 128.83053333333334C 417.47999999999996 128.83053333333334 434.52 184.90970666666666 454.4 184.90970666666666C 474.28 184.90970666666666 491.32 110.64269333333331 511.2 110.64269333333331C 531.08 110.64269333333331 548.12 122.76792 568 122.76792"
                                                    pathFrom="M -1 363.7568L -1 363.7568L 56.8 363.7568L 113.6 363.7568L 170.4 363.7568L 227.2 363.7568L 284 363.7568L 340.8 363.7568L 397.59999999999997 363.7568L 454.4 363.7568L 511.2 363.7568L 568 363.7568">
                                                </path>
                                                <g id="SvgjsG3493" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle3543" r="0" cx="227.2"
                                                            cy="147.01837333333333"
                                                            class="apexcharts-marker wxk4y6l6p no-pointer-events"
                                                            stroke="#ffffff" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG3494" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine3538" x1="0" y1="0" x2="568" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine3539" x1="0" y1="0" x2="568" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG3540" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG3541" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG3542" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect3486" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG3531" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                        <g id="SvgjsG3532" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG3484" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark"
                                    style="left: 260.2px; top: 150.018px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">5</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="display: flex;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 255, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">series1: </span><span
                                                    class="apexcharts-tooltip-text-value">143</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark"
                                    style="left: 233.7px; top: 259.348px;">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 8px;">
                                        5</div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                    <div class="apexcharts-menu-icon" title="Menu"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                        </svg></div>
                                    <div class="apexcharts-menu">
                                        <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG
                                        </div>
                                        <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG
                                        </div>
                                        <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 351px; height: 397px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Stock Market</h4>
                    </div>
                    <div class="box-body">
                        <div class="d-flex justify-content-between align-items-center mb-15">
                            <div>
                                <h3 class="mb-0 text-primary">XU200</h3>
                                <p class="mb-0">08 November 2020</p>
                            </div>
                            <div class="max-w-150" style="position: relative;">
                                <div id="chart-spark1" style="min-height: 40px;">
                                    <div id="apexchartszv89aocq"
                                        class="apexcharts-canvas apexchartszv89aocq apexcharts-theme-light"
                                        style="width: 150px; height: 40px;"><svg id="SvgjsSvg3684" width="150"
                                            height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG3686" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs3685">
                                                    <clipPath id="gridRectMaskzv89aocq">
                                                        <rect id="SvgjsRect3692" width="156" height="42" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskzv89aocq">
                                                        <rect id="SvgjsRect3693" width="154" height="44" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient3699" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop3700" stop-opacity="0.65"
                                                            stop-color="rgba(89,73,214,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop3701" stop-opacity="0.5"
                                                            stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3702" stop-opacity="0.5"
                                                            stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine3691" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="40" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3705" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3706" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 2.75)"></g>
                                                </g>
                                                <g id="SvgjsG3708" class="apexcharts-grid">
                                                    <g id="SvgjsG3709" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine3711" x1="0" y1="0" x2="150" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3712" x1="0" y1="4" x2="150" y2="4"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3713" x1="0" y1="8" x2="150" y2="8"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3714" x1="0" y1="12" x2="150" y2="12"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3715" x1="0" y1="16" x2="150" y2="16"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3716" x1="0" y1="20" x2="150" y2="20"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3717" x1="0" y1="24" x2="150" y2="24"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3718" x1="0" y1="28" x2="150" y2="28"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3719" x1="0" y1="32" x2="150" y2="32"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3720" x1="0" y1="36" x2="150" y2="36"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3721" x1="0" y1="40" x2="150" y2="40"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3710" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine3723" x1="0" y1="40" x2="150" y2="40"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3722" x1="0" y1="1" x2="0" y2="40"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3695"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG3696" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3703"
                                                            d="M 0 40L 0 24.69493278179938C 2.282608695652174 24.69493278179938 4.239130434782609 13.11271975180972 6.521739130434783 13.11271975180972C 8.804347826086957 13.11271975180972 10.760869565217392 20.972078593588417 13.043478260869566 20.972078593588417C 15.32608695652174 20.972078593588417 17.282608695652176 32.1406411582213 19.565217391304348 32.1406411582213C 21.847826086956523 32.1406411582213 23.804347826086957 25.52223371251293 26.086956521739133 25.52223371251293C 28.369565217391305 25.52223371251293 30.326086956521742 18.076525336091002 32.608695652173914 18.076525336091002C 34.891304347826086 18.076525336091002 36.84782608695652 17.66287487073423 39.130434782608695 17.66287487073423C 41.413043478260875 17.66287487073423 43.36956521739131 30.072388831437436 45.652173913043484 30.072388831437436C 47.934782608695656 30.072388831437436 49.89130434782609 24.281282316442606 52.173913043478265 24.281282316442606C 54.45652173913044 24.281282316442606 56.413043478260875 14.353671147880043 58.69565217391305 14.353671147880043C 60.97826086956522 14.353671147880043 62.934782608695656 20.558428128231643 65.21739130434783 20.558428128231643C 67.5 20.558428128231643 69.45652173913044 17.66287487073423 71.73913043478261 17.66287487073423C 74.02173913043478 17.66287487073423 75.97826086956522 28.831437435367114 78.26086956521739 28.831437435367114C 80.54347826086956 28.831437435367114 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 27.17683557394002 91.30434782608697 27.17683557394002C 93.58695652173914 27.17683557394002 95.54347826086958 16.835573940020684 97.82608695652175 16.835573940020684C 100.10869565217392 16.835573940020684 102.06521739130436 21.38572905894519 104.34782608695653 21.38572905894519C 106.6304347826087 21.38572905894519 108.58695652173914 14.767321613236813 110.86956521739131 14.767321613236813C 113.15217391304348 14.767321613236813 115.10869565217392 22.21302998965874 117.3913043478261 22.21302998965874C 119.67391304347827 22.21302998965874 121.6304347826087 1.5305067218200605 123.91304347826087 1.5305067218200605C 126.19565217391305 1.5305067218200605 128.15217391304347 18.90382626680455 130.43478260869566 18.90382626680455C 132.71739130434784 18.90382626680455 134.67391304347825 28.831437435367114 136.95652173913044 28.831437435367114C 139.23913043478262 28.831437435367114 141.19565217391303 23.867631851085832 143.47826086956522 23.867631851085832C 145.7608695652174 23.867631851085832 147.7173913043478 23.040330920372284 150 23.040330920372284C 150 23.040330920372284 150 23.040330920372284 150 40M 150 23.040330920372284z"
                                                            fill="url(#SvgjsLinearGradient3699)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskzv89aocq)"
                                                            pathTo="M 0 40L 0 24.69493278179938C 2.282608695652174 24.69493278179938 4.239130434782609 13.11271975180972 6.521739130434783 13.11271975180972C 8.804347826086957 13.11271975180972 10.760869565217392 20.972078593588417 13.043478260869566 20.972078593588417C 15.32608695652174 20.972078593588417 17.282608695652176 32.1406411582213 19.565217391304348 32.1406411582213C 21.847826086956523 32.1406411582213 23.804347826086957 25.52223371251293 26.086956521739133 25.52223371251293C 28.369565217391305 25.52223371251293 30.326086956521742 18.076525336091002 32.608695652173914 18.076525336091002C 34.891304347826086 18.076525336091002 36.84782608695652 17.66287487073423 39.130434782608695 17.66287487073423C 41.413043478260875 17.66287487073423 43.36956521739131 30.072388831437436 45.652173913043484 30.072388831437436C 47.934782608695656 30.072388831437436 49.89130434782609 24.281282316442606 52.173913043478265 24.281282316442606C 54.45652173913044 24.281282316442606 56.413043478260875 14.353671147880043 58.69565217391305 14.353671147880043C 60.97826086956522 14.353671147880043 62.934782608695656 20.558428128231643 65.21739130434783 20.558428128231643C 67.5 20.558428128231643 69.45652173913044 17.66287487073423 71.73913043478261 17.66287487073423C 74.02173913043478 17.66287487073423 75.97826086956522 28.831437435367114 78.26086956521739 28.831437435367114C 80.54347826086956 28.831437435367114 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 27.17683557394002 91.30434782608697 27.17683557394002C 93.58695652173914 27.17683557394002 95.54347826086958 16.835573940020684 97.82608695652175 16.835573940020684C 100.10869565217392 16.835573940020684 102.06521739130436 21.38572905894519 104.34782608695653 21.38572905894519C 106.6304347826087 21.38572905894519 108.58695652173914 14.767321613236813 110.86956521739131 14.767321613236813C 113.15217391304348 14.767321613236813 115.10869565217392 22.21302998965874 117.3913043478261 22.21302998965874C 119.67391304347827 22.21302998965874 121.6304347826087 1.5305067218200605 123.91304347826087 1.5305067218200605C 126.19565217391305 1.5305067218200605 128.15217391304347 18.90382626680455 130.43478260869566 18.90382626680455C 132.71739130434784 18.90382626680455 134.67391304347825 28.831437435367114 136.95652173913044 28.831437435367114C 139.23913043478262 28.831437435367114 141.19565217391303 23.867631851085832 143.47826086956522 23.867631851085832C 145.7608695652174 23.867631851085832 147.7173913043478 23.040330920372284 150 23.040330920372284C 150 23.040330920372284 150 23.040330920372284 150 40M 150 23.040330920372284z"
                                                            pathFrom="M -1 40L -1 40L 6.521739130434783 40L 13.043478260869566 40L 19.565217391304348 40L 26.086956521739133 40L 32.608695652173914 40L 39.130434782608695 40L 45.652173913043484 40L 52.173913043478265 40L 58.69565217391305 40L 65.21739130434783 40L 71.73913043478261 40L 78.26086956521739 40L 84.78260869565219 40L 91.30434782608697 40L 97.82608695652175 40L 104.34782608695653 40L 110.86956521739131 40L 117.3913043478261 40L 123.91304347826087 40L 130.43478260869566 40L 136.95652173913044 40L 143.47826086956522 40L 150 40">
                                                        </path>
                                                        <path id="SvgjsPath3704"
                                                            d="M 0 24.69493278179938C 2.282608695652174 24.69493278179938 4.239130434782609 13.11271975180972 6.521739130434783 13.11271975180972C 8.804347826086957 13.11271975180972 10.760869565217392 20.972078593588417 13.043478260869566 20.972078593588417C 15.32608695652174 20.972078593588417 17.282608695652176 32.1406411582213 19.565217391304348 32.1406411582213C 21.847826086956523 32.1406411582213 23.804347826086957 25.52223371251293 26.086956521739133 25.52223371251293C 28.369565217391305 25.52223371251293 30.326086956521742 18.076525336091002 32.608695652173914 18.076525336091002C 34.891304347826086 18.076525336091002 36.84782608695652 17.66287487073423 39.130434782608695 17.66287487073423C 41.413043478260875 17.66287487073423 43.36956521739131 30.072388831437436 45.652173913043484 30.072388831437436C 47.934782608695656 30.072388831437436 49.89130434782609 24.281282316442606 52.173913043478265 24.281282316442606C 54.45652173913044 24.281282316442606 56.413043478260875 14.353671147880043 58.69565217391305 14.353671147880043C 60.97826086956522 14.353671147880043 62.934782608695656 20.558428128231643 65.21739130434783 20.558428128231643C 67.5 20.558428128231643 69.45652173913044 17.66287487073423 71.73913043478261 17.66287487073423C 74.02173913043478 17.66287487073423 75.97826086956522 28.831437435367114 78.26086956521739 28.831437435367114C 80.54347826086956 28.831437435367114 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 27.17683557394002 91.30434782608697 27.17683557394002C 93.58695652173914 27.17683557394002 95.54347826086958 16.835573940020684 97.82608695652175 16.835573940020684C 100.10869565217392 16.835573940020684 102.06521739130436 21.38572905894519 104.34782608695653 21.38572905894519C 106.6304347826087 21.38572905894519 108.58695652173914 14.767321613236813 110.86956521739131 14.767321613236813C 113.15217391304348 14.767321613236813 115.10869565217392 22.21302998965874 117.3913043478261 22.21302998965874C 119.67391304347827 22.21302998965874 121.6304347826087 1.5305067218200605 123.91304347826087 1.5305067218200605C 126.19565217391305 1.5305067218200605 128.15217391304347 18.90382626680455 130.43478260869566 18.90382626680455C 132.71739130434784 18.90382626680455 134.67391304347825 28.831437435367114 136.95652173913044 28.831437435367114C 139.23913043478262 28.831437435367114 141.19565217391303 23.867631851085832 143.47826086956522 23.867631851085832C 145.7608695652174 23.867631851085832 147.7173913043478 23.040330920372284 150 23.040330920372284"
                                                            fill="none" fill-opacity="1" stroke="#5949d6"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskzv89aocq)"
                                                            pathTo="M 0 24.69493278179938C 2.282608695652174 24.69493278179938 4.239130434782609 13.11271975180972 6.521739130434783 13.11271975180972C 8.804347826086957 13.11271975180972 10.760869565217392 20.972078593588417 13.043478260869566 20.972078593588417C 15.32608695652174 20.972078593588417 17.282608695652176 32.1406411582213 19.565217391304348 32.1406411582213C 21.847826086956523 32.1406411582213 23.804347826086957 25.52223371251293 26.086956521739133 25.52223371251293C 28.369565217391305 25.52223371251293 30.326086956521742 18.076525336091002 32.608695652173914 18.076525336091002C 34.891304347826086 18.076525336091002 36.84782608695652 17.66287487073423 39.130434782608695 17.66287487073423C 41.413043478260875 17.66287487073423 43.36956521739131 30.072388831437436 45.652173913043484 30.072388831437436C 47.934782608695656 30.072388831437436 49.89130434782609 24.281282316442606 52.173913043478265 24.281282316442606C 54.45652173913044 24.281282316442606 56.413043478260875 14.353671147880043 58.69565217391305 14.353671147880043C 60.97826086956522 14.353671147880043 62.934782608695656 20.558428128231643 65.21739130434783 20.558428128231643C 67.5 20.558428128231643 69.45652173913044 17.66287487073423 71.73913043478261 17.66287487073423C 74.02173913043478 17.66287487073423 75.97826086956522 28.831437435367114 78.26086956521739 28.831437435367114C 80.54347826086956 28.831437435367114 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 27.17683557394002 91.30434782608697 27.17683557394002C 93.58695652173914 27.17683557394002 95.54347826086958 16.835573940020684 97.82608695652175 16.835573940020684C 100.10869565217392 16.835573940020684 102.06521739130436 21.38572905894519 104.34782608695653 21.38572905894519C 106.6304347826087 21.38572905894519 108.58695652173914 14.767321613236813 110.86956521739131 14.767321613236813C 113.15217391304348 14.767321613236813 115.10869565217392 22.21302998965874 117.3913043478261 22.21302998965874C 119.67391304347827 22.21302998965874 121.6304347826087 1.5305067218200605 123.91304347826087 1.5305067218200605C 126.19565217391305 1.5305067218200605 128.15217391304347 18.90382626680455 130.43478260869566 18.90382626680455C 132.71739130434784 18.90382626680455 134.67391304347825 28.831437435367114 136.95652173913044 28.831437435367114C 139.23913043478262 28.831437435367114 141.19565217391303 23.867631851085832 143.47826086956522 23.867631851085832C 145.7608695652174 23.867631851085832 147.7173913043478 23.040330920372284 150 23.040330920372284"
                                                            pathFrom="M -1 40L -1 40L 6.521739130434783 40L 13.043478260869566 40L 19.565217391304348 40L 26.086956521739133 40L 32.608695652173914 40L 39.130434782608695 40L 45.652173913043484 40L 52.173913043478265 40L 58.69565217391305 40L 65.21739130434783 40L 71.73913043478261 40L 78.26086956521739 40L 84.78260869565219 40L 91.30434782608697 40L 97.82608695652175 40L 104.34782608695653 40L 110.86956521739131 40L 117.3913043478261 40L 123.91304347826087 40L 130.43478260869566 40L 136.95652173913044 40L 143.47826086956522 40L 150 40">
                                                        </path>
                                                        <g id="SvgjsG3697" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3729" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wkip2tuof no-pointer-events"
                                                                    stroke="#ffffff" fill="#5949d6" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3698" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3724" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3725" x1="0" y1="0" x2="150" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3726" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3727" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3728" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3690" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG3707" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3687" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(89, 73, 214);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 d-flex justify-content-between w-100p font-size-16 font-weight-600">
                                    120.450 <span class="text-danger">-15%</span></p>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 151px; height: 65px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-15">
                            <div>
                                <h3 class="mb-0 text-primary">Jake Weary</h3>
                                <p class="mb-0">08 November 2020</p>
                            </div>
                            <div class="max-w-150" style="position: relative;">
                                <div id="chart-spark2" style="min-height: 40px;">
                                    <div id="apexchartsl2frktfhh"
                                        class="apexcharts-canvas apexchartsl2frktfhh apexcharts-theme-light"
                                        style="width: 150px; height: 40px;"><svg id="SvgjsSvg3731" width="150"
                                            height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG3733" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs3732">
                                                    <clipPath id="gridRectMaskl2frktfhh">
                                                        <rect id="SvgjsRect3739" width="156" height="42" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskl2frktfhh">
                                                        <rect id="SvgjsRect3740" width="154" height="44" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient3746" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop3747" stop-opacity="0.65"
                                                            stop-color="rgba(89,73,214,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop3748" stop-opacity="0.5"
                                                            stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3749" stop-opacity="0.5"
                                                            stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine3738" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="40" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3752" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3753" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 2.75)"></g>
                                                </g>
                                                <g id="SvgjsG3755" class="apexcharts-grid">
                                                    <g id="SvgjsG3756" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine3758" x1="0" y1="0" x2="150" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3759" x1="0" y1="4" x2="150" y2="4"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3760" x1="0" y1="8" x2="150" y2="8"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3761" x1="0" y1="12" x2="150" y2="12"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3762" x1="0" y1="16" x2="150" y2="16"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3763" x1="0" y1="20" x2="150" y2="20"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3764" x1="0" y1="24" x2="150" y2="24"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3765" x1="0" y1="28" x2="150" y2="28"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3766" x1="0" y1="32" x2="150" y2="32"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3767" x1="0" y1="36" x2="150" y2="36"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3768" x1="0" y1="40" x2="150" y2="40"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3757" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine3770" x1="0" y1="40" x2="150" y2="40"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3769" x1="0" y1="1" x2="0" y2="40"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3742"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG3743" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3750"
                                                            d="M 0 40L 0 14.353671147880043C 2.282608695652174 14.353671147880043 4.239130434782609 16.835573940020684 6.521739130434783 16.835573940020684C 8.804347826086957 16.835573940020684 10.760869565217392 28.831437435367114 13.043478260869566 28.831437435367114C 15.32608695652174 28.831437435367114 17.282608695652176 27.17683557394002 19.565217391304348 27.17683557394002C 21.847826086956523 27.17683557394002 23.804347826086957 17.66287487073423 26.086956521739133 17.66287487073423C 28.369565217391305 17.66287487073423 30.326086956521742 24.281282316442606 32.608695652173914 24.281282316442606C 34.891304347826086 24.281282316442606 36.84782608695652 18.90382626680455 39.130434782608695 18.90382626680455C 41.413043478260875 18.90382626680455 43.36956521739131 24.69493278179938 45.652173913043484 24.69493278179938C 47.934782608695656 24.69493278179938 49.89130434782609 1.5305067218200605 52.173913043478265 1.5305067218200605C 54.45652173913044 1.5305067218200605 56.413043478260875 20.558428128231643 58.69565217391305 20.558428128231643C 60.97826086956522 20.558428128231643 62.934782608695656 13.11271975180972 65.21739130434783 13.11271975180972C 67.5 13.11271975180972 69.45652173913044 23.040330920372284 71.73913043478261 23.040330920372284C 74.02173913043478 23.040330920372284 75.97826086956522 20.972078593588417 78.26086956521739 20.972078593588417C 80.54347826086956 20.972078593588417 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 28.831437435367114 91.30434782608697 28.831437435367114C 93.58695652173914 28.831437435367114 95.54347826086958 30.072388831437436 97.82608695652175 30.072388831437436C 100.10869565217392 30.072388831437436 102.06521739130436 18.076525336091002 104.34782608695653 18.076525336091002C 106.6304347826087 18.076525336091002 108.58695652173914 21.38572905894519 110.86956521739131 21.38572905894519C 113.15217391304348 21.38572905894519 115.10869565217392 25.52223371251293 117.3913043478261 25.52223371251293C 119.67391304347827 25.52223371251293 121.6304347826087 23.867631851085832 123.91304347826087 23.867631851085832C 126.19565217391305 23.867631851085832 128.15217391304347 14.767321613236813 130.43478260869566 14.767321613236813C 132.71739130434784 14.767321613236813 134.67391304347825 32.1406411582213 136.95652173913044 32.1406411582213C 139.23913043478262 32.1406411582213 141.19565217391303 17.66287487073423 143.47826086956522 17.66287487073423C 145.7608695652174 17.66287487073423 147.7173913043478 22.21302998965874 150 22.21302998965874C 150 22.21302998965874 150 22.21302998965874 150 40M 150 22.21302998965874z"
                                                            fill="url(#SvgjsLinearGradient3746)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskl2frktfhh)"
                                                            pathTo="M 0 40L 0 14.353671147880043C 2.282608695652174 14.353671147880043 4.239130434782609 16.835573940020684 6.521739130434783 16.835573940020684C 8.804347826086957 16.835573940020684 10.760869565217392 28.831437435367114 13.043478260869566 28.831437435367114C 15.32608695652174 28.831437435367114 17.282608695652176 27.17683557394002 19.565217391304348 27.17683557394002C 21.847826086956523 27.17683557394002 23.804347826086957 17.66287487073423 26.086956521739133 17.66287487073423C 28.369565217391305 17.66287487073423 30.326086956521742 24.281282316442606 32.608695652173914 24.281282316442606C 34.891304347826086 24.281282316442606 36.84782608695652 18.90382626680455 39.130434782608695 18.90382626680455C 41.413043478260875 18.90382626680455 43.36956521739131 24.69493278179938 45.652173913043484 24.69493278179938C 47.934782608695656 24.69493278179938 49.89130434782609 1.5305067218200605 52.173913043478265 1.5305067218200605C 54.45652173913044 1.5305067218200605 56.413043478260875 20.558428128231643 58.69565217391305 20.558428128231643C 60.97826086956522 20.558428128231643 62.934782608695656 13.11271975180972 65.21739130434783 13.11271975180972C 67.5 13.11271975180972 69.45652173913044 23.040330920372284 71.73913043478261 23.040330920372284C 74.02173913043478 23.040330920372284 75.97826086956522 20.972078593588417 78.26086956521739 20.972078593588417C 80.54347826086956 20.972078593588417 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 28.831437435367114 91.30434782608697 28.831437435367114C 93.58695652173914 28.831437435367114 95.54347826086958 30.072388831437436 97.82608695652175 30.072388831437436C 100.10869565217392 30.072388831437436 102.06521739130436 18.076525336091002 104.34782608695653 18.076525336091002C 106.6304347826087 18.076525336091002 108.58695652173914 21.38572905894519 110.86956521739131 21.38572905894519C 113.15217391304348 21.38572905894519 115.10869565217392 25.52223371251293 117.3913043478261 25.52223371251293C 119.67391304347827 25.52223371251293 121.6304347826087 23.867631851085832 123.91304347826087 23.867631851085832C 126.19565217391305 23.867631851085832 128.15217391304347 14.767321613236813 130.43478260869566 14.767321613236813C 132.71739130434784 14.767321613236813 134.67391304347825 32.1406411582213 136.95652173913044 32.1406411582213C 139.23913043478262 32.1406411582213 141.19565217391303 17.66287487073423 143.47826086956522 17.66287487073423C 145.7608695652174 17.66287487073423 147.7173913043478 22.21302998965874 150 22.21302998965874C 150 22.21302998965874 150 22.21302998965874 150 40M 150 22.21302998965874z"
                                                            pathFrom="M -1 40L -1 40L 6.521739130434783 40L 13.043478260869566 40L 19.565217391304348 40L 26.086956521739133 40L 32.608695652173914 40L 39.130434782608695 40L 45.652173913043484 40L 52.173913043478265 40L 58.69565217391305 40L 65.21739130434783 40L 71.73913043478261 40L 78.26086956521739 40L 84.78260869565219 40L 91.30434782608697 40L 97.82608695652175 40L 104.34782608695653 40L 110.86956521739131 40L 117.3913043478261 40L 123.91304347826087 40L 130.43478260869566 40L 136.95652173913044 40L 143.47826086956522 40L 150 40">
                                                        </path>
                                                        <path id="SvgjsPath3751"
                                                            d="M 0 14.353671147880043C 2.282608695652174 14.353671147880043 4.239130434782609 16.835573940020684 6.521739130434783 16.835573940020684C 8.804347826086957 16.835573940020684 10.760869565217392 28.831437435367114 13.043478260869566 28.831437435367114C 15.32608695652174 28.831437435367114 17.282608695652176 27.17683557394002 19.565217391304348 27.17683557394002C 21.847826086956523 27.17683557394002 23.804347826086957 17.66287487073423 26.086956521739133 17.66287487073423C 28.369565217391305 17.66287487073423 30.326086956521742 24.281282316442606 32.608695652173914 24.281282316442606C 34.891304347826086 24.281282316442606 36.84782608695652 18.90382626680455 39.130434782608695 18.90382626680455C 41.413043478260875 18.90382626680455 43.36956521739131 24.69493278179938 45.652173913043484 24.69493278179938C 47.934782608695656 24.69493278179938 49.89130434782609 1.5305067218200605 52.173913043478265 1.5305067218200605C 54.45652173913044 1.5305067218200605 56.413043478260875 20.558428128231643 58.69565217391305 20.558428128231643C 60.97826086956522 20.558428128231643 62.934782608695656 13.11271975180972 65.21739130434783 13.11271975180972C 67.5 13.11271975180972 69.45652173913044 23.040330920372284 71.73913043478261 23.040330920372284C 74.02173913043478 23.040330920372284 75.97826086956522 20.972078593588417 78.26086956521739 20.972078593588417C 80.54347826086956 20.972078593588417 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 28.831437435367114 91.30434782608697 28.831437435367114C 93.58695652173914 28.831437435367114 95.54347826086958 30.072388831437436 97.82608695652175 30.072388831437436C 100.10869565217392 30.072388831437436 102.06521739130436 18.076525336091002 104.34782608695653 18.076525336091002C 106.6304347826087 18.076525336091002 108.58695652173914 21.38572905894519 110.86956521739131 21.38572905894519C 113.15217391304348 21.38572905894519 115.10869565217392 25.52223371251293 117.3913043478261 25.52223371251293C 119.67391304347827 25.52223371251293 121.6304347826087 23.867631851085832 123.91304347826087 23.867631851085832C 126.19565217391305 23.867631851085832 128.15217391304347 14.767321613236813 130.43478260869566 14.767321613236813C 132.71739130434784 14.767321613236813 134.67391304347825 32.1406411582213 136.95652173913044 32.1406411582213C 139.23913043478262 32.1406411582213 141.19565217391303 17.66287487073423 143.47826086956522 17.66287487073423C 145.7608695652174 17.66287487073423 147.7173913043478 22.21302998965874 150 22.21302998965874"
                                                            fill="none" fill-opacity="1" stroke="#5949d6"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskl2frktfhh)"
                                                            pathTo="M 0 14.353671147880043C 2.282608695652174 14.353671147880043 4.239130434782609 16.835573940020684 6.521739130434783 16.835573940020684C 8.804347826086957 16.835573940020684 10.760869565217392 28.831437435367114 13.043478260869566 28.831437435367114C 15.32608695652174 28.831437435367114 17.282608695652176 27.17683557394002 19.565217391304348 27.17683557394002C 21.847826086956523 27.17683557394002 23.804347826086957 17.66287487073423 26.086956521739133 17.66287487073423C 28.369565217391305 17.66287487073423 30.326086956521742 24.281282316442606 32.608695652173914 24.281282316442606C 34.891304347826086 24.281282316442606 36.84782608695652 18.90382626680455 39.130434782608695 18.90382626680455C 41.413043478260875 18.90382626680455 43.36956521739131 24.69493278179938 45.652173913043484 24.69493278179938C 47.934782608695656 24.69493278179938 49.89130434782609 1.5305067218200605 52.173913043478265 1.5305067218200605C 54.45652173913044 1.5305067218200605 56.413043478260875 20.558428128231643 58.69565217391305 20.558428128231643C 60.97826086956522 20.558428128231643 62.934782608695656 13.11271975180972 65.21739130434783 13.11271975180972C 67.5 13.11271975180972 69.45652173913044 23.040330920372284 71.73913043478261 23.040330920372284C 74.02173913043478 23.040330920372284 75.97826086956522 20.972078593588417 78.26086956521739 20.972078593588417C 80.54347826086956 20.972078593588417 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 28.831437435367114 91.30434782608697 28.831437435367114C 93.58695652173914 28.831437435367114 95.54347826086958 30.072388831437436 97.82608695652175 30.072388831437436C 100.10869565217392 30.072388831437436 102.06521739130436 18.076525336091002 104.34782608695653 18.076525336091002C 106.6304347826087 18.076525336091002 108.58695652173914 21.38572905894519 110.86956521739131 21.38572905894519C 113.15217391304348 21.38572905894519 115.10869565217392 25.52223371251293 117.3913043478261 25.52223371251293C 119.67391304347827 25.52223371251293 121.6304347826087 23.867631851085832 123.91304347826087 23.867631851085832C 126.19565217391305 23.867631851085832 128.15217391304347 14.767321613236813 130.43478260869566 14.767321613236813C 132.71739130434784 14.767321613236813 134.67391304347825 32.1406411582213 136.95652173913044 32.1406411582213C 139.23913043478262 32.1406411582213 141.19565217391303 17.66287487073423 143.47826086956522 17.66287487073423C 145.7608695652174 17.66287487073423 147.7173913043478 22.21302998965874 150 22.21302998965874"
                                                            pathFrom="M -1 40L -1 40L 6.521739130434783 40L 13.043478260869566 40L 19.565217391304348 40L 26.086956521739133 40L 32.608695652173914 40L 39.130434782608695 40L 45.652173913043484 40L 52.173913043478265 40L 58.69565217391305 40L 65.21739130434783 40L 71.73913043478261 40L 78.26086956521739 40L 84.78260869565219 40L 91.30434782608697 40L 97.82608695652175 40L 104.34782608695653 40L 110.86956521739131 40L 117.3913043478261 40L 123.91304347826087 40L 130.43478260869566 40L 136.95652173913044 40L 143.47826086956522 40L 150 40">
                                                        </path>
                                                        <g id="SvgjsG3744" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3776" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker ww1v862i9 no-pointer-events"
                                                                    stroke="#ffffff" fill="#5949d6" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3745" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3771" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3772" x1="0" y1="0" x2="150" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3773" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3774" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3775" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3737" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG3754" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3734" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(89, 73, 214);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 d-flex justify-content-between w-100p font-size-16 font-weight-600">
                                    142.415 <span class="text-danger">-19%</span></p>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 151px; height: 65px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-15">
                            <div>
                                <h3 class="mb-0 text-primary">Globel IPC</h3>
                                <p class="mb-0">08 November 2020</p>
                            </div>
                            <div class="max-w-150" style="position: relative;">
                                <div id="chart-spark3" style="min-height: 40px;">
                                    <div id="apexcharts0eek74t4f"
                                        class="apexcharts-canvas apexcharts0eek74t4f apexcharts-theme-light"
                                        style="width: 150px; height: 40px;"><svg id="SvgjsSvg3778" width="150"
                                            height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG3780" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs3779">
                                                    <clipPath id="gridRectMask0eek74t4f">
                                                        <rect id="SvgjsRect3786" width="156" height="42" x="-3" y="-1"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMask0eek74t4f">
                                                        <rect id="SvgjsRect3787" width="154" height="44" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient3793" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop3794" stop-opacity="0.65"
                                                            stop-color="rgba(89,73,214,0.65)" offset="0"></stop>
                                                        <stop id="SvgjsStop3795" stop-opacity="0.5"
                                                            stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                                        <stop id="SvgjsStop3796" stop-opacity="0.5"
                                                            stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine3785" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6"
                                                    stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="40" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG3799" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3800" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, 2.75)"></g>
                                                </g>
                                                <g id="SvgjsG3802" class="apexcharts-grid">
                                                    <g id="SvgjsG3803" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine3805" x1="0" y1="0" x2="150" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3806" x1="0" y1="4" x2="150" y2="4"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3807" x1="0" y1="8" x2="150" y2="8"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3808" x1="0" y1="12" x2="150" y2="12"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3809" x1="0" y1="16" x2="150" y2="16"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3810" x1="0" y1="20" x2="150" y2="20"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3811" x1="0" y1="24" x2="150" y2="24"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3812" x1="0" y1="28" x2="150" y2="28"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3813" x1="0" y1="32" x2="150" y2="32"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3814" x1="0" y1="36" x2="150" y2="36"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine3815" x1="0" y1="40" x2="150" y2="40"
                                                            stroke="#e0e0e0" stroke-dasharray="0"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG3804" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine3817" x1="0" y1="40" x2="150" y2="40"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine3816" x1="0" y1="1" x2="0" y2="40"
                                                        stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3789"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG3790" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath3797"
                                                            d="M 0 40L 0 13.11271975180972C 2.282608695652174 13.11271975180972 4.239130434782609 14.767321613236813 6.521739130434783 14.767321613236813C 8.804347826086957 14.767321613236813 10.760869565217392 24.281282316442606 13.043478260869566 24.281282316442606C 15.32608695652174 24.281282316442606 17.282608695652176 16.835573940020684 19.565217391304348 16.835573940020684C 21.847826086956523 16.835573940020684 23.804347826086957 24.69493278179938 26.086956521739133 24.69493278179938C 28.369565217391305 24.69493278179938 30.326086956521742 30.072388831437436 32.608695652173914 30.072388831437436C 34.891304347826086 30.072388831437436 36.84782608695652 17.66287487073423 39.130434782608695 17.66287487073423C 41.413043478260875 17.66287487073423 43.36956521739131 20.558428128231643 45.652173913043484 20.558428128231643C 47.934782608695656 20.558428128231643 49.89130434782609 20.972078593588417 52.173913043478265 20.972078593588417C 54.45652173913044 20.972078593588417 56.413043478260875 23.867631851085832 58.69565217391305 23.867631851085832C 60.97826086956522 23.867631851085832 62.934782608695656 22.21302998965874 65.21739130434783 22.21302998965874C 67.5 22.21302998965874 69.45652173913044 17.66287487073423 71.73913043478261 17.66287487073423C 74.02173913043478 17.66287487073423 75.97826086956522 23.040330920372284 78.26086956521739 23.040330920372284C 80.54347826086956 23.040330920372284 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 32.1406411582213 91.30434782608697 32.1406411582213C 93.58695652173914 32.1406411582213 95.54347826086958 18.076525336091002 97.82608695652175 18.076525336091002C 100.10869565217392 18.076525336091002 102.06521739130436 25.52223371251293 104.34782608695653 25.52223371251293C 106.6304347826087 25.52223371251293 108.58695652173914 27.17683557394002 110.86956521739131 27.17683557394002C 113.15217391304348 27.17683557394002 115.10869565217392 1.5305067218200605 117.3913043478261 1.5305067218200605C 119.67391304347827 1.5305067218200605 121.6304347826087 28.831437435367114 123.91304347826087 28.831437435367114C 126.19565217391305 28.831437435367114 128.15217391304347 28.831437435367114 130.43478260869566 28.831437435367114C 132.71739130434784 28.831437435367114 134.67391304347825 14.353671147880043 136.95652173913044 14.353671147880043C 139.23913043478262 14.353671147880043 141.19565217391303 18.90382626680455 143.47826086956522 18.90382626680455C 145.7608695652174 18.90382626680455 147.7173913043478 21.38572905894519 150 21.38572905894519C 150 21.38572905894519 150 21.38572905894519 150 40M 150 21.38572905894519z"
                                                            fill="url(#SvgjsLinearGradient3793)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask0eek74t4f)"
                                                            pathTo="M 0 40L 0 13.11271975180972C 2.282608695652174 13.11271975180972 4.239130434782609 14.767321613236813 6.521739130434783 14.767321613236813C 8.804347826086957 14.767321613236813 10.760869565217392 24.281282316442606 13.043478260869566 24.281282316442606C 15.32608695652174 24.281282316442606 17.282608695652176 16.835573940020684 19.565217391304348 16.835573940020684C 21.847826086956523 16.835573940020684 23.804347826086957 24.69493278179938 26.086956521739133 24.69493278179938C 28.369565217391305 24.69493278179938 30.326086956521742 30.072388831437436 32.608695652173914 30.072388831437436C 34.891304347826086 30.072388831437436 36.84782608695652 17.66287487073423 39.130434782608695 17.66287487073423C 41.413043478260875 17.66287487073423 43.36956521739131 20.558428128231643 45.652173913043484 20.558428128231643C 47.934782608695656 20.558428128231643 49.89130434782609 20.972078593588417 52.173913043478265 20.972078593588417C 54.45652173913044 20.972078593588417 56.413043478260875 23.867631851085832 58.69565217391305 23.867631851085832C 60.97826086956522 23.867631851085832 62.934782608695656 22.21302998965874 65.21739130434783 22.21302998965874C 67.5 22.21302998965874 69.45652173913044 17.66287487073423 71.73913043478261 17.66287487073423C 74.02173913043478 17.66287487073423 75.97826086956522 23.040330920372284 78.26086956521739 23.040330920372284C 80.54347826086956 23.040330920372284 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 32.1406411582213 91.30434782608697 32.1406411582213C 93.58695652173914 32.1406411582213 95.54347826086958 18.076525336091002 97.82608695652175 18.076525336091002C 100.10869565217392 18.076525336091002 102.06521739130436 25.52223371251293 104.34782608695653 25.52223371251293C 106.6304347826087 25.52223371251293 108.58695652173914 27.17683557394002 110.86956521739131 27.17683557394002C 113.15217391304348 27.17683557394002 115.10869565217392 1.5305067218200605 117.3913043478261 1.5305067218200605C 119.67391304347827 1.5305067218200605 121.6304347826087 28.831437435367114 123.91304347826087 28.831437435367114C 126.19565217391305 28.831437435367114 128.15217391304347 28.831437435367114 130.43478260869566 28.831437435367114C 132.71739130434784 28.831437435367114 134.67391304347825 14.353671147880043 136.95652173913044 14.353671147880043C 139.23913043478262 14.353671147880043 141.19565217391303 18.90382626680455 143.47826086956522 18.90382626680455C 145.7608695652174 18.90382626680455 147.7173913043478 21.38572905894519 150 21.38572905894519C 150 21.38572905894519 150 21.38572905894519 150 40M 150 21.38572905894519z"
                                                            pathFrom="M -1 40L -1 40L 6.521739130434783 40L 13.043478260869566 40L 19.565217391304348 40L 26.086956521739133 40L 32.608695652173914 40L 39.130434782608695 40L 45.652173913043484 40L 52.173913043478265 40L 58.69565217391305 40L 65.21739130434783 40L 71.73913043478261 40L 78.26086956521739 40L 84.78260869565219 40L 91.30434782608697 40L 97.82608695652175 40L 104.34782608695653 40L 110.86956521739131 40L 117.3913043478261 40L 123.91304347826087 40L 130.43478260869566 40L 136.95652173913044 40L 143.47826086956522 40L 150 40">
                                                        </path>
                                                        <path id="SvgjsPath3798"
                                                            d="M 0 13.11271975180972C 2.282608695652174 13.11271975180972 4.239130434782609 14.767321613236813 6.521739130434783 14.767321613236813C 8.804347826086957 14.767321613236813 10.760869565217392 24.281282316442606 13.043478260869566 24.281282316442606C 15.32608695652174 24.281282316442606 17.282608695652176 16.835573940020684 19.565217391304348 16.835573940020684C 21.847826086956523 16.835573940020684 23.804347826086957 24.69493278179938 26.086956521739133 24.69493278179938C 28.369565217391305 24.69493278179938 30.326086956521742 30.072388831437436 32.608695652173914 30.072388831437436C 34.891304347826086 30.072388831437436 36.84782608695652 17.66287487073423 39.130434782608695 17.66287487073423C 41.413043478260875 17.66287487073423 43.36956521739131 20.558428128231643 45.652173913043484 20.558428128231643C 47.934782608695656 20.558428128231643 49.89130434782609 20.972078593588417 52.173913043478265 20.972078593588417C 54.45652173913044 20.972078593588417 56.413043478260875 23.867631851085832 58.69565217391305 23.867631851085832C 60.97826086956522 23.867631851085832 62.934782608695656 22.21302998965874 65.21739130434783 22.21302998965874C 67.5 22.21302998965874 69.45652173913044 17.66287487073423 71.73913043478261 17.66287487073423C 74.02173913043478 17.66287487073423 75.97826086956522 23.040330920372284 78.26086956521739 23.040330920372284C 80.54347826086956 23.040330920372284 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 32.1406411582213 91.30434782608697 32.1406411582213C 93.58695652173914 32.1406411582213 95.54347826086958 18.076525336091002 97.82608695652175 18.076525336091002C 100.10869565217392 18.076525336091002 102.06521739130436 25.52223371251293 104.34782608695653 25.52223371251293C 106.6304347826087 25.52223371251293 108.58695652173914 27.17683557394002 110.86956521739131 27.17683557394002C 113.15217391304348 27.17683557394002 115.10869565217392 1.5305067218200605 117.3913043478261 1.5305067218200605C 119.67391304347827 1.5305067218200605 121.6304347826087 28.831437435367114 123.91304347826087 28.831437435367114C 126.19565217391305 28.831437435367114 128.15217391304347 28.831437435367114 130.43478260869566 28.831437435367114C 132.71739130434784 28.831437435367114 134.67391304347825 14.353671147880043 136.95652173913044 14.353671147880043C 139.23913043478262 14.353671147880043 141.19565217391303 18.90382626680455 143.47826086956522 18.90382626680455C 145.7608695652174 18.90382626680455 147.7173913043478 21.38572905894519 150 21.38572905894519"
                                                            fill="none" fill-opacity="1" stroke="#5949d6"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMask0eek74t4f)"
                                                            pathTo="M 0 13.11271975180972C 2.282608695652174 13.11271975180972 4.239130434782609 14.767321613236813 6.521739130434783 14.767321613236813C 8.804347826086957 14.767321613236813 10.760869565217392 24.281282316442606 13.043478260869566 24.281282316442606C 15.32608695652174 24.281282316442606 17.282608695652176 16.835573940020684 19.565217391304348 16.835573940020684C 21.847826086956523 16.835573940020684 23.804347826086957 24.69493278179938 26.086956521739133 24.69493278179938C 28.369565217391305 24.69493278179938 30.326086956521742 30.072388831437436 32.608695652173914 30.072388831437436C 34.891304347826086 30.072388831437436 36.84782608695652 17.66287487073423 39.130434782608695 17.66287487073423C 41.413043478260875 17.66287487073423 43.36956521739131 20.558428128231643 45.652173913043484 20.558428128231643C 47.934782608695656 20.558428128231643 49.89130434782609 20.972078593588417 52.173913043478265 20.972078593588417C 54.45652173913044 20.972078593588417 56.413043478260875 23.867631851085832 58.69565217391305 23.867631851085832C 60.97826086956522 23.867631851085832 62.934782608695656 22.21302998965874 65.21739130434783 22.21302998965874C 67.5 22.21302998965874 69.45652173913044 17.66287487073423 71.73913043478261 17.66287487073423C 74.02173913043478 17.66287487073423 75.97826086956522 23.040330920372284 78.26086956521739 23.040330920372284C 80.54347826086956 23.040330920372284 82.50000000000001 25.52223371251293 84.78260869565219 25.52223371251293C 87.06521739130436 25.52223371251293 89.0217391304348 32.1406411582213 91.30434782608697 32.1406411582213C 93.58695652173914 32.1406411582213 95.54347826086958 18.076525336091002 97.82608695652175 18.076525336091002C 100.10869565217392 18.076525336091002 102.06521739130436 25.52223371251293 104.34782608695653 25.52223371251293C 106.6304347826087 25.52223371251293 108.58695652173914 27.17683557394002 110.86956521739131 27.17683557394002C 113.15217391304348 27.17683557394002 115.10869565217392 1.5305067218200605 117.3913043478261 1.5305067218200605C 119.67391304347827 1.5305067218200605 121.6304347826087 28.831437435367114 123.91304347826087 28.831437435367114C 126.19565217391305 28.831437435367114 128.15217391304347 28.831437435367114 130.43478260869566 28.831437435367114C 132.71739130434784 28.831437435367114 134.67391304347825 14.353671147880043 136.95652173913044 14.353671147880043C 139.23913043478262 14.353671147880043 141.19565217391303 18.90382626680455 143.47826086956522 18.90382626680455C 145.7608695652174 18.90382626680455 147.7173913043478 21.38572905894519 150 21.38572905894519"
                                                            pathFrom="M -1 40L -1 40L 6.521739130434783 40L 13.043478260869566 40L 19.565217391304348 40L 26.086956521739133 40L 32.608695652173914 40L 39.130434782608695 40L 45.652173913043484 40L 52.173913043478265 40L 58.69565217391305 40L 65.21739130434783 40L 71.73913043478261 40L 78.26086956521739 40L 84.78260869565219 40L 91.30434782608697 40L 97.82608695652175 40L 104.34782608695653 40L 110.86956521739131 40L 117.3913043478261 40L 123.91304347826087 40L 130.43478260869566 40L 136.95652173913044 40L 143.47826086956522 40L 150 40">
                                                        </path>
                                                        <g id="SvgjsG3791" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle3823" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker wlg436sil no-pointer-events"
                                                                    stroke="#ffffff" fill="#5949d6" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3792" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine3818" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine3819" x1="0" y1="0" x2="150" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG3820" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG3821" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG3822" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect3784" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG3801" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG3781" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(89, 73, 214);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-label"></span><span
                                                            class="apexcharts-tooltip-text-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-0 d-flex justify-content-between w-100p font-size-16 font-weight-600">
                                    215.450 <span class="text-success">+11%</span></p>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 151px; height: 65px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="box overflow-hidden">
                    <div class="box-body p-0" style="position: relative;">
                        <div class="p-15">
                            <h3 class="font-weight-500 text-primary mb-0">$1560.75</h3>
                            <h6 class="mb-0">Saving Progress</h6>
                        </div>
                        <div id="statisticschart4" style="min-height: 275px;">
                            <div id="apexchartsv7nogqea"
                                class="apexcharts-canvas apexchartsv7nogqea apexcharts-theme-light"
                                style="width: 600px; height: 275px;"><svg id="SvgjsSvg3648" width="600" height="275"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(-50, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG3650" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(22, 30)">
                                        <defs id="SvgjsDefs3649">
                                            <clipPath id="gridRectMaskv7nogqea">
                                                <rect id="SvgjsRect3655" width="576" height="234" x="-4" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskv7nogqea">
                                                <rect id="SvgjsRect3656" width="572" height="234" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient3662" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop3663" stop-opacity="0.65"
                                                    stop-color="rgba(89,73,214,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop3664" stop-opacity="0.5"
                                                    stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop3665" stop-opacity="0.5"
                                                    stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine3654" x1="0" y1="0" x2="0" y2="230" stroke="#b6b6b6"
                                            stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                            height="230" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1"></line>
                                        <g id="SvgjsG3668" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG3669" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG3672" class="apexcharts-grid">
                                            <g id="SvgjsG3673" class="apexcharts-gridlines-horizontal"
                                                style="display: none;"></g>
                                            <g id="SvgjsG3674" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine3676" x1="0" y1="230" x2="568" y2="230"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine3675" x1="0" y1="1" x2="0" y2="230" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG3658" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG3659" class="apexcharts-series" seriesName="series1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath3666"
                                                    d="M 0 230L 0 187.06666666666666C 19.88 187.06666666666666 36.92 26.066666666666663 56.8 26.066666666666663C 76.67999999999999 26.066666666666663 93.72 69 113.6 69C 133.48 69 150.52 59.80000000000001 170.4 59.80000000000001C 190.28 59.80000000000001 207.32 133.4 227.2 133.4C 247.07999999999998 133.4 264.12 78.19999999999999 284 78.19999999999999C 303.88 78.19999999999999 320.92 98.13333333333333 340.8 98.13333333333333C 360.68 98.13333333333333 377.71999999999997 115 397.59999999999997 115C 417.47999999999996 115 434.52 138 454.4 138C 474.28 138 491.32 65.93333333333334 511.2 65.93333333333334C 531.08 65.93333333333334 548.12 124.20000000000002 568 124.20000000000002C 568 124.20000000000002 568 124.20000000000002 568 230M 568 124.20000000000002z"
                                                    fill="url(#SvgjsLinearGradient3662)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskv7nogqea)"
                                                    pathTo="M 0 230L 0 187.06666666666666C 19.88 187.06666666666666 36.92 26.066666666666663 56.8 26.066666666666663C 76.67999999999999 26.066666666666663 93.72 69 113.6 69C 133.48 69 150.52 59.80000000000001 170.4 59.80000000000001C 190.28 59.80000000000001 207.32 133.4 227.2 133.4C 247.07999999999998 133.4 264.12 78.19999999999999 284 78.19999999999999C 303.88 78.19999999999999 320.92 98.13333333333333 340.8 98.13333333333333C 360.68 98.13333333333333 377.71999999999997 115 397.59999999999997 115C 417.47999999999996 115 434.52 138 454.4 138C 474.28 138 491.32 65.93333333333334 511.2 65.93333333333334C 531.08 65.93333333333334 548.12 124.20000000000002 568 124.20000000000002C 568 124.20000000000002 568 124.20000000000002 568 230M 568 124.20000000000002z"
                                                    pathFrom="M -1 368L -1 368L 56.8 368L 113.6 368L 170.4 368L 227.2 368L 284 368L 340.8 368L 397.59999999999997 368L 454.4 368L 511.2 368L 568 368">
                                                </path>
                                                <path id="SvgjsPath3667"
                                                    d="M 0 187.06666666666666C 19.88 187.06666666666666 36.92 26.066666666666663 56.8 26.066666666666663C 76.67999999999999 26.066666666666663 93.72 69 113.6 69C 133.48 69 150.52 59.80000000000001 170.4 59.80000000000001C 190.28 59.80000000000001 207.32 133.4 227.2 133.4C 247.07999999999998 133.4 264.12 78.19999999999999 284 78.19999999999999C 303.88 78.19999999999999 320.92 98.13333333333333 340.8 98.13333333333333C 360.68 98.13333333333333 377.71999999999997 115 397.59999999999997 115C 417.47999999999996 115 434.52 138 454.4 138C 474.28 138 491.32 65.93333333333334 511.2 65.93333333333334C 531.08 65.93333333333334 548.12 124.20000000000002 568 124.20000000000002"
                                                    fill="none" fill-opacity="1" stroke="#5949d6" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskv7nogqea)"
                                                    pathTo="M 0 187.06666666666666C 19.88 187.06666666666666 36.92 26.066666666666663 56.8 26.066666666666663C 76.67999999999999 26.066666666666663 93.72 69 113.6 69C 133.48 69 150.52 59.80000000000001 170.4 59.80000000000001C 190.28 59.80000000000001 207.32 133.4 227.2 133.4C 247.07999999999998 133.4 264.12 78.19999999999999 284 78.19999999999999C 303.88 78.19999999999999 320.92 98.13333333333333 340.8 98.13333333333333C 360.68 98.13333333333333 377.71999999999997 115 397.59999999999997 115C 417.47999999999996 115 434.52 138 454.4 138C 474.28 138 491.32 65.93333333333334 511.2 65.93333333333334C 531.08 65.93333333333334 548.12 124.20000000000002 568 124.20000000000002"
                                                    pathFrom="M -1 368L -1 368L 56.8 368L 113.6 368L 170.4 368L 227.2 368L 284 368L 340.8 368L 397.59999999999997 368L 454.4 368L 511.2 368L 568 368">
                                                </path>
                                                <g id="SvgjsG3660" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle3682" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker whmm2jsb1i no-pointer-events"
                                                            stroke="#ffffff" fill="#5949d6" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG3661" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine3677" x1="0" y1="0" x2="568" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine3678" x1="0" y1="0" x2="568" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG3679" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG3680" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG3681" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect3653" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG3670" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                        <g id="SvgjsG3671" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG3651" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(89, 73, 214);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                    <div class="apexcharts-menu-icon" title="Menu"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                        </svg></div>
                                    <div class="apexcharts-menu">
                                        <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG
                                        </div>
                                        <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG
                                        </div>
                                        <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wed-up">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-arrow-up text-primary font-size-30 mr-10"></i>
                                    <div>
                                        <h3 class="font-weight-500 text-primary mb-0">$146.45</h3>
                                        <h6 class="mb-0">Income</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-arrow-down text-danger font-size-30 mr-10"></i>
                                    <div>
                                        <h3 class="font-weight-500 text-primary mb-0">$153.24</h3>
                                        <h6 class="mb-0">Expenses</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 351px; height: 344px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Server Status</h4>
                    </div>
                    <div class="box-body">
                        <div style="min-height: 235px; position: relative;">
                            <div id="shops-trend" style="min-height: 232.7px;">
                                <div id="apexchartsp00mh3we"
                                    class="apexcharts-canvas apexchartsp00mh3we apexcharts-theme-light"
                                    style="width: 308px; height: 232.7px;"><svg id="SvgjsSvg3824" width="308"
                                        height="232.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <foreignObject x="0" y="0" width="308" height="232.7">
                                            <div class="apexcharts-legend apexcharts-align-center position-right"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="position: absolute; left: auto; top: 20px; right: 5px;">
                                                <div class="apexcharts-legend-series" rel="1" data:collapsed="false"
                                                    style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                        rel="1" data:collapsed="false"
                                                        style="background: rgb(89, 73, 214); color: rgb(89, 73, 214); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="Databases" data:collapsed="false"
                                                        style="color: rgb(138, 153, 181); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Databases</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" data:collapsed="false"
                                                    style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                        rel="2" data:collapsed="false"
                                                        style="background: rgb(0, 126, 255); color: rgb(0, 126, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="Email%20Account" data:collapsed="false"
                                                        style="color: rgb(138, 153, 181); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Email
                                                        Account</span></div>
                                                <div class="apexcharts-legend-series" rel="3" data:collapsed="false"
                                                    style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                        rel="3" data:collapsed="false"
                                                        style="background: rgb(42, 136, 83); color: rgb(42, 136, 83); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="3" i="2"
                                                        data:default-text="Domains" data:collapsed="false"
                                                        style="color: rgb(138, 153, 181); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Domains</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="4" data:collapsed="false"
                                                    style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                        rel="4" data:collapsed="false"
                                                        style="background: rgb(251, 61, 78); color: rgb(251, 61, 78); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="4" i="3"
                                                        data:default-text="Data" data:collapsed="false"
                                                        style="color: rgb(138, 153, 181); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Data</span>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.position-bottom,
                                                .apexcharts-legend.position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.position-right,
                                                .apexcharts-legend.position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.position-top.apexcharts-align-left,
                                                .apexcharts-legend.position-right,
                                                .apexcharts-legend.position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g id="SvgjsG3826" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(22, 0)">
                                            <defs id="SvgjsDefs3825">
                                                <clipPath id="gridRectMaskp00mh3we">
                                                    <rect id="SvgjsRect3828" width="145" height="232" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskp00mh3we">
                                                    <rect id="SvgjsRect3829" width="143" height="234" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter3838" filterUnits="userSpaceOnUse" width="200%"
                                                    height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood3839" flood-color="#000000"
                                                        flood-opacity="0.45" result="SvgjsFeFlood3839Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite3840" in="SvgjsFeFlood3839Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite3840Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset3841" dx="1" dy="1"
                                                        result="SvgjsFeOffset3841Out" in="SvgjsFeComposite3840Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur3842" stdDeviation="1 "
                                                        result="SvgjsFeGaussianBlur3842Out" in="SvgjsFeOffset3841Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge3843" result="SvgjsFeMerge3843Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode3844"
                                                            in="SvgjsFeGaussianBlur3842Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode3845" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend3846" in="SourceGraphic"
                                                        in2="SvgjsFeMerge3843Out" mode="normal"
                                                        result="SvgjsFeBlend3846Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter3850" filterUnits="userSpaceOnUse" width="200%"
                                                    height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood3851" flood-color="#000000"
                                                        flood-opacity="0.45" result="SvgjsFeFlood3851Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite3852" in="SvgjsFeFlood3851Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite3852Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset3853" dx="1" dy="1"
                                                        result="SvgjsFeOffset3853Out" in="SvgjsFeComposite3852Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur3854" stdDeviation="1 "
                                                        result="SvgjsFeGaussianBlur3854Out" in="SvgjsFeOffset3853Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge3855" result="SvgjsFeMerge3855Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode3856"
                                                            in="SvgjsFeGaussianBlur3854Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode3857" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend3858" in="SourceGraphic"
                                                        in2="SvgjsFeMerge3855Out" mode="normal"
                                                        result="SvgjsFeBlend3858Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter3862" filterUnits="userSpaceOnUse" width="200%"
                                                    height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood3863" flood-color="#000000"
                                                        flood-opacity="0.45" result="SvgjsFeFlood3863Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite3864" in="SvgjsFeFlood3863Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite3864Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset3865" dx="1" dy="1"
                                                        result="SvgjsFeOffset3865Out" in="SvgjsFeComposite3864Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur3866" stdDeviation="1 "
                                                        result="SvgjsFeGaussianBlur3866Out" in="SvgjsFeOffset3865Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge3867" result="SvgjsFeMerge3867Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode3868"
                                                            in="SvgjsFeGaussianBlur3866Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode3869" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend3870" in="SourceGraphic"
                                                        in2="SvgjsFeMerge3867Out" mode="normal"
                                                        result="SvgjsFeBlend3870Out"></feBlend>
                                                </filter>
                                                <filter id="SvgjsFilter3874" filterUnits="userSpaceOnUse" width="200%"
                                                    height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood3875" flood-color="#000000"
                                                        flood-opacity="0.45" result="SvgjsFeFlood3875Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite3876" in="SvgjsFeFlood3875Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite3876Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset3877" dx="1" dy="1"
                                                        result="SvgjsFeOffset3877Out" in="SvgjsFeComposite3876Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur3878" stdDeviation="1 "
                                                        result="SvgjsFeGaussianBlur3878Out" in="SvgjsFeOffset3877Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge3879" result="SvgjsFeMerge3879Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode3880"
                                                            in="SvgjsFeGaussianBlur3878Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode3881" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend3882" in="SourceGraphic"
                                                        in2="SvgjsFeMerge3879Out" mode="normal"
                                                        result="SvgjsFeBlend3882Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <g id="SvgjsG3831" class="apexcharts-pie">
                                                <g id="SvgjsG3832"
                                                    transform="translate(6.949999999999996, 11.5) scale(0.9)">
                                                    <circle id="SvgjsCircle3833" r="53.09756097560976" cx="69.5"
                                                        cy="115" fill="transparent"></circle>
                                                    <g id="SvgjsG3834" class="apexcharts-slices">
                                                        <g id="SvgjsG3835"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Databases" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath3836"
                                                                d="M 69.5 8.80487804878048 A 106.19512195121952 106.19512195121952 0 1 1 7.080073451672497 200.91365837825663 L 38.290036725836245 157.9568291891283 A 53.09756097560976 53.09756097560976 0 1 0 69.5 61.90243902439024 L 69.5 8.80487804878048 z"
                                                                fill="rgba(89,73,214,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                index="0" j="0" data:angle="216" data:startAngle="0"
                                                                data:strokeWidth="2" data:value="60"
                                                                data:pathOrig="M 69.5 8.80487804878048 A 106.19512195121952 106.19512195121952 0 1 1 7.080073451672497 200.91365837825663 L 38.290036725836245 157.9568291891283 A 53.09756097560976 53.09756097560976 0 1 0 69.5 61.90243902439024 L 69.5 8.80487804878048 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG3847"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="EmailxAccount" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath3848"
                                                                d="M 7.080073451672497 200.91365837825663 A 106.19512195121952 106.19512195121952 0 0 1 -26.58821918139145 160.21568379205672 L 21.455890409304274 137.60784189602836 A 53.09756097560976 53.09756097560976 0 0 0 38.290036725836245 157.9568291891283 L 7.080073451672497 200.91365837825663 z"
                                                                fill="rgba(0,126,255,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                index="0" j="1" data:angle="28.80000000000001"
                                                                data:startAngle="216" data:strokeWidth="2"
                                                                data:value="8"
                                                                data:pathOrig="M 7.080073451672497 200.91365837825663 A 106.19512195121952 106.19512195121952 0 0 1 -26.58821918139145 160.21568379205672 L 21.455890409304274 137.60784189602836 A 53.09756097560976 53.09756097560976 0 0 0 38.290036725836245 157.9568291891283 L 7.080073451672497 200.91365837825663 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG3859"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Domains" rel="3" data:realIndex="2">
                                                            <path id="SvgjsPath3860"
                                                                d="M -26.58821918139145 160.21568379205672 A 106.19512195121952 106.19512195121952 0 0 1 -31.49756273046583 82.18390259735311 L 19.001218634767085 98.59195129867655 A 53.09756097560976 53.09756097560976 0 0 0 21.455890409304274 137.60784189602836 L -26.58821918139145 160.21568379205672 z"
                                                                fill="rgba(42,136,83,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                index="0" j="2" data:angle="43.19999999999999"
                                                                data:startAngle="244.8" data:strokeWidth="2"
                                                                data:value="12"
                                                                data:pathOrig="M -26.58821918139145 160.21568379205672 A 106.19512195121952 106.19512195121952 0 0 1 -31.49756273046583 82.18390259735311 L 19.001218634767085 98.59195129867655 A 53.09756097560976 53.09756097560976 0 0 0 21.455890409304274 137.60784189602836 L -26.58821918139145 160.21568379205672 z"
                                                                stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG3871"
                                                            class="apexcharts-series apexcharts-pie-series"
                                                            seriesName="Data" rel="4" data:realIndex="3">
                                                            <path id="SvgjsPath3872"
                                                                d="M -31.49756273046583 82.18390259735311 A 106.19512195121952 106.19512195121952 0 0 1 69.48146545481802 8.804879666224679 L 69.49073272740901 61.90243983311234 A 53.09756097560976 53.09756097560976 0 0 0 19.001218634767085 98.59195129867655 L -31.49756273046583 82.18390259735311 z"
                                                                fill="rgba(251,61,78,1)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                index="0" j="3" data:angle="72" data:startAngle="288"
                                                                data:strokeWidth="2" data:value="20"
                                                                data:pathOrig="M -31.49756273046583 82.18390259735311 A 106.19512195121952 106.19512195121952 0 0 1 69.48146545481802 8.804879666224679 L 69.49073272740901 61.90243983311234 A 53.09756097560976 53.09756097560976 0 0 0 19.001218634767085 98.59195129867655 L -31.49756273046583 82.18390259735311 z"
                                                                stroke="#ffffff"></path>
                                                        </g><text id="SvgjsText3837"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="145.24817204784938" y="139.61207305198513"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="16px" font-weight="normal" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter3838)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">60%</text><text
                                                            id="SvgjsText3849"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="8.131439163796593" y="165.76848874449627"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="16px" font-weight="normal" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter3850)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">8%</text><text
                                                            id="SvgjsText3861"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-9.989177602012717" y="120.00103515909694"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="16px" font-weight="normal" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter3862)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">12%</text><text
                                                            id="SvgjsText3873"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="22.685055088754353" y="50.56475621630754"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="16px" font-weight="normal" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter3874)"
                                                            style="font-family: Helvetica, Arial, sans-serif;">20%</text>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine3883" x1="0" y1="0" x2="139" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine3884" x1="0" y1="0" x2="139" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG3827" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(89, 73, 214);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(0, 126, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(42, 136, 83);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(251, 61, 78);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 309px; height: 236px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-xl-6 col-12">
                <div class="box bg-transparent no-shadow mb-10">
                    <div class="box-header no-border pb-0 pt-10">
                        <h4 class="box-title">Top Selling Products</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-border mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">01</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">Pocket Drone 2.5G
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">20 Nov 2019 at 06:00
                                                PM</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$150.00</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">16 Qty</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$2800.00</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">02</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">DJI Phantom Pro</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">29 Nov 2019 at 09:00
                                                PM</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$175.00</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">20 Qty</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$3250.00</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">03</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">Allen Rozario</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">06 Dec 2019 at 04:00
                                                AM</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$210.00</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">22 Qty</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$1860.00</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">04</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">Pocket Drone 2.5G
                                            </h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">18 Dec 2019 at 06:20
                                                PM</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$220.00</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">24 Qty</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$3100.00</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">05</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">Melisa Rozario</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">28 Dec 2019 at 07:45
                                                PM</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$210.00</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">23 Qty</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 font-weight-500 text-mute text-nowrap">$2460.00</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box overflow-hidden">
                    <div class="box-body pb-0">
                        <div class="icon bg-primary-light rounded-circle w-60 h-60">
                            <i class="text-primary mr-0 font-size-20 fa fa-users"></i>
                        </div>
                        <div>
                            <h2 class="text-dark mb-0 font-weight-500">18.8k</h2>
                            <p class="text-mute mb-0 font-size-20">Total users</p>
                        </div>
                    </div>
                    <div class="box-body p-0" style="position: relative;">
                        <div id="revenue1" style="min-height: 150px;">
                            <div id="apexchartsj1hgsfmv"
                                class="apexcharts-canvas apexchartsj1hgsfmv apexcharts-theme-light"
                                style="width: 260px; height: 150px;"><svg id="SvgjsSvg3886" width="260" height="150"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG3888" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 30)">
                                        <defs id="SvgjsDefs3887">
                                            <clipPath id="gridRectMaskj1hgsfmv">
                                                <rect id="SvgjsRect3893" width="266" height="127" x="-3" y="-1" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskj1hgsfmv">
                                                <rect id="SvgjsRect3894" width="264" height="129" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient3900" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop3901" stop-opacity="0.65"
                                                    stop-color="rgba(89,73,214,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop3902" stop-opacity="0.5"
                                                    stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop3903" stop-opacity="0.5"
                                                    stop-color="rgba(172,164,235,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine3892" x1="0" y1="0" x2="0" y2="125" stroke="#b6b6b6"
                                            stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                            height="125" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1"></line>
                                        <g id="SvgjsG3906" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG3907" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG3910" class="apexcharts-grid">
                                            <g id="SvgjsG3911" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine3913" x1="0" y1="0" x2="260" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3914" x1="0" y1="25" x2="260" y2="25"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3915" x1="0" y1="50" x2="260" y2="50"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3916" x1="0" y1="75" x2="260" y2="75"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3917" x1="0" y1="100" x2="260" y2="100"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3918" x1="0" y1="125" x2="260" y2="125"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                            </g>
                                            <g id="SvgjsG3912" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine3920" x1="0" y1="125" x2="260" y2="125"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine3919" x1="0" y1="1" x2="0" y2="125" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG3896" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG3897" class="apexcharts-series" seriesName="Revenue"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath3904"
                                                    d="M 0 125L 0 108.33333333333331H 52V 77.77777777777777H 104V 66.66666666666666H 156V 22.2222222222222H 208V 52.77777777777777H 260V 80.55555555555554L 260 125M 260 80.55555555555554z"
                                                    fill="url(#SvgjsLinearGradient3900)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskj1hgsfmv)"
                                                    pathTo="M 0 125L 0 108.33333333333331H 52V 77.77777777777777H 104V 66.66666666666666H 156V 22.2222222222222H 208V 52.77777777777777H 260V 80.55555555555554L 260 125M 260 80.55555555555554z"
                                                    pathFrom="M -1 275L -1 275L 52 275L 104 275L 156 275L 208 275L 260 275">
                                                </path>
                                                <path id="SvgjsPath3905"
                                                    d="M 0 108.33333333333331H 52V 77.77777777777777H 104V 66.66666666666666H 156V 22.2222222222222H 208V 52.77777777777777H 260V 80.55555555555554"
                                                    fill="none" fill-opacity="1" stroke="#5949d6" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskj1hgsfmv)"
                                                    pathTo="M 0 108.33333333333331H 52V 77.77777777777777H 104V 66.66666666666666H 156V 22.2222222222222H 208V 52.77777777777777H 260V 80.55555555555554"
                                                    pathFrom="M -1 275L -1 275L 52 275L 104 275L 156 275L 208 275L 260 275">
                                                </path>
                                                <g id="SvgjsG3898" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle3926" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker ws8lqc83o no-pointer-events"
                                                            stroke="#ffffff" fill="#5949d6" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG3899" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine3921" x1="0" y1="0" x2="260" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine3922" x1="0" y1="0" x2="260" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG3923" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG3924" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG3925" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect3891" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG3908" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                        <g id="SvgjsG3909" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG3889" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(89, 73, 214);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 261px; height: 151px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box overflow-hidden">
                    <div class="box-body pb-0">
                        <div class="icon bg-warning-light rounded-circle w-60 h-60">
                            <i class="text-warning mr-0 font-size-20 fa fa-bullseye"></i>
                        </div>
                        <div>
                            <h2 class="text-dark mb-0 font-weight-500">35.8k</h2>
                            <p class="text-mute mb-0 font-size-20">Average reach per post</p>
                        </div>
                    </div>
                    <div class="box-body p-0" style="position: relative;">
                        <div id="revenue2" style="min-height: 150px;">
                            <div id="apexcharts2wljhuja"
                                class="apexcharts-canvas apexcharts2wljhuja apexcharts-theme-light"
                                style="width: 260px; height: 150px;"><svg id="SvgjsSvg3928" width="260" height="150"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG3930" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 30)">
                                        <defs id="SvgjsDefs3929">
                                            <clipPath id="gridRectMask2wljhuja">
                                                <rect id="SvgjsRect3935" width="266" height="127" x="-3" y="-1" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask2wljhuja">
                                                <rect id="SvgjsRect3936" width="264" height="129" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient3942" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop3943" stop-opacity="0.65"
                                                    stop-color="rgba(234,151,21,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop3944" stop-opacity="0.5"
                                                    stop-color="rgba(245,203,138,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop3945" stop-opacity="0.5"
                                                    stop-color="rgba(245,203,138,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine3934" x1="0" y1="0" x2="0" y2="125" stroke="#b6b6b6"
                                            stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                            height="125" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1"></line>
                                        <g id="SvgjsG3948" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG3949" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG3952" class="apexcharts-grid">
                                            <g id="SvgjsG3953" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine3955" x1="0" y1="0" x2="260" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3956" x1="0" y1="25" x2="260" y2="25"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3957" x1="0" y1="50" x2="260" y2="50"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3958" x1="0" y1="75" x2="260" y2="75"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3959" x1="0" y1="100" x2="260" y2="100"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3960" x1="0" y1="125" x2="260" y2="125"
                                                    stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                            </g>
                                            <g id="SvgjsG3954" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine3962" x1="0" y1="125" x2="260" y2="125"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine3961" x1="0" y1="1" x2="0" y2="125" stroke="transparent"
                                                stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG3938" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG3939" class="apexcharts-series" seriesName="Revenue"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath3946"
                                                    d="M 0 125L 0 22.2222222222222H 52V 52.77777777777777H 104V 80.55555555555554H 156V 108.33333333333331H 208V 77.77777777777777H 260V 66.66666666666666L 260 125M 260 66.66666666666666z"
                                                    fill="url(#SvgjsLinearGradient3942)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask2wljhuja)"
                                                    pathTo="M 0 125L 0 22.2222222222222H 52V 52.77777777777777H 104V 80.55555555555554H 156V 108.33333333333331H 208V 77.77777777777777H 260V 66.66666666666666L 260 125M 260 66.66666666666666z"
                                                    pathFrom="M -1 275L -1 275L 52 275L 104 275L 156 275L 208 275L 260 275">
                                                </path>
                                                <path id="SvgjsPath3947"
                                                    d="M 0 22.2222222222222H 52V 52.77777777777777H 104V 80.55555555555554H 156V 108.33333333333331H 208V 77.77777777777777H 260V 66.66666666666666"
                                                    fill="none" fill-opacity="1" stroke="#ea9715" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask2wljhuja)"
                                                    pathTo="M 0 22.2222222222222H 52V 52.77777777777777H 104V 80.55555555555554H 156V 108.33333333333331H 208V 77.77777777777777H 260V 66.66666666666666"
                                                    pathFrom="M -1 275L -1 275L 52 275L 104 275L 156 275L 208 275L 260 275">
                                                </path>
                                                <g id="SvgjsG3940" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle3968" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker wgak0ofkpg no-pointer-events"
                                                            stroke="#ffffff" fill="#ea9715" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG3941" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine3963" x1="0" y1="0" x2="260" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine3964" x1="0" y1="0" x2="260" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG3965" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG3966" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG3967" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect3933" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG3950" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                                        <g id="SvgjsG3951" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG3931" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(234, 151, 21);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 261px; height: 151px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@section('scripts')
<script src="{{ asset('admin/js/pages/dashboard3.js') }}"></script>
@endsection