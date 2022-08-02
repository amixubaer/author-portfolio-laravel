@extends('layouts.main_layout')

@section('content')
<section class="project">
    <div class="project__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="project__header">
            <a href="{{route('books.index')}}"><span class="material-icons back-button">keyboard_backspace</span></a>
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <span class="heading__subtext subtext">Back</span>
                <h4 class="section__heading">{{$project->title}}</h4>
            </div>
        </div>
        <div class="project">
            <div class="project__container">
                    <img src="{{$project->image_url}}" class="cool-box-shadow" />

                    <div class="card-flat__content">
                        <h3>{{$project->publish}}</h3>
                        <span>
                            {{$project->body}}
                        </span>
                    </div>


            </div>
        </div>



    </div>
</section>
@endsection
