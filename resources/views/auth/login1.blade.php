<x-guest-layout>

    @section('title')
     Login   
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
          <div class="flex justify-center">
            <img
              alt="Scenic view of a rocky landscape with a clear sky"
              class="rounded-lg shadow-lg w-full max-w-md"
              src="/img/login-img.svg"
            />
          </div>
          <div class="bg-white p-10 rounded-lg shadow-lg w-full max-w-md mx-auto">
            <h2
              class="text-3xl font-bold text-center tracking-widest bg-gradient-to-b from-blue-600 to-blue-900 text-transparent bg-clip-text mb-6 text-center"
            >
              Login
            </h2>
            <form method="POST" action="{{ route('login') }}">
                
                @csrf
              <div class="mb-4">
                <input
                  class="w-full px-4 py-2 border border-blue-600 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600"
                  placeholder="Email"
                  name="email"
                  type="text"
                />
              </div>
              <div class="mb-6 relative">
                <input
                  id="password"
                  class="w-full px-4 py-2 border border-blue-600 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600"
                  placeholder="Password"
                  name="password"
                  type="password"
                />
                <span
                  class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                  onclick="togglePasswordVisibility()"
                >
                  <i id="toggle-icon" class="fas fa-eye"></i>
                </span>
              </div>
              <div class="text-center">
                <button
                  class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-full text-white bg-gradient-to-b from-blue-600 to-blue-900 text-transparent"
                  type="submit"
                >
                  LOGIN
                </button>
              </div>
            </form>
          </div>
        </div>
    </div>



    <script>
      function togglePasswordVisibility() {
        const passwordInput = document.getElementById("password");
        const toggleIcon = document.getElementById("toggle-icon");
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          toggleIcon.classList.remove("fa-eye");
          toggleIcon.classList.add("fa-eye-slash");
        } else {
          passwordInput.type = "password";
          toggleIcon.classList.remove("fa-eye-slash");
          toggleIcon.classList.add("fa-eye");
        }
      }
    </script>
</x-guest-layout>
