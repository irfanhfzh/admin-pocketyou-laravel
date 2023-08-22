@extends('layout.master')

@section('main')
<!--begin::Main-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Category Product List</span>
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
                        <label class="form-label fw-semibold">Status:</label>
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
                        <th>Category Code</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/9">9</a>
                        </td>
                        <td class="text-center">PULSA</td>
                        <td class="text-center">Available</td>
                        <td class="text-center"><a href="" target="_blank"><img src="" alt="PULSA"
                                    style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(0)">Edit</a>
                            |
                            <a href="javascript:deleteCat(9)">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/8">8</a>
                        </td>
                        <td class="text-center">HOME</td>
                        <td class="text-center">Coming Soon</td>
                        <td class="text-center"><a
                                href="https://api.pocketyouasia.com/public/img/category/main/home.png"
                                target="_blank"><img
                                    src="https://api.pocketyouasia.com/public/img/category/main/home.png" alt="HOME"
                                    style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(1)">Edit</a>
                            |
                            <a href="javascript:deleteCat(8)">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/7">7</a>
                        </td>
                        <td class="text-center">SPORT</td>
                        <td class="text-center">Coming Soon</td>
                        <td class="text-center"><a
                                href="https://api.pocketyouasia.com/public/img/category/main/sport.png"
                                target="_blank"><img
                                    src="https://api.pocketyouasia.com/public/img/category/main/sport.png" alt="SPORT"
                                    style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(2)">Edit</a>
                            |
                            <a href="javascript:deleteCat(7)">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/6">6</a>
                        </td>
                        <td class="text-center">ELECTRO</td>
                        <td class="text-center">Coming Soon</td>
                        <td class="text-center"><a
                                href="https://api.pocketyouasia.com/public/img/category/main/electro.png"
                                target="_blank"><img
                                    src="https://api.pocketyouasia.com/public/img/category/main/electro.png"
                                    alt="ELECTRO" style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(3)">Edit</a>
                            |
                            <a href="javascript:deleteCat(6)">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/5">5</a>
                        </td>
                        <td class="text-center">PC</td>
                        <td class="text-center">Coming Soon</td>
                        <td class="text-center"><a href="https://api.pocketyouasia.com/public/img/category/main/pc.png"
                                target="_blank"><img src="https://api.pocketyouasia.com/public/img/category/main/pc.png"
                                    alt="PC" style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(4)">Edit</a>
                            |
                            <a href="javascript:deleteCat(5)">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/4">4</a>
                        </td>
                        <td class="text-center">MOBILE</td>
                        <td class="text-center">Coming Soon</td>
                        <td class="text-center"><a
                                href="https://api.pocketyouasia.com/public/img/category/main/mobile.png"
                                target="_blank"><img
                                    src="https://api.pocketyouasia.com/public/img/category/main/mobile.png" alt="MOBILE"
                                    style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(5)">Edit</a>
                            |
                            <a href="javascript:deleteCat(4)">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/3">3</a>
                        </td>
                        <td class="text-center">FOOD</td>
                        <td class="text-center">Available</td>
                        <td class="text-center"><a href="https://api.pocketyouasia.com/public/img/category/main/fnb.jpg"
                                target="_blank"><img
                                    src="https://api.pocketyouasia.com/public/img/category/main/fnb.jpg" alt="FOOD"
                                    style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(6)">Edit</a>
                            |
                            <a href="javascript:deleteCat(3)">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/2">2</a>
                        </td>
                        <td class="text-center">HEALTH</td>
                        <td class="text-center">Available</td>
                        <td class="text-center"><a
                                href="https://api.pocketyouasia.com/public/img/category/main/health.png"
                                target="_blank"><img
                                    src="https://api.pocketyouasia.com/public/img/category/main/health.png" alt="HEALTH"
                                    style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(7)">Edit</a>
                            |
                            <a href="javascript:deleteCat(2)">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="https://admin.pocketyouasia.com/regular/manage/category/detail/1">1</a>
                        </td>
                        <td class="text-center">FEE</td>
                        <td class="text-center">Available</td>
                        <td class="text-center"><a href="" target="_blank"><img src="" alt="FEE"
                                    style="border-radius: unset;"></a>
                        </td>
                        <td class="text-center">
                            <a href="javascript:detailCat(8)">Edit</a>
                            |
                            <a href="javascript:deleteCat(1)">Delete</a>
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
<!--end::Main-->
@endsection