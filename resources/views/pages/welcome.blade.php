@extends('layouts.home')

@section('styles')
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
  <!-- Themefisher Font -->
  <link href="{{asset('plugins/themefisher-font/style.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{asset('plugins/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet" media="screen">
  <!-- Owl Carousel Theme -->
  <link href="{{asset('plugins/owl-carousel/assets/owl.theme.green.min.css')}}" rel="stylesheet" media="screen">
  <!-- Fancy Box -->
  <link href="{{asset('plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">

  <!-- CUSTOM CSS -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{asset('images/favicon.png')}}" rel="shortcut icon">
@endsection

@section('content')



@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $(".toggle-slide").toggle(function(){
      $("body").css("position","absolute");
      $("body").animate({left: '350px',opacity: 0.5});
      $("#slide-menu").animate({left: '-350px'});
      $("#slide-menu").css("display","block");
      /*$(".container").click(function(){
        $("body").animate({left: '0px'},function(){
          $("body").css("position","relative");
        });
        return;
      });
      $(".main").click(function(){
        $("body").animate({left: '0px',opacity:1},400,function(){
          $("body").css("position","relative");
        });
        return;
      });*/
    },function(){
      $("body").animate({left: '0px'},function(){
          $("body").css("position","relative");
      });
    });
  });
  </script>
@endsection
