@extends('layouts.master')

@section('content')

    <div class="body-content">

        <div class="container-fluid header pricing">
            @include('layouts.navbar')
            <div class="col-12" style="height:22px;"></div>

            <div class="container">
                <div class="row">
                    <div class="offset-md-3 col-md-6 text-center">
                        {!! $title !!}
                    </div>
                </div>

                <div class="row">
                    @foreach($plans as $plan)

                        <div class="col-md-12 col-lg-4 text-center">
                            <div class="plan">
                                <div class="plan-icon
                                        @php
                                            echo App\Http\Controllers\PricingController::getIconClass($plan['name']);
                                        @endphp"></div>
                                <div class="plan-title text-success">{{$plan['name']}}</div>
                                <ul>
                                    @foreach($plan['lines'] as $line)
                                    <li class="">{{$line}}</li>
                                    @endforeach
                                </ul>
                                <ul>
                                    {{--<li v-if="(getPrice().sms)">{{getPrice().sms}}</li>--}}
                                </ul>
                                <div class='price'>{{$plan['prices'][0]['price']}}{{$plan['prices'][0]['symbol']}}<span class='period'>/month</span></div>
                                <button type="button" class="btn btn-lg text-uppercase btn-price
                                @php
                                    echo App\Http\Controllers\PricingController::getButtonClass($plan['name']);
                                @endphp

                                ">Start Free Trial</button>
                            </div>
                        </div>

                    @endforeach

                </div>


                <div class="row" style="margin-top:82px;">
                    <div class="col-12 text-primary-dark text-center">
                        <h3>All plans include</h3>
                    </div>
                </div>



            </div>

        </div>


@endsection
