<x-layout>

    <div class="login-container">
        <div class="logo-form-container">
            <div class="logo">
                <a href="/"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
            </div>
            <div class="login-form">
                <h2>Crea un account</h2>
                <form action="/newuser" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                    <label for="cognome">Cognome:</label>
                    <input type="text" id="cognome" name="cognome" required>
                    <label for="indirizzo">Indirizzo:</label>
                    <input type="text" id="indirizzo" name="indirizzo" required>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit">ACCEDI</button>
                </form>

                <div class="additional-links">
                    <a href="/login">Hai già un account?</a>
                    <span> | </span>
                    <a href="">Password dimenticata?</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>