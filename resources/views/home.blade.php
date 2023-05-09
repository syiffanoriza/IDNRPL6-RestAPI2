@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="ongkir-header">
            <h1>ShippingFees</h1>
            <p class="lead">
                Shipping Fees Project to all cities in Indonesia
            </p>
        </div>

        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-truck" style="font-size:80px"></i>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Check Shipping Fees Easier</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-box" style="font-size:80px"></i>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Track package location</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <i class="fas fa-plane-departure" style="font-size:80px"></i>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Check International Shipping Fees</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Shipping Fees Form</h4>
            </div>
            <div class="card-body">
                <form action="">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <h5 class="text-muted">Asal Pengirim:</h5>
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <select name="origin_province" id="" class="form-control">
                                    <option value="#">-</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kota/Kabupaten</label>
                                <select name="origin_city" id="" class="form-control">
                                    <option value="#">-</option>
                                </select>
                            </div>
                            <h5 class="text-muted">Tujuan Pengirim:</h5>
                            <div class="form-group">
                                <label for="">Kota/Kabupaten</label>
                                <select name="destination_city" id="destination_city" class="form-control">
                                    <option value="#">-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="text-muted">Pilih Expedisi:</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="optional">
                                <label class="form-check-label" for="inlineCheckbox1">JNE</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="optional">
                                <label class="form-check-label" for="inlineCheckbox2">TIKI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
