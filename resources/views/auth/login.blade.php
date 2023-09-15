<x-layout>
    <div class="custom-background-container">
        <div class="login-container">
            <div class="logo-form-container">
                <div class="login-form">
                    <h2>Accedi al tuo account</h2>
                    <form action="/users/authenticate" method="POST">
                        @csrf

                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" required>
                        @error('email')
                        <p class="text-danger text-xs mb-2">{{$message}}</p>
                        @enderror


                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        @error('password')
                        <p class="text-danger text-xs mb-2">{{$message}}</p>
                        @enderror
                        <button type="submit">ACCEDI</button>

                    </form>

                    <div class="additional-links">
                        <a href="/register">Non hai un account?</a>
                        <span> | </span>
                        <a href="{{ route('password.request') }}">Password dimenticata?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>