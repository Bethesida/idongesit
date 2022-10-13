@extends('layouts.app')


@section('content')

<div class="container-fluid card card-default ">
    <div class="row">
        <div class="col-3">
        </div>

        <div class="col-6 card-body">
            <a href="{{ $post->url }}">
            <img src="/storage/{{ $post->image }}" class=" img-fluid " style="box-shadow:0 0 4px 9px rgb(177, 172, 172);  ">
        </a>

        
            <div style="padding-top:25px" class="text-center">
               <b> {{ $post->title }} </b>
               
            </div>

            <div class="text-center" style="padding:25px max-width:150px"> <b>{{ $post->caption }} </b></div> 
         
            <div class="text-center"><a href="{{ $post->url }}" style="text-decoration:none" >Click me to view the above website</a></div>
         
            </div>
        
    
            <div class="col-3">
    
            

             
         </div>

         
    </div>

@stop