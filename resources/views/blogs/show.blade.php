@extends('layouts.main_layout')

@section('content')
<section class="blog">
    <div class="project__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="project__header">
            <a href="{{route('blogs.index')}}"><span class="material-icons back-button">keyboard_backspace</span></a>
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">Back</span>
                <h4 class="section__heading">{{$blog->title}}</h4>
            </div>
        </div>
        <div class="project">
            <div class="project__container">

                    <div class="card-flat__content">
                        <span>
                            {{$blog->body}}
                        </span>

                    </div>


            </div>
        </div>



    </div>
</section>
@endsection
