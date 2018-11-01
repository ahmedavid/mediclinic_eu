@extends('layouts.master')

@section('content')
    <div class="body-content">
        <div class="container-fluid header home">
            @include('layouts.navbar')
            <div class="container vcenter">
                <div class="row vcenter">
                    <div class="col-12 text-center vcenter-inline-content">
                        <h4 style="margin-bottom:4px;font-weight:normal;">{{$hero['desc1']}}</h4>
                        <h2 style="margin-bottom:8px;">{{$hero['desc2']}}</h2>
                        <h4 style="margin-bottom:36px;font-weight:normal;">{{$hero['desc3']}}</h4>
                        <h6 style="font-weight:normal;">{{$hero['desc4']}}</h6>
                        <h6 style="margin-bottom:36px;margin-top:-10px;font-weight:normal;">{!! $hero['desc5'] !!}</h6>

                        <div class="text-uppercase" style="margin-bottom:12px;">
                            <a class="btn btn-lg btn-info" style="margin-bottom:4px;" href="https://portal.mediclinic.com.au/CreateNewCustomerSiteV2.aspx">{{$hero['desc6']}}</a><br />
                            <i class="small">{{$hero['desc7']}}</i>
                        </div>
                    </div>
                </div>
                <div class="col-mouse">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="col-12 text-center">
                <h3 class="text-primary-dark">{{$description['title']}}</h3>
                <p>
                    {!! $description['text'] !!}
                </p>
            </div>
            <div class="col-12" style="height:26px;"></div>

        </div>

        <div class="v-offset-4"></div>

        <div class="container">
            <div class="row">
                @foreach($main_features as $feature)
                    <div class="col-lg-4 col-md-12 text-center circle-icon circle-icon-lg">
                        <a href="#" class="text-white">
                            <div class="icon text-center">
                                <i class="{{$feature['icon']}}"></i>
                            </div>
                        </a>
                        <div class="title"><a href="#" class="text-info-dark">{{$feature['title']}}</a></div>
                        <p>{!! $feature['text'] !!}</p>
                    </div>
                @endforeach
            </div>

            <div class="v-offset-4"></div>

            <div class="row">
                @foreach($common_features as $feature)
                    <div class="col-lg-3 col-md-6 circle-icon circle-icon-sm text-primary">
                        <div class="icon text-center"><i class="{{$feature['icon']}}"></i></div>
                        <div class="title">{{$feature['title']}}</div>
                        <p>{!! $feature['text'] !!}</p>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="container-fluid bottom-form">
            <div class="row">
                <h5 class="text-uppercase text-white">{{$form['title']}}</h5>
            </div>
            <form name="sendemail" action="" class="form-group">
                <input type="text" class="form-control" name="name" placeholder="{{$form['name']}} *">
                <textarea class="form-control" name="msg" placeholder="{{$form['message']}} *"></textarea>
                <input type="email" class="form-control" name="email" placeholder="{{$form['email']}} *">
                <input type="text" class="form-control" name="phone" placeholder="{{$form['phone']}}">
                <input class="btn btn-md btn-success text-uppercase" type="submit" name="submit" value="{{$form['send']}}">
            </form>
        </div>
    </div>
@endsection