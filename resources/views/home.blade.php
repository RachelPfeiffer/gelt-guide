@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row header-row text-white p-4">
        <div class="col-sm-6"></div>
        <div class="col-sm-6 p-5">
            <h2 >GeltGuide helps.</h1>
            <p>Parnassah is challenging and GeltGuide helps by providing accurate and useful financial information geared to frum families. My name is Eli Fried – Financial Advisor, Investment Guru and your Guide for Gelt.</p>
            <a href="blabla" class="btn big yellow">Start Here</a>
        </div>
    </div>
    <div class="row justify-content-center bg-white logos-section">
        <div class="wrap d-flex">
            <p class="logos-section-label">As featured in</p>
            <span class="logos-section-item">
                <img src="{{asset('img/thevoice.png')}}" />
            </span>
        </div>
    </div>
    <div class="row justify-content-center bg-dark recent">
        <p class="text-white wrap mt-5 text-center">We frequently publish new articles about how to master your money — and your life. Here are a few of our most recent pieces.</p>
        <div class="row">
            @foreach($recent_articles as $article)
            <div class="recent-article col-lg-4 col-md-6">
                <a href="{{url('/articles/'.$article->id)}}">
                    <div class="article bg-white m-3">
                        <div class="bg-light">
                            <img src="{{asset('img/logo.png')}}" style="display:block;margin:auto;max-width:90%;" />
                        </div>
                        <div class="p-3">
                            {{$article->title}}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="recent-article col-sm-4">
                <div class="article bg-white m-3">Box ehre.</div>
            </div>
            <div class="recent-article col-sm-4">
                <div class="article bg-white m-3">Box ehre.</div>
            </div>
            <div class="recent-article col-sm-4">
                <div class="article bg-white m-3">Box ehre.</div>
            </div>
            <div class="recent-article col-sm-4">
                <div class="article bg-white m-3">Box ehre.</div>
            </div>
            <div class="recent-article col-sm-4">
                <div class="article bg-white m-3">Box ehre.</div>
            </div>
            <div class="recent-article col-sm-4">
                <div class="article bg-white m-3">Box ehre.</div>
            </div>
            <div class="recent-article col-sm-4">
                <div class="article bg-white m-3">Box ehre.</div>
            </div>
        </div>
    </div>
</div>
@endsection
