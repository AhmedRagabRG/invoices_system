@extends('layouts.master')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">{{__('academic.Academics')}}</h1>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW OPEN -->
                <div class="row row-cards">
                    <div class="col-lg-12 col-xl-12">
                        <div class="input-group mb-5">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-text btn btn-primary">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border-bottom-0">
                                <h2 class="card-title">1 - 30 of 546 users</h2>

                            </div>
                            <div class="e-table px-5 pb-5">
                                <div class="table-responsive table-lg">
                                    <table class="table border-top table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th class="text-center">

                                            </th>
                                            <th class="text-center">Photo</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="align-middle text-center">
                                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                    <input class="custom-control-input" id="item-12" type="checkbox"> <label class="custom-control-label" for="item-12"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="../assets/images/users/4.jpg"></td>
                                            <td class="text-nowrap align-middle">Letizia Puncher</td>
                                            <td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>

                                            <td class="text-center align-middle">
                                                <div class="btn-group align-top">
                                                    <button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <ul class="pagination float-end">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- COL-END -->
                </div>
                <!-- ROW CLOSED -->
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
@endsection
