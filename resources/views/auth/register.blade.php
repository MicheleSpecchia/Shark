<x-layout>
    <div class="custom-background-container">
        <div class="login-container">
            <div class="logo-form-container">
                <div class="login-form">
                    <h2>Crea un account</h2>
                    <form action="/newuser" method="POST">
                        @csrf

                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required>
                        @error('nome')
                        <p class="text-danger text-xs mb-2">{{$message}}</p>
                        @enderror

                        <label for="cognome">Cognome:</label>
                        <input type="text" id="cognome" name="cognome" required>
                        @error('cognome')
                        <p class="text-danger text-xs mb-2">{{$message}}</p>
                        @enderror

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
                        <a href="/login">Hai già un account?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>