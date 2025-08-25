<x-layouts.inside>
    {{ __('Dashboard | Welcome back :username !!!', ['username' => auth()->user()->username]) }}
    <br/>
    <br/>
    {!! __('<span class="inline-flex w-20">Username:</span>:username', ['username' => auth()->user()->username]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">E-mail:</span>:email', ['email' => auth()->user()->email]) !!}
    <br/>
    {{-- auth()->user()->email_verified_at }}
    <br/>
    {{ auth()->user()->created_at --}}
    <br/>
    {!! __('<span class="inline-flex w-20">Street:</span>:street', ['street' => auth()->user()->address->street_name]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">&nbsp;</span>:street', ['street' => auth()->user()->address->street_name_extended]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">City:</span>:city', ['city' => auth()->user()->address->city]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">State:</span>:state', ['state' => auth()->user()->address->state]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">Zip:</span>:postal_code', ['postal_code' => auth()->user()->address->postal_code]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">Country:</span>:country', ['country' => auth()->user()->address->country_code]) !!}
    <br/>
    <br/>
    {!! __('<span class="inline-flex w-20">Phone:</span>:phone', ['phone' => auth()->user()->phone->fullNumber()]) !!}
    <br/>
    {{-- auth()->user()->address->updated_at --}}
    <br/>
</x-layouts.inside>
