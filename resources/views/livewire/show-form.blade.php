@extends('layouts.master')

@section('content')

<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!--Row open-->
            <div class="col-lg-12 col-md-12">
                <div class="card">

                    <div class="card-body">
                        @livewire('add-academic')
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    @livewireScripts
@endsection
