@extends('layout.master')

@section('main')
<!--begin::Total Retail Leader / Retail Store-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Statistics Widget 5-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <i class="iconify" data-icon="mdi-account-group"></i>
                </span>
                <!--end::Svg Icon-->
                <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">2 Users</div>
                <div class="fw-semibold text-gray-400">Retail Leader</div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Statistics Widget 5-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Statistics Widget 5-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                    <i class="iconify" data-icon="mdi-account-group"></i>
                </span>
                <!--end::Svg Icon-->
                <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">0 Users</div>
                <div class="fw-semibold text-gray-400">Retail Store</div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Statistics Widget 5-->
    </div>
    <!--end::Col-->
</div>
<!--end::Total Retail Leader / Retail Store-->

<!--begin::Total Users / Active Users-->
<div class="row g-5 g-xl-8">
    <div class="col-xl-6">
        <!--begin::Charts Widget 1-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Total Users</span>
                    <span class="text-muted fw-semibold fs-7">More than 400 new members</span>
                </h3>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Chart-->
                <div id="kt_charts_widget_1_chart" style="height: 350px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Charts Widget 1-->
    </div>
    <div class="col-xl-6">
        <!--begin::Charts Widget 2-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Active Users</span>
                    <span class="text-muted fw-semibold fs-7">More than 500 new orders</span>
                </h3>
                <!--begin::Toolbar-->
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Chart-->
                <div id="kt_charts_widget_2_chart" style="height: 350px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Charts Widget 2-->
    </div>
</div>
<!--end::Total Users / Active Users-->

<!--begin::Withdrawal-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Withdrawal</span>
        </h3>
        <!--begin::Filter menu-->
        <!--begin::Col-->
        <div class="card-toolbar col-md-6 fv-row" style="width: fit-content;">
            <select id="selectVersion" class="form-select" name="selectVersion">
                <option value="1">2023</option>
                <option value="2">2022</option>
            </select>
        </div>
        <!--end::Col-->
        <!--end::Filter menu-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Withdrawal-->

<!--begin::Summary Pre Allocation-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Summary Pre Allocation</span>
        </h3>
        <!--begin::Filter menu-->

        <!--end::Filter menu-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Total Amount</th>
                        <th>Amount Used</th>
                        <th>Current Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Rp 100.000
                        </td>
                        <td>
                            Rp 2.000
                        </td>
                        <td>
                            Rp 98.000
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Summary Pre Allocation-->

<!--begin::Top 10 Pre Allocation / Sales-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Table Widget 7-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Top 10 (Pre Allocation)</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="tab-content">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_table_widget_7_tab_1">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>JOKO RETAIL</td>
                                        <td>Rp 100.000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tables Widget 7-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Table Widget 8-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Top 10 (Sales)</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="tab-content">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_table_widget_8_tab_1">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>JOKO RETAIL</td>
                                        <td>Rp 175.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tables Widget 8-->
    </div>
    <!--end::Col-->
</div>
<!--end::Top 10 Pre Allocation / Sales-->

<!--begin::Top 10 Customer / Incentive Reward-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Table Widget 7-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Top 10 (Customer)</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="tab-content">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_table_widget_7_tab_1">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Customer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>JOKO RETAIL</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tables Widget 7-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Table Widget 8-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Top 10 (Incentive Reward)</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="tab-content">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_table_widget_8_tab_1">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>JOKO RETAIL</td>
                                        <td>Rp 2.730</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tables Widget 8-->
    </div>
    <!--end::Col-->
</div>
<!--end::Top 10 Customer / Incentive Reward-->

<!--begin::Top 10 Gold Bar-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Table Widget 7-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Top 10 (Gold Bar)</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="tab-content">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_table_widget_7_tab_1">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Gram</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center" colspan="3">No data</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tables Widget 7-->
    </div>
    <!--end::Col-->
</div>
<!--end::Top 10 Gold Bar-->
@endsection