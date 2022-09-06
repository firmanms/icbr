@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h2 class="fs-5 fw-bold mb-1">{{ __('Dashboard') }}</h2>
                            <p>{{ __('You are logged in!') }}</p>
                            @can('menu-panitia')
                                <div class="row">                
                                    <div class="col-12 col-sm-6 col-xl-3 mb-3">
                                        <div class="card border-0 shadow">
                                            <div class="card-body">
                                                <div class="row d-block d-xl-flex align-items-center">
                                                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                        <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                                                        </div>
                                                        <div class="d-sm-none">
                                                        <?php                                                 
                                                        $semua=App\Models\User::all()->count();                                    
                                                        ?>
                                                            <h2 class="h5">Registration</h2>
                                                            <h3 class="fw-extrabold mb-1">{{$semua}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-xl-7 px-xl-0">
                                                        <div class="d-none d-sm-block">
                                                            <h2 class="h6 text-gray-400 mb-0">Registration</h2>
                                                            <h3 class="fw-extrabold mb-2">{{$semua}}</h3>
                                                        </div>                                                         
                                                        <div class="small d-flex mt-1">                               
                                                            {{-- <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">22%</span></div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-3 mb-3">
                                        <div class="card border-0 shadow">
                                            <div class="card-body">
                                                <div class="row d-block d-xl-flex align-items-center">
                                                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                        <div class="icon-shape icon-shape-warning rounded me-4 me-sm-0">
                                                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                                                        </div>
                                                        <?php                                                        
                                                        $pending=App\Models\User::where('statusnya','warning')->count();                                    
                                                        ?>
                                                        <div class="d-sm-none">
                                                            <h2 class="fw-extrabold h5"> Pending</h2>
                                                            <h3 class="mb-1">{{$pending}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-xl-7 px-xl-0">
                                                        <div class="d-none d-sm-block">
                                                            <h2 class="h6 text-gray-400 mb-0"> Pending</h2>
                                                            <h3 class="fw-extrabold mb-2">{{$pending}}</h3>
                                                        </div>
                                                         
                                                        <div class="small d-flex mt-1">                               
                                                            {{-- <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">4%</span></div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-3 mb-3">
                                        <div class="card border-0 shadow">
                                            <div class="card-body">
                                                <div class="row d-block d-xl-flex align-items-center">
                                                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                        <div class="icon-shape icon-shape-success rounded me-4 me-sm-0">
                                                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                                                        </div>
                                                        <?php                                                        
                                                        $approve=App\Models\User::where('statusnya','success')->count();                                    
                                                        ?>
                                                        <div class="d-sm-none">
                                                            <h2 class="fw-extrabold h5">Approve</h2>
                                                            <h3 class="mb-1">{{$approve}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-xl-7 px-xl-0">
                                                        <div class="d-none d-sm-block">
                                                            <h2 class="h6 text-gray-400 mb-0">Approve</h2>
                                                            <h3 class="fw-extrabold mb-2">{{$approve}}</h3>
                                                        </div>
                                                        
                                                        <div class="small d-flex mt-1">                               
                                                            {{-- <div>Since last month <svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg><span class="text-danger fw-bolder">2%</span></div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-3 mb-3">
                                        <div class="card border-0 shadow">
                                            <div class="card-body">
                                                <div class="row d-block d-xl-flex align-items-center">
                                                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                        <div class="icon-shape icon-shape-danger rounded me-4 me-sm-0">
                                                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                                                        </div>
                                                        <?php                                                        
                                                        $reject=App\Models\User::where('statusnya','danger')->count();                                    
                                                        ?>
                                                        <div class="d-sm-none">
                                                            <h2 class="fw-extrabold h5"> Reject</h2>
                                                            <h3 class="mb-1">{{$reject}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-xl-7 px-xl-0">
                                                        <div class="d-none d-sm-block">
                                                            <h2 class="h6 text-gray-400 mb-0"> Reject</h2>
                                                            <h3 class="fw-extrabold mb-2">{{$reject}}</h3>
                                                        </div>
                                                         
                                                        <div class="small d-flex mt-1">                               
                                                            {{-- <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg><span class="text-success fw-bolder">4%</span></div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                @endcan
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-xl-4 mb-4">
                                        <div class="card shadow border-0 text-center p-0">
                                            <div class="profile-cover rounded-top" data-background="../assets/img/profile-cover.jpg"></div>
                                        
                                                <img class="avatar-xl rounded-circle mx-auto mt-n7 mb-4"
                                                    src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}"
                                                    alt="{{ Auth::user()->name }}">
                                                    {{-- <img src="../assets/img/team/profile-picture-1.jpg" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait"> --}}
                                                    <h4 class="h3">{{ Auth::user()->name }}</h4>
                                                    <h5 class="fw-normal">Family Name : {{ Auth::user()->familyname }}</h5>
                                                    <h5 class="fw-normal">Affiliation : {{ Auth::user()->affiliation }}</h5>
                                                    <h5 class="fw-normal">Category : {{ Auth::user()->category }}</h5>
                                                    <?php 
                                                    $ambilid= Auth::user()->country_id;
                                                    $countryss=App\Models\Country::where('id',$ambilid)->first();                                    
                                                    ?>
                                                    <h5 class="fw-normal">Country : {{ $countryss->country_name }}</h5>
                                                    <?php
                                                    $kondisi=Auth::user()->statusnya;
                                                    if($kondisi=='warning'){
                                                        $statusnya='Pending';
                                                    }else if($kondisi=='success'){
                                                        $statusnya='Approve';
                                                    }else if($kondisi=='danger'){
                                                        $statusnya='Pending';
                                                    }
                                                    ?>
                                                    <h5 class="fw-normal">Status : <a class="btn btn-sm btn-{{Auth::user()->statusnya}}" href="#">{{$statusnya}}</a></h5>
                                                    <?php
                                                    $kondisi=Auth::user()->presenter;
                                                    if($kondisi=='true'){
                                                        $presenterya='Yes';
                                                    }else if($kondisi=='false'){
                                                        $presenterya='No';
                                                    }
                                                    ?>
                                                    <h5 class="fw-normal">Presenter :{{ $presenterya }}</h5><br><br><br><br>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-8 mb-8">
                                        <div class="card shadow border-0 text-center p-0">
                                            <img src="https://icbr.bandungkab.go.id/wp-content/uploads/2022/09/slider.jpg" width="100%">
                                        </div>
                                    </div>
                                </div>
                            
                             <br>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
