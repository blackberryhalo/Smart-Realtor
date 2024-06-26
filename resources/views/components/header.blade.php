
<div class="fixed top-0 w-full py-4 px-12 flex justify-between items-center z-30 sticky-header {{request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max">
        <a href="{{route('home')}}"><img width="100" src="/img/house-logo.png" alt=""></a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white {{request('type') == '3' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=3">{{ __('Land') }}</a></li>
            <li><a class="inline-block p-4 text-white {{request('type') == '2' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=2">{{ __('Villa') }}</a></li>
            <li><a class="inline-block p-4 text-white {{request('type') == '1' ? 'bg-gray-50' : ''}}" href="{{route('property.index')}}?type=1">{{ __('Apartment') }}</a></li>
            <li><a class="inline-block p-4 text-white {{ request()->is('*page/about-us*') ? 'bg-gray-50' : '' }}" href="{{route('page', 'about-us')}}">{{ __('About Us') }}</a></li>
            <li><a class="inline-block p-4 text-white  {{ request()->is('page/contact-us') ? 'bg-gray-50' : '' }}" href="{{route('page', 'contact-us')}}">{{ __('Contact Us') }}</a></li>

            {{-- <li><a class="menu-item {{ request()->is('*/properties/?type=land') ? 'active' : '' }}" href="{{ route('properties') }}/?type=land">{{ __('Land') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/properties/?type=villa') ? 'active' : '' }}" href="{{ route('properties') }}/?type=villa">{{ __('Villa') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/properties/?type=apartment') ? 'active' : '' }}" href="{{ route('properties') }}/?type=apartment">{{ __('Apartment') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/page/about-us*') ? 'active' : '' }}" href="{{ route('page','about-us') }}">{{ __('About Us') }}</a></li>
            <li><a class="menu-item {{ request()->is('*/page/contact-us*') ? 'active' : '' }}" href="{{ route('page','contact-us') }}">{{ __('Contact Us') }}</a></li> --}}

        </ul>
    </div>


    <div class="min-w-max text-3xl flex justify-end">
        <!------ Currency Change Button ------->
        <div class="mr-10 text-2xl currency">
            <a class="inline-block text-xl rounded-full px-3 py-1 text-white" href="{{ route('currency', 'usd') }}" title="Change Currency to Doller">$</a>
            <a class="inline-block text-xl rounded-full px-3 py-1 text-white" href="{{ route('currency', 'hkd') }}" title="Change Currency to HKD">$HKD</a>
        </div>

        <!------ Language Change Button - Flag ------->
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" title="English Language">🏁</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('zh-Hant') }}" title="Chinese Language">🇨🇳</a>
        {{-- &#127482;&#127480; --}}
    </div>

</div>
