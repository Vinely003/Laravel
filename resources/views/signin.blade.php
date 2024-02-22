<x-layout>
    <section class="bg-dark text-light p-3 mx-auto rounded" style="width: 30%">
        <main>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                        required>
                    @error('email')
                        <p class="text-danger p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Jelszó:</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <p class="text-danger p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-block" type="submit">Regisztráció</button>
                    <a href="/login" class="btn btn-secondary btn-block">Bejelentkezés</a>
                </div>
            </form>
        </main>
    </section>
</x-layout>
