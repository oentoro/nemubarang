@extends('layouts.main')

@section('script')
    <script>
        $(function(){
            $('#menu-nemu').addClass('active');
        });
    </script>
@endsection

@section('content')
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h2>Menemukan barang ?<em>Umumkan</em> temuan Anda dengan <span>formulir di bawah</span></h2>
                    </div>
                    <div class="col-12">
                        <form id="contact" action="" method="get">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="surname" name="surname" id="surname" placeholder="Surname"
                                            autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="website" id="website" placeholder="Your Website URL"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Submit Request</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-dec">
            <img src="{{ url('/') }}/assets/images/contact-dec.png" alt="">
        </div>
        <div class="contact-left-dec">
            <img src="{{ url('/') }}/assets/images/contact-left-dec.png" alt="">
        </div>
    </div>
@stop
