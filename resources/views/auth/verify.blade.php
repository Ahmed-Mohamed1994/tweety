<x-master>
    <div class="container mx-auto px-6 py-4 bg-gray-400">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="font-bold text-lg mb-4">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success mb-6" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                                {{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
