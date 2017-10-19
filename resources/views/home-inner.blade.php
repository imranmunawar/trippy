@extends('layouts.inner')

@section('content')
    <main class="site-main" role="main">
        <div class="main-wrapper">
            <div class="container">
                <div class="clearfix"></div>
                <section class="product-section">
                    <div class="row">
                        <div class="col-md-3 banner-ads">
                            <div class="row sideBar-body">
                                <div class="col-sm-12 col-xs-12 sideBar-main">
                                    <div class="row">
                                        <div class="col-sm-8 col-xs-8 sideBar-name">
                                            <a class="name-meta"><strong>Places I Follow</strong></a>
                                            <p>Lorem Ipsum dummy...</p>
                                        </div>
                                        <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                                          <span class="time-meta pull-right">4
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row sideBar-body">
                                <div class="col-sm-12 col-xs-12 sideBar-main">
                                    <div class="row">
                                        <div class="col-sm-8 col-xs-8 sideBar-name">
                                            <a class="name-meta"><strong>My Questions</strong></a>
                                            <p>Lorem Ipsum dummy...</p>
                                        </div>
                                        <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
								                  <span class="time-meta pull-right">4
								                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row sideBar-body">
                                <div class="col-sm-12 col-xs-12 sideBar-main">
                                    <div class="row">
                                        <div class="col-sm-8 col-xs-8 sideBar-name">
                                            <a class="name-meta"><strong>My Answers</strong></a>
                                            <p>Lorem Ipsum dummy...</p>
                                        </div>
                                        <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
								                  <span class="time-meta pull-right">4
								                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top: 30px;">

                                <div class="col-md-12 col-sm-12 form-control-container col-xs-12">
                                    <strong>You Follow 2 Places</strong>
                                    <div id="follow_places">
                                        <ul>
                                            @foreach ($locations as $loc)
                                                <li>
                                                    <a>{{ $loc->city }} ({{ $loc->country }})</a>
                                                    <span class="pull-right delete-location" data-content="{{ $loc->id }}">x</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div>Add places you want to follow:</div>
                                </div>
                                <div class="col-md-12 col-sm-12 form-control-container col-xs-12">
                                    <input id="pac-input" class="controls" type="text"
                                           placeholder="Enter a location"/>
                                    <pre id="placeInfo"></pre>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="profile-details">
                                <section class="profile">
                                    <div class="">
                                        <div class="profile-details">
                                            <div class="profile-head">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-2 col-md-2">
                                                        <div class="profile-img">
                                                            <figure>
                                                                <img src="images/profile_user_avatar.png" class="" width="110px;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="profile-info">
                                                                    <div class="descriptions">
                                                                        <h4>Imran and other have (6 Answers)</h4>
                                                                        <h3>What is your best travel hack?</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-md-12">
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="comments-section">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-xs-6">
                                                                            <ul class="comments_buttons">
                                                                                <li>
                                                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                                    <span>64</span>
                                                                                </li>

                                                                                <li>
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                    <span>64</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-6 text-right">
                                                                            <a href="" class="comments_link">See More</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--profile-head close-->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                </section>
                            </div>
                            <div class="profile-details">
                                <section class="profile">
                                    <div class="">
                                        <div class="profile-details">
                                            <div class="profile-head">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-2 col-md-2">
                                                        <div class="profile-img">
                                                            <figure>
                                                                <img src="images/profile_user_avatar.png" class="" width="110px;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="profile-info">
                                                                    <div class="descriptions">
                                                                        <h4>Imran and other have (6 Answers)</h4>
                                                                        <h3>What is your best travel hack?</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-md-12">
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="comments-section">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-xs-6">
                                                                            <ul class="comments_buttons">
                                                                                <li>
                                                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                                    <span>64</span>
                                                                                </li>

                                                                                <li>
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                    <span>64</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-6 text-right">
                                                                            <a href="" class="comments_link">See More</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--profile-head close-->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                </section>
                            </div>
                            <div class="profile-details">
                                <section class="profile">
                                    <div class="">
                                        <div class="profile-details">
                                            <div class="profile-head">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-2 col-md-2">
                                                        <div class="profile-img">
                                                            <figure>
                                                                <img src="images/profile_user_avatar.png" class="" width="110px;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="profile-info">
                                                                    <div class="descriptions">
                                                                        <h4>Imran and other have (6 Answers)</h4>
                                                                        <h3>What is your best travel hack?</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-md-12">
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="comments-section">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-xs-6">
                                                                            <ul class="comments_buttons">
                                                                                <li>
                                                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                                    <span>64</span>
                                                                                </li>

                                                                                <li>
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                    <span>64</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-6 text-right">
                                                                            <a href="" class="comments_link">See More</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--profile-head close-->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                </section>
                            </div>
                            <div class="profile-details">
                                <section class="profile">
                                    <div class="">
                                        <div class="profile-details">
                                            <div class="profile-head">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-2 col-md-2">
                                                        <div class="profile-img">
                                                            <figure>
                                                                <img src="images/profile_user_avatar.png" class="" width="110px;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="profile-info">
                                                                    <div class="descriptions">
                                                                        <h4>Imran and other have (6 Answers)</h4>
                                                                        <h3>What is your best travel hack?</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col-md-12">
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                                Love handbags, shoes and clothes. Have way too much stuff in my wardrobe and need to get my act together and do a spring clean soon.
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="comments-section">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-xs-6">
                                                                            <ul class="comments_buttons">
                                                                                <li>
                                                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                                    <span>64</span>
                                                                                </li>

                                                                                <li>
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                    <span>64</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-6 text-right">
                                                                            <a href="" class="comments_link">See More</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--profile-head close-->
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
