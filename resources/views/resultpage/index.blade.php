@extends('layoutpage.body')
@section('content')
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 px-30 " data-navbar-on-scroll="light">
            <div class="container"><img src="{{asset('/img/icons/logoo.png')}}" height="35" alt="logo" /></div>
        </nav>
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="pricing">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-6 text-center text-md-start">
                        <h4 class="fw-normal fs-3" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">Your safety is
                            always <br />a top priority</h4>
                        <p class="fs-0 pe-xl-8" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">We are committed
                            to help drivers and riders get where they want to go with confidence</p>
                        <div class="row">
                            <div class="col">
                                <h4 class="fw-normal fs-1">CEP</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{$data['cep']}}</p>
                            </div >
                            <div class="col">
                                <h4 class="fw-normal fs-1">Logradouro</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{$data['logradouro']}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="fw-normal fs-1">Complemento</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{ $data['complemento'] }}</p>
                            </div>
                            <div class="col">
                                <h4 class="fw-normal fs-1">Bairro</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{$data['bairro']}}</p>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col">
                                <h4 class="fw-normal fs-1">Localidade</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{ $data['localidade'] }}</p>
                            </div>
                            <div class="col">
                                <h4 class="fw-normal fs-1">UF</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{$data['uf']}}</p>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col">
                                <h4 class="fw-normal fs-1">IBGE</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{ $data['ibge'] }}</p>
                            </div>
                            <div class="col">
                                <h4 class="fw-normal fs-1">DDD</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{$data['ddd']}}</p>
                            </div>
                        </div>
                         <div class="row">
                            <div clas="col">
                                <h4 class="fw-normal fs-1">SIAFI</h4>
                                <p class="my-1 fs-0 pe-xl-8">{{ $data['siafi'] }}</p>
                            </div>
                        </div>
                        <a class="btn btn-sm btn-primary my-4 me-1" href="{{route('cep.index')}}" role="button">Voltar Para a tela de
                            Consulta!</a>
                    </div>
                    <div class="col-md-6 mb-4"><img class="w-100" src="{{ asset('img/illustration/4.png') }}"
                            alt="..." /></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->
    @endsection


