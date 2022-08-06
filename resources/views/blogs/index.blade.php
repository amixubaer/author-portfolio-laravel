@extends('layouts.main_layout')

@section('content')
<section class="projects">
    <div class=" overlay cool-overlay-full-width"></div>
    <div class="projects__container flex flex-column align-items-stretch justify-content-space-around">
        <div class="projects__header">
            <div class="heading__container flex flex-column align-items-flex-start justify-content-flex-start">
                <h1 class="section__heading">All Blogs</h1>
            </div>
        </div>

        <div class="projects__cards-flat">

            @forelse ($blogs as $blog)
                <a href="{{route('blogs.show',['id'=>$blog->id])}}">
                    <div class="card-flat card">

                        <div class="card-flat__content">
                            <h3>{{$blog->title}}</h3>

                        </div>
                    </div>
                </a>

                @empty
                <div>No Blog Found</div>
                @endforelse
        </div>


    </div>
</section>
@endsection
