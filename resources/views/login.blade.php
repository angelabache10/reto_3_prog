<x-layout.app-alt title="Iniciar Sesión">
  <body class="hold-transition login-page">
    <div class="overlay"></div>
    <div class="login-box my-3">
      <div class="bg-white rounded-circle logo-container my-2 shadow">
        <img width="60" height="60" src="{{ asset('img/logo-upta.png') }}">
      </div>
      <div class="login-logo">
        <h1 class="font-weight-normal text-white">Iniciar Sesión</h1>
      </div>
      <div class="card">
        @if(session('status'))
          <div class="alert alert-primary mb-0" role="alert">
            {{ __(session('status')) }}
          </div>
        @endif
        @if(session('registered'))
          <div class="alert alert-success m-0" role="alert">
            {{ session('registered') }}
          </div>
        @endif
        <div class="card-body login-card-body">
          <form action="{{ route('auth') }}" method="POST">
            @csrf
            @error('email')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            <x-input-group type="email" name="email" id="email" placeholder="Correo Electrónico" value="admin@example.com">
              <x-slot name="append">
                <span class="input-group-text">
                  <i class="fa fa-user"></i>
                </span>
              </x-slot>
            </x-input-group>
            <x-input-group type="password" name="password" id="password" placeholder="Contraseña" value="Admin20.">
              <x-slot name="append">
                <span class="input-group-text">
                  <i class="fa fa-key"></i>
                </span>
              </x-slot>
            </x-input-group>
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</x-layout.app-alt>