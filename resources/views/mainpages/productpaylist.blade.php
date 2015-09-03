@extends('layouts.layout')

@section('title')
产品列表
@endsection

@section('content')


              <section class="panel panel-default" align="center">              
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light" >


                    <tbody>
                    <tr>                     
                        <td><h1>OnePenaut</h1>
                        	<p>What's included</p> </td>
                        <td>
                          <h1>Free</h1>
                          <p>Edition</p>
                        </td>
                        <td>
                         <h1>Common</h1>
                          <p>Edition</p>
                        </td>
                        <td>
                         <h1>Professional</h1>
                          <p>Edition</p>
                        </td>
                      </tr>



                      <tr>                     
                        <td>草民待遇</td>
                        <td>
                          <i class="fa fa-check text-success "></i>
                        </td>
                        <td>
                          <i class="fa fa-check text-success "></i>
                        </td>
                        <td>
                          <i class="fa fa-check text-success "></i>
                        </td>
                      </tr>

                      <tr>                     
                        <td>贵族待遇</td>
                        <td>
                          <i class="fa fa-times text-danger "></i>
                        </td>
                        <td>
                          <i class="fa fa-check text-success "></i>
                        </td>
                        <td>
                          <i class="fa fa-check text-success "></i>
                        </td>
                      </tr>

                      <tr>                     
                        <td>神仙待遇</td>
                        <td>
                          <i class="fa fa-times text-danger "></i>
                        </td>
                        <td>
                          <i class="fa fa-times text-danger "></i>
                        </td>
                        <td>
                          <i class="fa fa-check text-success "></i>
                        </td>
                      </tr>         

                      <tr>                     
                        <td></td>
                        <td>
                          <a href="#" class="btn btn-s-md btn-primary">Use Now</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-s-md btn-primary">Pay $9/Month</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-s-md btn-primary">Pay $19/Month</a>
                        </td>
                      </tr>                                          
                    </tbody>
                  </table>
                </div>
                

@endsection