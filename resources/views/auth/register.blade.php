<!doctype html>
<html lang="fr" data-bs-theme="light">

<head>
    <script src="{{ asset('js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>M'inscrire</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Custom styles for this template -->

<body>
    <br>
    <br>
    <br>
<main class="form-signin w-100 mt-5 pt-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="d-flex justify-content-center">
                    </div>
                    <h1 class="h3 mb-3 text-body-primary d-flex justify-content-center">Créez un compte pour voir votre historique</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                        <label for="name" :value="__('Name')">Pseudo</label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="form-floating mt-3">
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                        <label for="password" :value="__('Password')">Mot de passe</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('login') }}" class="mx-1">
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block">
                                {{ __('Déjà enregistré ?') }}
                            </button>
                        </a>
                        <x-primary-button class="ml-3">
                            {{ __('M\'enregistrer') }}
                        </x-primary-button>
                    </div>
                    

                    <p class="mt-5 mb-3 text-body-secondary d-flex justify-content-center">
                        <img src="{{ asset('image/logo_footer.png') }}" class="bi" width="30" height="28" />
                        &copy; 2023 - Koffi & Kouassi & Konan - Tout droit réservé.
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>
</body>

</html>
