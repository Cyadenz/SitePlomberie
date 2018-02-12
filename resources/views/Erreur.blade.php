@extends('layouts.default')

  @section('content')
       <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Erreur 404
        <small>Page non trouvée</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Erreur 404</li>
      </ol>

      <div class="jumbotron">
        <p>La page que vous recherchez n'a pas été trouvée. Voici quelques liens pour vour aider à retrouver votre page.</p>
        <ul>
          <li>
            <a href="/">Accueil</a>
          </li>
          <li>
            <a href="/apropos">À propos</a>
          </li>
          <li>
            <a href="/services">Nos services</a>
          </li>
          <li>
            <a href="/devis">Devis</a>
          </li>
          <li>
            <a href="/contacter">Nous contacter</a>
          </li>

          @if ( Auth::check() && Auth::user()->admin == 1)

          <li>
            <em>{{ Auth::user()->name }} {{ Auth::user()->prenom }}</em>
            <ul>
              <li>
                <a href="{{ route('monProfil') }}">Mon profil</a>
              </li>
              <li>
                <a href="{{ route('adminDashboard') }}">Administration</a>
              </li>
              <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Se déconnecter
                </a>
              </li>
          </li>
          @elseif ( Auth::check() )
          <li>
            <em>{{ Auth::user()->name }} {{ Auth::user()->prenom }}</em>
            <ul>
              <li>
                <a href="{{ route('monProfil') }}">Mon profil</a>
              </li>
              <li>
                <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Se déconnecter
                </a>
              </li>
          </li>
          @else
          <li>
            Connexion
            <ul>
                <li><a  href="{{ route('login') }}">Se connecter</a></li>
                <li><a  href="{{ route('register') }}">S'enregistrer</a></li>
          </li>
          @endif

        </ul>
      </div>
      <!-- /.jumbotron -->

    </div>
    <!-- /.container -->
  @endsection