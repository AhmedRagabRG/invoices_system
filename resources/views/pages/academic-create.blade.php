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
                            <div id="wizard1">
                                    <h3>Personal Information</h3>
                                    <section>
                                        <div class="control-group form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control required" placeholder="Name">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control required"
                                                   placeholder="Email Address" autocomplete="new-password">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input type="number" class="form-control required" placeholder="Number">
                                        </div>
                                        <div class="control-group form-group mb-0">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control required" placeholder="Address">
                                        </div>
                                    </section>
                                    <h3>Billing Information</h3>
                                    <section>
                                        <div class="table-responsive mg-t-20">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>Cart Subtotal</td>
                                                    <td class="text-end">$792.00</td>
                                                </tr>
                                                <tr>
                                                    <td><span>Totals</span></td>
                                                    <td class="text-end text-muted"><span>$792.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Order Total</span></td>
                                                    <td>
                                                        <h2 class="price text-end mb-0">$792.00</h2>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <h3>Payment Details</h3>
                                    <section>
                                        <div class="form-group">
                                            <label class="form-label">CardHolder Name</label>
                                            <input type="text" class="form-control" id="name1"
                                                   placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Card number</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-text btn btn-info shadow-none mb-0">
                                                            <i class="fa fa-cc-visa"></i> &nbsp; <i
                                                        class="fa fa-cc-amex"></i> &nbsp;
                                                            <i class="fa fa-cc-mastercard"></i>
                                                        </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group mb-sm-0">
                                                    <label class="form-label">Expiration</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" placeholder="MM"
                                                               name="expiremonth">
                                                        <input type="number" class="form-control" placeholder="YY"
                                                               name="expireyear">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 ">
                                                <div class="form-group mb-0">
                                                    <label class="form-label">CVV <i
                                                            class="fa fa-question-circle"></i></label>
                                                    <input type="number" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                            </div>
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

