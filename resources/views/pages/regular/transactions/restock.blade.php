@extends('layout.master')

@section('main')
<!--begin::Main-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Restock Transactions List</span>
        </h3>
        <!--begin::Filter menu-->
        <div class="card-toolbar m-0">
            <!--begin::Menu toggle-->
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->Filter
            </a>
            <!--end::Menu toggle-->
            <!--begin::Menu 1-->
            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                id="kt_menu_62fe86c76cdd9">
                <!--begin::Header-->
                <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bold">Filter Data</div>
                </div>
                <!--end::Header-->
                <!--begin::Menu separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Menu separator-->
                <!--begin::Form-->
                <div class="px-7 py-5">
                    <!--begin::Input group-->
                    <div class="mb-5">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Country:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select id="selectFilter" class="form-select" name="selectFilter">
                                <option value="1">All Country</option>
                                <option value="2">Indonesia</option>
                                <option value="3">Malaysia</option>
                            </select>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Level:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select id="selectFilter" class="form-select" name="selectFilter">
                                <option value="1">All Level</option>
                                <option value="2">Indonesia</option>
                                <option value="3">Malaysia</option>
                            </select>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Month:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select id="selectFilter" class="form-select" name="selectFilter">
                                <option value="1">All Month</option>
                                <option value="2">Indonesia</option>
                                <option value="3">Malaysia</option>
                            </select>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-5">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Year:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select id="selectFilter" class="form-select" name="selectFilter">
                                <option value="1">All Year</option>
                                <option value="2">Indonesia</option>
                                <option value="3">Malaysia</option>
                            </select>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                            data-kt-menu-dismiss="true">Reset</button>
                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Menu 1-->
        </div>
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
                        <th>ID</th>
                        <th>Transaction #</th>
                        <th>Creator</th>
                        <th>Status</th>
                        <th>Method</th>
                        <th>Amount</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="https://admin.pocketyouasia.com/regular/transaction/restock/detail/15685">15685</a>
                        </td>
                        <td>INV/20230821/1/3/97707/97216</td>
                        <td>Kamariah binti Mahmud</td>
                        <td class="text-center"><label class="badge badge-success">DONE</label></td>
                        <td>Pre Purchase</td>
                        <td class="text-end">RM 1,710.00</td>
                        <td class="text-end">21 Aug 2023 13:53</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://admin.pocketyouasia.com/regular/transaction/restock/detail/15678">15678</a>
                        </td>
                        <td>INV/20230820/1/3/32151/37878</td>
                        <td>Apis Dorsata</td>
                        <td class="text-center"><label class="badge badge-danger">CANCEL</label></td>
                        <td>Automatic Bank Transfer</td>
                        <td class="text-end">RM 55.00</td>
                        <td class="text-end">20 Aug 2023 21:24</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://admin.pocketyouasia.com/regular/transaction/restock/detail/15642">15642</a>
                        </td>
                        <td>INV/20230817/1/3/82793/29822</td>
                        <td>Popeah binti Ahat</td>
                        <td class="text-center"><label class="badge badge-success">DONE</label></td>
                        <td>Pre Purchase</td>
                        <td class="text-end">RM 46.90</td>
                        <td class="text-end">17 Aug 2023 07:50</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://admin.pocketyouasia.com/regular/transaction/restock/detail/15638">15638</a>
                        </td>
                        <td>INV/20230816/1/3/97376/91715</td>
                        <td>Mubin Jamil</td>
                        <td class="text-center"><label class="badge badge-success">DONE</label></td>
                        <td>Pre Purchase</td>
                        <td class="text-end">RM 10,260.00</td>
                        <td class="text-end">16 Aug 2023 21:15</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://admin.pocketyouasia.com/regular/transaction/restock/detail/15624">15624</a>
                        </td>
                        <td>INV/20230816/1/3/97378/50086</td>
                        <td>Jazmin Jamil</td>
                        <td class="text-center"><label class="badge badge-success">DONE</label></td>
                        <td>Pre Purchase</td>
                        <td class="text-end">RM 10,260.00</td>
                        <td class="text-end">16 Aug 2023 09:41</td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Main-->
@endsection