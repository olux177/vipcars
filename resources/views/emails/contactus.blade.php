
@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url'=> config('pages.main.logo')])
            <img src="{{ asset('/images/logo.png')}}">
        @endcomponent
    @endslot
    @component('mail::subcopy')
<h4> Incoming Query</h4>

<small>A customer has submitted a query. Below is a copy of the submission </small>
<div>
    <div>
        <span>User's Full Name: </span>
        <strong>{{$data['name']}} </strong>
    </div>
    <div>
        <span>User's email: </span>
        <strong>{{$data['email']}} </strong>
    </div>

    <div>
        <span>User's Contact Number: </span>
        <strong>{{$data['phone']}} </strong>
    </div>
    <br>
    <hr/>
    <br>
    <div>
        <p>{{$data['message']}} </p>
    </div>
</div>

Thanks,<br>
{{ config('pages.main.name') }}<br>
{{ config('pages.main.email') }}<br>
{{ config('pages.main.phoneNumber') }}
@endcomponent
    @slot('footer')
        @component('mail::footer', ['url'=> config('pages.main.logo')])
            <section class="section-12 bg-gray-darker text-md-left">
                <div class="shell">
                    <p class="font-accent">
                        <span class="small text-silver-dark">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and
                            <a href="{{url('terms')}}">Terms and Condition</a></span>
                            {{-- <a href="{{url('privacy_policy')}}">Privacy Policy</a></span> --}}
                    </p>
                </div>
            </section>
        @endcomponent
    @endslot
@endcomponent