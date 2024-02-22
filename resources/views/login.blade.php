<x-layout>
    <section class="bg-dark text-light p-3 mx-auto" style="width: 50%">
        <main>
            <form action="/login" method="POST">
                @csrf
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-danger p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password">Jelszó:</label>
                    <input type="password" name="password" id="password">
                    @error('password')
                        <p class="text-danger p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Bejelentkezés</button>
                    <a href="/" class="btn btn-secondary">Regisztráció</a>
                </div>
            </form>
        </main>
    </section>
</x-layout>
