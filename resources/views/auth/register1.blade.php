<x-guest-layout>

    @section('title')
     Register   
    @endsection

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <x-slot name="logo">
            <a href="/">
                <img class="w-20 h-20" src="{{ asset('img/')}} " alt="Logo">
            </a>
        </x-slot>
    
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
        <div
      class="flex flex-col md:flex-row space-y-10 md:space-y-0 md:space-x-10"
    >
      <div class="flex items-center justify-center">
        <img
          alt="A vibrant Betta fish with orange and blue fins swimming in dark water"
          class="rounded-lg shadow-lg"
          height="300"
          src="/img/regis-img.svg"
          width="400"
        />
      </div>
      <div class="bg-white p-10 rounded-lg shadow-lg w-full md:w-96">
        <h2
          class="text-3xl font-bold text-center tracking-widest bg-gradient-to-b from-blue-600 to-blue-900 text-transparent bg-clip-text mb-6"
        >
          Register
        </h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <input
                  class="w-full px-4 py-2 border border-blue-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                  placeholder="NIK"
                  type="text"
                  name="nik"
                />
            </div>
          <div class="mb-4">
            <input
              class="w-full px-4 py-2 border border-blue-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Full Name"
              type="text"
              name="name"
            />
          </div>
          <div class="mb-4">
            <input
              class="w-full px-4 py-2 border border-blue-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="E-mail"
              type="email"
              name="email"
            />
          </div>
          <div class="mb-4">
            <input
              class="w-full px-4 py-2 border border-blue-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Phone"
              type="tel"
              name="phone"
            />
          </div>
          <div class="mb-4 relative">
            <input
              class="w-full px-4 py-2 border border-blue-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10"
              placeholder="Password"
              type="password"
              id="password"
              name="password"
            required autocomplete="new-password"
            />
            <span
              id="togglePassword"
              onclick="togglePasswordVisibility()"
              class="absolute right-3 top-3 cursor-pointer"
              ><i id="toggle-icon-password" class="fas fa-eye"></i
            ></span>
          </div>
          <div class="mb-6 relative">
            <input
              class="w-full px-4 py-2 border border-blue-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10"
              placeholder="Confirm Password"
              type="password"
              id="confirmPassword"
              name="password_confirmation" required
            />
            <span
              id="toggleConfirmPassword"
              onclick="toggleConfirmPasswordVisibility()"
              class="absolute right-3 top-3 cursor-pointer"
              ><i id="toggle-icon-confirm" class="fas fa-eye"></i
            ></span>
          </div>
          <div class="mb-4">
            <button
              class="w-full px-4 py-2 text-white bg-gradient-to-b from-blue-600 to-blue-900 text-transparent rounded-lg focus:outline-none"
              type="submit"
            >
              Register
            </button>
          </div>
          <div class="text-center">
            <a class="text-blue-600" href="login"> Have account? Sign In </a>
          </div>
        </form>
      </div>
    </div>
</x-guest-layout>
