

@extends('layouts.layout')


@section('content')











          
<section >
            <section class="hbox stretch  ">

<section class="col-sm-9 " >
              
     

<style>
.vertical { 
height: 110px;/*元素的高度*/ 
width: 95%;
position: absolute; 
top: 40%;/*元素的顶部边界离父元素的的位置是父元素高度的一半*/ 
margin-top: -50px;/*设置元素顶边负边距，大小为元素高度的一半*/ 

}
</style>


<div class="input-group vertical" align="center">
  <h1><i class="icon-drop"></i>OnePenaut</h1>
  <input type="text" class="form-control" placeholder="输入搜索内容">
  <br/>  <br/>  <br/>
<a href="#" class="btn btn-s-md btn-danger">搜索</a>
</div>



              </section>

<section class="col-sm-3 no-padder lt">
                <section class="vbox">
                  <section class="scrollable ">
                    <div class="m-t-n-xxs">
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs">
                          <span class="block h3 font-bold text-info">Find</span>
                          <span class="text-muted">Search the music you like</span>
                          <span class="bottom wrapper-md block">- <i class="icon-arrow-right i-lg pull-right"></i></span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="{{asset('images/layout/m40.jpg')}}" alt="...">
                        </a>
                      </div>
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs text-right">
                          <span class="block h3 font-bold text-warning text-u-c">Listen</span>
                          <span class="text-muted">Find the peace in your heart</span>
                          <span class="bottom wrapper-md block"><i class="icon-arrow-right i-lg pull-left"></i> -</span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="{{asset('images/layout/m41.jpg')}}" alt="...">
                        </a>
                      </div>
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs">
                          <span class="block h3 font-bold text-success text-u-c">Share</span>
                          <span class="text-muted">Share the good songs with your loves</span>
                          <span class="bottom wrapper-md block">- <i class="icon-arrow-right i-lg pull-right"></i></span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="{{asset('images/layout/m42.jpg')}}" alt="...">
                        </a>
                      </div>
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs text-right">
                          <span class="block h3 font-bold text-white text-u-c">2014</span>
                          <span class="text-muted">Find, Listen & Share</span>
                          <span class="bottom wrapper-md block"><i class="icon-arrow-right i-lg pull-left"></i> -</span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="{{asset('images/layout/m44.jpg')}}" alt="...">
                        </a>
                      </div>
                      <div class="item pos-rlt">
                        <a href="#" class="item-overlay active opacity wrapper-md font-xs">
                          <span class="block h3 font-bold text-danger-lter text-u-c">Top10</span>
                          <span class="text-muted">Selected songs</span>
                          <span class="bottom wrapper-md block">- <i class="icon-arrow-right i-lg pull-right"></i></span>
                        </a>
                        <a href="#">
                          <img class="img-full" src="{{asset('images/layout/m45.jpg')}}" alt="...">
                        </a>
                      </div>
                    </div>
                  </section>
                </section>
              </section>




                          </section>
              </section>
@endsection
