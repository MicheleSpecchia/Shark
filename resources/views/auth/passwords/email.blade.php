<x-layout>
    <div class="custom-background-container">
        <div class="login-container">
            <div class="logo-form-container">
                <div class="login-form">

                    <h2>Recupera la tua password</h2>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('password.email') }}" method="POST" style="display: flex; flex-direction: column;">
                        @csrf

                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required autocomplete="email" 
                            autofocus 
                            placeholder="Inserisci qui la tua e-mail"
                            style="color: grey; padding: 10px; font-size: 1rem; margin-bottom: 10px;"  
                            >
                        @error('email')
                        <p class="text-danger text-xs mb-2">{{ $message }}</p>
                        @enderror

                        <button type="submit" style="align-self: center;">{{ __('Invia link per il reset') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
