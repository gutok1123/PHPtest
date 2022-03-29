@extends('layoutpage.body')
@section('content')
 <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 px-30 " data-navbar-on-scroll="light">
            <div class="container"><img src="{{asset('/img/icons/logoo.png')}}" height="35" alt="logo" /></div>
      </nav>
      <section class="py-7 py-lg-10" id="home">
        <div class="bg-holder bg-size" style="background-image:url(img/illustration/2.png);background-position:left top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder d-none d-xxl-block hero-bg" style="background-image:url(img/illustration/1.png);background-position:right top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row align-items-center h-100 justify-content-center justify-content-lg-start">
            <div class="col-md-9 col-xxl-5 text-md-start text-center py-6 pt-8">
              <h1 class="fs-4 fs-md-5 fs-xxl-4" data-zanim-xs='{"delay":0.3}' >{{ "Erro inesperado Caro usuário" }}</h1>
              <p class="fs-1" data-zanim-xs='{"delay":0.5}' >Ficamos triste com esse bug :( </p>
              <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start mt-5" data-zanim-xs='{"delay":0.5}' ><a class="btn btn-sm btn-primary me-1" href="{{ route("cep.index") }}" role="button">Voltar ao início</a></div>
            </div>
          </div>
        </div>
      </section>
@endsection