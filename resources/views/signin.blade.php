<x-layout>
    <section class="bg-dark text-light p-3 mx-auto" style="width: 50%">
        <main>
            <form action="/register" method="POST">
                @csrf
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <label for="password">Jelszó:</label>
                    <input type="password" name="password" id="password">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Regisztráció</button>
                    <a href="/login" class="btn btn-secondary">Bejelentkezés</a>
                </div>
            </form>
        </main>
    </section>
</x-layout>
