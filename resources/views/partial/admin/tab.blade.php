<div class="flex flex-col tab_admin">
    @php($currentUrl = \Illuminate\Support\Facades\URL::current())
    <a href="{{ route('admin.product.list') }}" class="{{ str_contains($currentUrl, 'product') ? 'active_tab' : '' }}">
        <span>
            Product Management
        </span>
    </a>
    <a href="{{ route('admin.user.list') }}" class="{{ str_contains($currentUrl, 'user') ? 'active_tab' : '' }}">
        <span>
            User Management
        </span>
    </a>
    <a href="">
        <span>
            Statistical Product
        </span>
    </a>
    <a href="">
        <span>
            Cart Management
        </span>
    </a>
</div>
