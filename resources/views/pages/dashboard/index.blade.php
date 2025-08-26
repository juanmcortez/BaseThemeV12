<x-layouts.inside>
    @if(auth()->user()->profile->full_name)
        {!! __('Dashboard | Welcome back <strong>:name</strong> !!!', ['name' => auth()->user()->profile->full_name]) !!}
    @else
        {!! __('Dashboard | Welcome back <strong>:username</strong> !!!', ['username' => auth()->user()->username]) !!}
    @endif
    <br/>
    <br/>
    {!! __('<span class="inline-flex w-20">Name:</span>:name', ['name' => auth()->user()->profile->full_name]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">Username:</span>:username', ['username' => auth()->user()->username]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">E-mail:</span>:email', ['email' => auth()->user()->email]) !!}
    <br/>
    {{-- auth()->user()->email_verified_at }}
    <br/>
    {{ auth()->user()->created_at --}}
    <br/>
    {!! __('<span class="inline-flex w-20">Street:</span>:street', ['street' => auth()->user()->profile->address->street_name]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">&nbsp;</span>:street', ['street' => auth()->user()->profile->address->street_name_extended]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">City:</span>:city', ['city' => auth()->user()->profile->address->city]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">State:</span>:state', ['state' => auth()->user()->profile->address->state]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">Zip:</span>:postal_code', ['postal_code' => auth()->user()->profile->address->postal_code]) !!}
    <br/>
    {!! __('<span class="inline-flex w-20">Country:</span>:country', ['country' => auth()->user()->profile->address->country_code]) !!}
    <br/>
    <br/>
    {!! __('<span class="inline-flex w-20">Phone:</span>:phone', ['phone' => auth()->user()->profile->phone->fullNumber()]) !!}
    <br/>
    {{-- auth()->user()->address->updated_at --}}
    <br/>
</x-layouts.inside>
