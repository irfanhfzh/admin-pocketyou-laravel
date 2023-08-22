@extends('layout.master')

@section('main')
<!--begin::Main-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">VIP Merchant Registration</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <form action="#">
        <div class="card-body py-3">
            <!--begin::Forms-->
            <div class="mb-5">
                <label for="merchant_name" class="required form-label">Merchant Name</label>
                <input type="text" id="merchant_name" class="form-control" placeholder="Merchant Name" />
            </div>
            <div class="mb-5">
                <label for="select_country" class="required form-label">Country</label>
                <select id="select_country" class="form-select" name="select_country">
                    <option value="2">Indonesia</option>
                    <option value="3">Malaysia</option>
                    <option value="1">Singapore</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="select_language" class="required form-label">Language</label>
                <select id="select_language" class="form-select" name="select_language">
                    <option value="1">English</option>
                    <option value="2">Bahasa Indonesia</option>
                    <option value="3">Bahasa Melayu</option>
                </select>
            </div>
            <label for="phone_number" class="required form-label">Phone Number</label>
            <div class="input-group mb-5">
                <span class="input-group-text" id="basic-addon1">62</span>
                <input type="text" id="phone_number" class="form-control" placeholder="Phone Number">
            </div>
            <div class="mb-10">
                <label for="email" class="required form-label">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email" />
            </div>
            <!--end::Forms-->
            <div class="d-flex justify-content-center mb-10">
                <button type="submit" class="w-25 btn btn-primary d-flex align-items-center justify-content-center">
                    <span class="svg-icon svg-icon-3 svg-icon-muted me-1">
                        <i class="iconify" data-icon="mdi-plus-thick"></i>
                    </span>
                    Register
                </button>
            </div>
        </div>
    </form>
    <!--begin::Body-->
</div>
<!--end::Main-->
@endsection