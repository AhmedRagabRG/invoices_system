<div>
    <div id="wizard1">
        {{--                                    <form action="">--}}
        <h3>{{__('academic.Academic_data')}}</h3>
        <section>
            <div class="control-group form-group">
                <label class="form-label">Arabic Name</label>
                <input type="text" class="form-control required" placeholder="Arabic Name">
            </div>
            <div class="control-group form-group">
                <label class="form-label">English Name</label>
                <input type="email" class="form-control required"
                       placeholder="English Name">
            </div>
        </section>
        <h3>{{__('academic.Academic_requirements')}}</h3>
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
        <h3>{{__('academic.Academic_notes')}}</h3>
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
        {{--                                    </form>--}}
    </div>
</div>
