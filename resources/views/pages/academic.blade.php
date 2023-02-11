@extends('layouts.master')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
{{--                <div class="page-header">--}}
{{--                    <h1 class="page-title">{{__('academic.Academics')}}</h1>--}}
{{--                </div>--}}
                <!-- PAGE-HEADER END -->
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{__('academic.Academics_list')}}</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom"
                                           id="responsive-datatable">
                                        <thead>
                                        <tr>

                                            <th class="align-middle text-center">
{{--                                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">--}}
{{--                                                    <input name="f[]"  class="custom-control-input" id="s" type="checkbox">--}}
{{--                                                    <label class="custom-control-label" for="s"></label>--}}
{{--                                                </div>--}}
                                            </th>
                                            <th class="wd-10p border-bottom-0">{{ __('academic.Academic_name') }}</th>
                                            <th class="wd-5p border-bottom-0">{{ __('academic.Academic_years') }}</th>
                                            <th class="wd-20p border-bottom-0">{{ __('academic.Academic_requirements') }}</th>
                                            <th class="wd-25p border-bottom-0">{{ __('academic.Academic_notes') }}</th>
                                            <th class="wd-10p border-bottom-0">{{ __('academic.Academic_created_at') }}</th>
                                            <th class="wd-10p border-bottom-0">{{ __('main.actions') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($academics as $academic)
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                        <input name="f[]" value="{{ $academic->id }}" class="custom-control-input" id="{{ $academic->id }}" type="checkbox">
                                                        <label class="custom-control-label" for="{{ $academic->id }}"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $academic->name }}</td>
                                                <td>{{ $academic->academic_years }}</td>
                                                <td>{{ $academic->requirements }}</td>
                                                <td>{{ $academic->notes }}</td>
                                                <td>{{ $academic->created_at }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <form method="post" action="{{url("academic/edit/$academic->id")}}">
                                                            @csrf
                                                            <button id="bEdit" type="submit" data-toggle="modal" name="submit"  class="btn btn-sm btn-primary">
                                                                <span class="fe fe-edit"> </span>
                                                            </button>
                                                        </form>
                                                        <form method="post" action="{{url("academic/delete")}}">
                                                            @csrf
                                                            <button id="deleteBt" type="submit" data-toggle="modal" name="submit" class="btn  btn-sm btn-danger">
                                                                <span class="fe fe-trash-2"> </span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
@endsection

@section('js')
    <script>
        var checkedValue = document.querySelector('.custom-control-input:checked').value;

        console.log(checkedValue)
    </script>
@endsection
