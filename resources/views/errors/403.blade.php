@extends('adminlte::page')

@section('content_header')

@section('css')
    <link rel="stylesheet" href="{{asset('css/error.css')}}">
@endsection

@stop

@section('title', __('403'))
@section('code', '403')
@section('message', __('Unauthorized'))

@section('content')
<section class="page_404">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="col-sm-10 col-sm-offset-1  text-center">
                    <div class="four_zero_four_bg">
                        <h1 class="text-center ">403</h1>


                    </div>

                    <div class="contant_box_404">
                        <h3 class="h2">
                            Parece que estás perdido.
                        </h3>

                        <p>La página que está buscando no está disponible!</p>

                        <!--a href="" class="link_404">Go to Home</a-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('js')

@stop
