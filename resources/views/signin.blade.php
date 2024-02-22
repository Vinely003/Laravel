<x-layout>
    <section class="bg-dark text-light p-3 mx-auto" style="width: 50%">
        <main>
            <form action="/register" method="POST">
                @csrf
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    <br>
                    @error('email')
                        <p class="text-danger p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password">Jelszó:</label>
                    <input type="password" name="password" id="password">
                    <br>
                    @error('password')
                        <p class="text-danger p-2">{{ $message }}</p>
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
