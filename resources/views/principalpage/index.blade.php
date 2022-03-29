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
              <h1 class="fs-4 fs-md-5 fs-xxl-4" data-zanim-xs='{"delay":0.3}' >Consutle Seu Cep, Rápido e Fácil</h1>
              <p class="fs-1" data-zanim-xs='{"delay":0.5}' >Insira seu cep no campo abaixo :) </p>
            </div>
          </div>
        </div>
          
          <form action="{{ route('cep.index') }}" method="Post">
            @csrf
            <div class="col-lg-4">
              <div class="input-group"> 
              <input class="form-control" type="text" placeholder="Cep" name="cep" onkeypress="mascara(this, '#####-###')" maxlength="9" />
              <button class="btn btn-primary rounded-start-0 px-3" type="submit">Consultar</button></div> 
            </div>
          </div>
          </form>
    </section>
    <script>
         function mascara(t, mask){
        var i = t.value.length;
        var saida = mask.substring(1,0);
        var texto = mask.substring(i)
        if (texto.substring(0,1) != saida){
        t.value += texto.substring(0,1);
        }
    }
    </script>
@endsection