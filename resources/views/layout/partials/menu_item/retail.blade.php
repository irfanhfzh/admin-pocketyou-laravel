<!--begin::Menu-->
<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
    data-kt-menu-expand="false">
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('retail')) ? 'active' : '' }}" href="{{ route('retail') }}">
            <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Dashboard</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    {{-- Manages --}}
    <!--begin:Menu item-->
    <div class="menu-item pt-5">
        <!--begin:Menu content-->
        <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">Manages</span>
        </div>
        <!--end:Menu content-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('retail/manages/retail_merchant')) ? 'active' : '' }}"
            href="{{ route('retail.manages.retail_merchant') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <i class="iconify" data-icon="mdi-account-star"></i>
                </span>
            </span>
            <span class="menu-title">Retail Merchant</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('retail/manages/ads_blast')) ? 'active' : '' }}"
            href="{{ route('retail.manages.ads_blast') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <i class="iconify" data-icon="mdi-archive"></i>
                </span>
            </span>
            <span class="menu-title">Ads Blast</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    {{-- Users --}}
    <!--begin:Menu item-->
    <div class="menu-item pt-5">
        <!--begin:Menu content-->
        <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">Users</span>
        </div>
        <!--end:Menu content-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('retail/users')) ? 'active' : '' }}" href="{{ route('retail.users') }}">
            {{-- <span class="menu-icon">
                <span class="svg-icon svg-icon-2">

                </span>
            </span> --}}
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <i class="iconify" data-icon="mdi-account"></i>
                </span>
            </span>
            <span class="menu-title">Users</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    {{-- Transactions --}}
    <!--begin:Menu item-->
    <div class="menu-item pt-5">
        <!--begin:Menu content-->
        <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">Transactions</span>
        </div>
        <!--end:Menu content-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('retail/transactions/pre_allocation')) ? 'active' : '' }}"
            href="{{ route('retail.transactions.pre_allocation') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <i class="iconify" data-icon="mdi-cash-marker"></i>
                </span>
            </span>
            <span class="menu-title">Pre Allocation</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('retail/transactions/sales_order')) ? 'active' : '' }}"
            href="{{ route('retail.transactions.sales_order') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <i class="iconify" data-icon="mdi-cart-plus"></i>
                </span>
            </span>
            <span class="menu-title">Sales Order</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    {{-- Payouts --}}
    <!--begin:Menu item-->
    <div class="menu-item pt-5">
        <!--begin:Menu content-->
        <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">Payouts</span>
        </div>
        <!--end:Menu content-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('retail/payouts/withdrawal')) ? 'active' : '' }}"
            href="{{ route('retail.payouts.withdrawal') }}">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                    <i class="iconify" data-icon="mdi-arrow-down-bold-hexagon-outline"></i>
                </span>
            </span>
            <span class="menu-title">Withdrawal</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
</div>
<!--end::Menu-->