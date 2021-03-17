@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-4">
        <div class="card bg-primary img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <p class="text-white mb-0">TOTAL POSITIF</p>
                        {{-- <h2 class="mb-0 number-font">{{ $casespositif }}</h2>  --}}
                        <p class="text-white mb-0">ORANG</p>
                    </div>
                    <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50"
                            height="50" alt="Positif"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card bg-success img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <p class="text-white mb-0">TOTAL SEMBUH</p>
                        {{-- <h2 class="mb-0 number-font">{{ $sembuh }}</h2>  --}}
                        <p class="text-white mb-0">ORANG</p>
                    </div>
                    <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/happy-ipM.png" width="50"
                            height="50" alt="Positif">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card bg-danger img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <p class="text-white mb-0">TOTAL MENINGGAL</p>
                        {{-- <h2 class="mb-0 number-font">{{ $meninggal }}</h2>  --}}
                        <p class="text-white mb-0">ORANG</p>
                    </div>
                    <div class="ml-auto"> <img src="https://kawalcorona.com/uploads/emoji-LWx.png" width="50"
                            height="50" alt="Positif"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <canvas id="myChart"></canvas>
                <br>
                <div class="row mt-6">
                    <div class="col text-center">
                        <h5 class="font-weight-normal mt-2">POSITIF</h5>
                        {{-- <h3 class="text-xxl mb-1 social-content  number-font">{{ $sembuh }}</h3>  --}}
                        <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                    </div>
                    <div class="col text-center">
                        <h5 class="font-weight-normal mt-2">SEMBUH</h5>
                        {{-- <h3 class="text-xxl mb-1 social-content danger number-font">{{ $sembuh }}</h3>  --}}
                        <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                    </div>
                    <div class="col text-center">
                        <h5 class="font-weight-normal mt-2">MENINGGAL</h5>
                        {{-- <h3 class="text-xxl mb-1 social-content  number-font">{{ $meninggal }}</h3>  --}}
                        <p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

                    </div>
                    <div class="chart-wrapper">
                        <canvas id="deals" class="chart-dropshadow-success chartjs-render-monitor" hidden=""
                            height="85" width="0" style="display: block; width: 0px; height: 85px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

