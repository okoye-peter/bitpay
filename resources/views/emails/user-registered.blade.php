@component('mail::message')
# Welcome to Bit-Paycoin.com

You  {{$user->username}} have successfully completed your registration on bit-paycoin.com.

Welcome to the no1 cryptocurrency investment platform in the world.
thank you.
@component('mail::button', ['url' => 'https//bit-paycoin.com/login'])
    Login
@endcomponent

Thanks,<br>
Admin@Bit-PayCoin

@endcomponent
