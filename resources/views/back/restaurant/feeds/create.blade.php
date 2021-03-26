@extends('back.restaurant.index')

@section('content')

<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">FeedsBack</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Ajouter Feed</a>
                                    </li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ajouter Feed</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form form-horizontal" method="POST" action="{{ route('feedback.store') }}"  enctype="multipart/form-data">
                                    @csrf

                                        <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Nom</label>
                                                <input class="form-control col-xl-8 col-md-7" id="nom" name="nom" type="text" required="">
                                            </div>  
                                            </div>
                                            <div class="col-12">

                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Feed</label>
                                                <input class="form-control col-xl-8 col-md-7" id="feed" name="feed" type="text" required="">
                                            </div>  
                                            <div class="col-12">

                                            </div>  <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4">Date</label>
                                                <input class="form-control col-xl-8 col-md-7" id="date" name="date" type="date" required="">
                                            </div>  
                                            </div>
                                     
                     
                                            <div class="col-sm-9 offset-sm-3">
                                            <button id="submit" name="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </section>
                <!-- Basic Horizontal form layout section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
