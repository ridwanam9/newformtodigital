

@extends('layouts.master')

@section('content')

    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="page-header">

                <div class="row">

                    <div class="col-sm-12">

                    @if (auth()->check())
                        <h3 class="page-title">Selamat Datang {{ auth()->user()->name }}!</h3>
                    @else
                        <h3 class="page-title">Selamat Datang!</h3>
                    @endif

                        <ul class="breadcrumb">

                            <li class="breadcrumb-item active">Dashboard</li>

                        </ul>

                    </div>

                </div>

            </div>



            <div class="row">

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">

                    <div class="card dash-widget">

                        <div class="card-body">

                            <span class="dash-widget-icon"><i class="fa fa-file-text-o"></i></span>

                            <div class="dash-widget-info">

                                <h3>{{ \App\Models\FormInput::count() }}</h3>

                                <span>Transfer Intra Rumah Sakit</span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">

                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fa fa-file-text-o"></i></span>
                            <div class="dash-widget-info">
                            <h3>{{ \App\Models\FormInput2::count() }}</h3>
                                <span>Asesment Pasien Kondisi Terminal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
