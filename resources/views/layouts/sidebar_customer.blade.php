<ul>
    <li><a href="{{ route('customer.dashboard') }}" class="btn btn-md btn-block btn-dark">{{ __('Dashboard')}}</a></li>
	<li><a href="{{ route('customer.order') }}" class="btn btn-md btn-block btn-dark">{{ __('Orders')}}</a></li>
	<li><a href="{{ route('customer.profile_change') }}" class="btn btn-md btn-block btn-dark">{{ __('Edit Profile')}}</a></li>
	<li><a href="{{ route('customer.password_change') }}" class="btn btn-md btn-block btn-dark">{{ __('Edit Password')}}</a></li>
    <li><a href="{{ route('customer.logout') }}" class="btn btn-md btn-block btn-dark">{{ __('Logout')}}</a></li>
</ul>