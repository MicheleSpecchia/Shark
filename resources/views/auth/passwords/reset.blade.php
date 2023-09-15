<x-layout>
    <div class="custom-background-container">
        <div class="login-container">
            <div class="logo-form-container">
                <div class="login-form">

                    <h2>{{ __('Reset Password') }}</h2>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.update') }}" style="display: flex; flex-direction: column;">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <input 
                            id="email" 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            name="email" 
                            value="{{ $email ?? old('email') }}" 
                            required autocomplete="email" 
                            autofocus 
                            placeholder="{{ __('Indirizzo e-mail') }}"
                            style="color: grey; padding: 10px; font-size: 1rem; margin-bottom: 10px;"  
                        >

                        @error('email')
                        <p class="text-danger text-xs mb-2">{{ $message }}</p>
                        @enderror

                        <input 
                            id="password" 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            name="password" 
                            required autocomplete="new-password" 
                            placeholder="{{ __('Password') }}"
                            style="color: grey; padding: 10px; font-size: 1rem; margin-bottom: 10px;" 
                        >

                        @error('password')
                        <p class="text-danger text-xs mb-2">{{ $message }}</p>
                        @enderror

                        <input 
                            id="conferma" 
                            type="password" 
                            class="form-control" 
                            name="password_confirmation" 
                            required autocomplete="new-password" 
                            placeholder="{{ __('Conferma Password') }}"
                            style="color: grey; padding: 10px; font-size: 1rem; margin-bottom: 10px;" 
                        >

                        <button type="submit" style="align-self: center;">{{ __('Cambia Password') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
