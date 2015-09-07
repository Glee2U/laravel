@extends('layouts.layout')

@section('title')
个人资料
@endsection


@section('content')  


@if (Auth::guest())
              Please log in first
            @else



            <section class="scrollable wrapper">
              <section class="hbox stretch">
                <aside class="aside-lg bg-light lter b-r">
                  <section class="vbox">
                    <section class="scrollable">
                      <div class="wrapper">
                        <div class="text-center m-b m-t">
                          <a href="/fileentry" class="thumb-lg" style="width:100px; height:100px; border-radius:50%; overflow:hidden;">

                            @if (Auth::user()->avatar=='')
                            <img src="{{asset('images/layout/default_avatar.jpg')}}" />
                              @else
                              <img src="{{route('getentry', Auth::user()->email.'.'.'jpg')}}"  />
                              @endif

                          </a>
                          <div>
                            <div class="h3 m-t-xs m-b-xs">{{ Auth::user()->name }} </div>

                            <small class="text-muted"><i class="fa fa-map-marker"></i>{{ Auth::user()->position }} </small>
                            <br>
                            <br>
                            <a class=" icon-wrench" href="/editprofile"><small>修改</small></a>
                          </div>                
                        </div>
                        <div class="panel wrapper">
                          <div class="row text-center">
                            <div class="col-xs-6">
                              <a href="#">
                                <span class="m-b-xs h4 block">{{ Auth::user()->followers }} </span>
                                <small class="text-muted">Followers</small>
                              </a>
                            </div>
                            <div class="col-xs-6">
                              <a href="#">
                                <span class="m-b-xs h4 block">{{ Auth::user()->followings }}</span>
                                <small class="text-muted">Following</small>
                              </a>
                            </div>
                          </div>
                        </div>
 

                        
                        <div>
                          <small class="text-uc text-xs text-muted">about me</small>
                          <p>Artist</p>
                          <small class="text-uc text-xs text-muted">info</small>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                          <div class="line"></div>
                          <small class="text-uc text-xs text-muted">connection</small>
                          <p class="m-t-sm">
                            <a href="#" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a>
                          </p>
                        </div>
                      </div>
                    </section>
                  </section>
                </aside>
                <aside class="bg-white">
                  <section class="vbox">
                    <header class="header bg-light lt">
                      <ul class="nav nav-tabs nav-white">
                        <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                        <li class=""><a href="#events" data-toggle="tab">Events</a></li>
                        <li class=""><a href="#interaction" data-toggle="tab">Interaction</a></li>
                      </ul>
                    </header>
                    <section class="scrollable">
                      <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a0.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">3 minuts ago</small>
                                <strong class="block">Drew Wllon</strong>
                                <small>Wellcome and play this web application template ... </small>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a1.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">1 hour ago</small>
                                <strong class="block">Jonathan George</strong>
                                <small>Morbi nec nunc condimentum...</small>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a2.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">2 hours ago</small>
                                <strong class="block">Josh Long</strong>
                                <small>Vestibulum ullamcorper sodales nisi nec...</small>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a3.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">1 day ago</small>
                                <strong class="block">Jack Dorsty</strong>
                                <small>Morbi nec nunc condimentum...</small>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a4.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">3 days ago</small>
                                <strong class="block">Morgen Kntooh</strong>
                                <small>Mobile first web app for startup...</small>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a5.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">Jun 21</small>
                                <strong class="block">Yoha Omish</strong>
                                <small>Morbi nec nunc condimentum...</small>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a6.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">May 10</small>
                                <strong class="block">Gole Lido</strong>
                                <small>Vestibulum ullamcorper sodales nisi nec...</small>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a7.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">Jan 2</small>
                                <strong class="block">Jonthan Snow</strong>
                                <small>Morbi nec nunc condimentum...</small>
                              </a>
                            </li>
                            <li class="list-group-item" href="#email-content" data-toggle="class:show">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a8.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">3 minuts ago</small>
                                <strong class="block">Drew Wllon</strong>
                                <small>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</small>
                              </a>
                            </li>
                            <li class="list-group-item">
                              <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="{{asset('images/layout/a9.png')}}" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <small class="pull-right">1 hour ago</small>
                                <strong class="block">Jonathan George</strong>
                                <small>Morbi nec nunc condimentum...</small>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="events">
                          <div class="text-center wrapper">
                            <i class="fa fa-spinner fa fa-spin fa fa-large"></i>
                          </div>
                        </div>
                        <div class="tab-pane" id="interaction">
                          <div class="text-center wrapper">
                            <i class="fa fa-spinner fa fa-spin fa fa-large"></i>
                          </div>
                        </div>
                      </div>
                    </section>
                  </section>
                </aside>
                <aside class="col-lg-3 b-l">
                  <section class="vbox">
                    <section class="scrollable padder-v">
                      <div class="panel">
                        <h4 class="font-thin padder">Latest Tweets</h4>
                        <ul class="list-group">
                          <li class="list-group-item">
                              <p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </p>
                              <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                          </li>
                          <li class="list-group-item">
                              <p>Morbi nec <a href="#" class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                              <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                          </li>
                          <li class="list-group-item">                     
                              <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis</p>
                              <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                          </li>
                        </ul>
                      </div>
                      <div class="panel clearfix">
                        <div class="panel-body">
                          <a href="#" class="thumb pull-left m-r">
                            <img src="{{asset('images/layout/a0.png')}}" class="img-circle">
                          </a>
                          <div class="clear">
                            <a href="#" class="text-info">@Mike Mcalidek <i class="fa fa-twitter"></i></a>
                            <small class="block text-muted">2,415 followers / 225 tweets</small>
                            <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>
                          </div>
                        </div>
                      </div>
                    </section>
                  </section>              
                </aside>
              </section>
         </section>

@endif


            @endsection