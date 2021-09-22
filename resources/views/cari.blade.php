@extends('layouts.main')

@section('content')
<div id="search" class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <h2>Cari Barang Hilang di Sini</h2>
                            <form id="search" action="" method="get">
                                <input type="text" name="website" id="website" placeholder="Your Website URL"
                                    required="">
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your Email" required="">
                                <button type="submit" id="form-submit" class="main-button ">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection