<!--begin::Menu-->
<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular')) ? 'active' : '' }}" href="{{ route('regular') }}">
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
        <a class="menu-link {{ (request()->is('regular/users')) ? 'active' : '' }}" href="{{ route('regular.users') }}">
            <!-- <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                </span>
            </span> -->
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Users</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/users/pre_purchase')) ? 'active' : '' }}" href="{{ route('regular.users.pre_purchase') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Pre Purchase</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/users/incoming_funds')) ? 'active' : '' }}" href="{{ route('regular.users.incoming_funds') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Incoming Funds</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/users/outcomes_funds')) ? 'active' : '' }}" href="{{ route('regular.users.outcomes_funds') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Outcomes Funds</span>
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
        <a class="menu-link {{ (request()->is('regular/manages/promo')) ? 'active' : '' }}" href="{{ route('regular.manages.promo') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Promo</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/manages/digital_price')) ? 'active' : '' }}" href="{{ route('regular.manages.digital_price') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Digital Price</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/manages/gold_price')) ? 'active' : '' }}" href="{{ route('regular.manages.gold_price') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Gold Price</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/manages/product')) ? 'active' : '' }}" href="{{ route('regular.manages.product') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Product</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/manages/package')) ? 'active' : '' }}" href="{{ route('regular.manages.package') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Package</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/manages/crazy_deals')) ? 'active' : '' }}" href="{{ route('regular.manages.crazy_deals') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Crazy Deals</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ (request()->is('regular/manages/royalty_ongoing')) || (request()->is('regular/manages/royalty_settlement')) ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">MP Royalty</span>
            <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion  {{ (request()->is('regular/manages/royalty_ongoing')) || (request()->is('regular/manages/royalty_settlement')) ? 'show' : '' }}">
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ (request()->is('regular/manages/royalty_ongoing')) ? 'active' : '' }}" href="{{ route('regular.manages.royalty_ongoing') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">On Going</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ (request()->is('regular/manages/royalty_settlement')) ? 'active' : '' }}" href="{{ route('regular.manages.royalty_settlement') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Settle</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
        </div>
        <!--end:Menu sub-->
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
        <a class="menu-link {{ (request()->is('regular/transactions/pre_purchase')) ? 'active' : '' }}" href="{{ route('regular.transactions.pre_purchase') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Pre Purchase</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/transactions/sales_order')) ? 'active' : '' }}" href="{{ route('regular.transactions.sales_order') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Sales Order</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/transactions/upgrade_account')) ? 'active' : '' }}" href="{{ route('regular.transactions.upgrade_account') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Upgrade Account</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/transactions/restock')) ? 'active' : '' }}" href="{{ route('regular.transactions.restock') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Restock</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/transactions/digital')) ? 'active' : '' }}" href="{{ route('regular.transactions.digital') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Digital</span>
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
        <a class="menu-link {{ (request()->is('regular/payouts/withdrawal')) ? 'active' : '' }}" href="{{ route('regular.payouts.withdrawal') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Withdrawal</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/payouts/redeem')) ? 'active' : '' }}" href="{{ route('regular.payouts.redeem') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Redeem</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    {{-- Logistics --}}
    <!--begin:Menu item-->
    <div class="menu-item pt-5">
        <!--begin:Menu content-->
        <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-7">Logistics</span>
        </div>
        <!--end:Menu content-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/logistics/product_order')) ? 'active' : '' }}" href="{{ route('regular.logistics.product_order') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Product Order</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link {{ (request()->is('regular/logistics/redeem')) ? 'active' : '' }}" href="{{ route('regular.logistics.redeem') }}">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Redeem</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
</div>
<!--end::Menu-->