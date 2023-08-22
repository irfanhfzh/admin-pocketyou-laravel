@extends('layout.master')

@section('main')
<!--begin::Total VIP Leader / VIP Merchant-->
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
                <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">3 Users</div>
                <div class="fw-semibold text-gray-400">VIP Leader</div>
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
                <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">2 Users</div>
                <div class="fw-semibold text-gray-400">VIP Merchant</div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Statistics Widget 5-->
    </div>
    <!--end::Col-->
</div>
<!--end::Total VIP Leader / VIP Merchant-->

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
                            Rp 2.120.000
                        </td>
                        <td>
                            Rp 139.700
                        </td>
                        <td>
                            Rp 1.980.300
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
                                        <td>Edwar Collection </td>
                                        <td>Rp 1.020.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Sukses full</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>GadGet online </td>
                                        <td>Rp 50.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Patria Digital</td>
                                        <td>Rp 50.000</td>
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
                                        <td>TESTING</td>
                                        <td>Rp 1.957.125.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Edwar Collection </td>
                                        <td>Rp 2.560.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>GadGet online </td>
                                        <td>Rp 750.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Patria Digital</td>
                                        <td>Rp 377.700</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>Aldan Store</td>
                                        <td>Rp 267.500</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>Funstore</td>
                                        <td>Rp 239.025</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td>Zul Shop</td>
                                        <td>Rp 180.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td>Coficoff Club</td>
                                        <td>Rp 140.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td>Shopping _shop </td>
                                        <td>Rp 50.000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td>Sukses full</td>
                                        <td>Rp 50.000</td>
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

<!--begin::Top 10 Customer / Reward-->
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
                                        <td>Zul Shop</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Funstore</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Edwar Collection </td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>GadGet online </td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Shopping _shop </td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Sukses full</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Aldan Store</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Coficoff Club</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Patria Digital</td>
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
                    <span class="card-label fw-bold fs-3 mb-1">Top 10 (Reward)</span>
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
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TESTING</td>
                                        <td>Rp 180.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Edwar Collection </td>
                                        <td>Rp 30.500</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>GadGet online </td>
                                        <td>Rp 16.104</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Funstore</td>
                                        <td>Rp 15.725</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Sukses full</td>
                                        <td>Rp 10.000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Shopping _shop </td>
                                        <td>Rp 5.000</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Patria Digital</td>
                                        <td>Rp 5.000</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Aldan Store</td>
                                        <td>Rp 3.510</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Zul Shop</td>
                                        <td>Rp 1.900</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Coficoff Club</td>
                                        <td>Rp 501</td>
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
<!--end::Top 10 Customer / Reward-->

<!--begin::Top 10 Incentive Reward / Gold Bar-->
<div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Table Widget 7-->
        <div class="card card-xl-stretch mb-xl-8">
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
                    <div class="tab-pane fade show active" id="kt_table_widget_7_tab_1">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>GadGet online </td>
                                        <td>Rp 116.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Coficoff Club</td>
                                        <td>Rp 105.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Patria Digital</td>
                                        <td>Rp 101.400</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Bakso binaria</td>
                                        <td>Rp 17.000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Shopping _shop </td>
                                        <td>Rp 17.000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Jualan ikan dan udang segar </td>
                                        <td>Rp 17.000</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Aldan Store</td>
                                        <td>Rp 17.000</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Edwar Collection </td>
                                        <td>Rp 17.000</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>PT NANTEATRACO</td>
                                        <td>Rp 17.000</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Sukses full</td>
                                        <td>Rp 17.000</td>
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
                    <span class="card-label fw-bold fs-3 mb-1">Top 10 (Gold Bar)</span>
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
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Gram</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>GadGet online </td>
                                        <td>756.2160000000 Gram</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Funstore</td>
                                        <td>616.6800000000 Gram</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Aldan Store</td>
                                        <td>216.2700000000 Gram</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Zul Shop</td>
                                        <td>97.2000000000 Gram</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Coficoff Club</td>
                                        <td>27.0540000000 Gram</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Patria Digital</td>
                                        <td>27.0000000000 Gram</td>
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
<!--end::Top 10 Incentive Reward / Gold Bar-->
@endsection