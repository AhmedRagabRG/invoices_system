@extends('layouts.master')

@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!--Row open-->
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{__('academic.Academic_ar_name')}}</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{url("academic/update/$academic->id")}}">
                                @csrf
                                @method('patch')
                                <div class="form-row">
                                    <div class="col-xl-6 mb-3">
                                        <label for="validationServer01">{{__('academic.Academic_ar_name')}}</label>
                                        <input type="text" name="name_ar" class="form-control" value="{{ $academic->getTranslation('name', 'ar') }}" id="validationServer01">
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <label for="validationServer02">{{__('academic.Academic_en_name')}}</label>
                                        <input type="text" name="name_en" class="form-control" value="{{ $academic->getTranslation('name', 'en') }}" id="validationServer02">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-3 mb-3">
                                        <label for="validationServer04">{{__('academic.Academic_years')}}</label>
                                        <select  name="years" class="form-select form-control"
                                                id="validationServer04"
                                                aria-describedby="validationServer04Feedback">
                                            <option selected value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 mb-3">
                                        <label for="validationServer05">{{__('academic.Academic_notes')}}</label>
                                        <input type="text" class="form-control"
                                               id="validationServer05"
                                               aria-describedby="validationServer05Feedback">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="validationTextarea">{{__('academic.Academic_notes')}}</label>
                                    <textarea name="notes"  class="form-control" id="validationTextarea" style="height: 89px;">{{ $academic->notes }}</textarea>
                                </div>
                                <button class="btn btn-primary" name="submit"  type="submit">{{__('main.edit')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/Row -->
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
@endsection

