@extends('layouts.app')
@section('title', 'Display social posts stream')

@section('content')

    @foreach ($socialposts as $socialpost)
        <div class="media">

            <div class="media-left media-middle">
                <a href="{{ url($socialpost->link) }}">
                    @if ( $socialpost->source == "facebook" )
                        <i class="fa fa-facebook-square fa-5x"></i>
                    @elseif ( $socialpost->source == "twitter" )
                        <i class="fa fa-twitter fa-5x"></i>
                    @endif
                </a>
            </div>

            <div class="media-body">
                <h4 class="media-heading">
                    {{ $socialpost->federalLegislator->first_name }}, {{ $socialpost->federalLegislator->last_name }}
                </h4>
                {{ $socialpost->caption }}
            </div>

            <div class="media-bottom">
                Posted: {{ $socialpost->created_time }} - <a href="{{ url($socialpost->link) }}">Original Link</a>
            </div>

        </div>

        <hr>

    @endforeach

@endsection