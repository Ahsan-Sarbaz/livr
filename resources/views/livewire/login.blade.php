<div class="bg-white border-2 border-purple-300 rounded-xl w-1/3 p-10 shadow-lg">
    <h2 class="mb-5 font-bold text-purple-700 text-center text-3xl">Let's Login to your EasyTax account</h2>
    <form class="space-y-4" wire:submit.prevent="login">

        @if (session()->has('bad_login'))
            <div class="text-center">
                <span class="text-red-300 text-sm">{{ session('bad_login') }}</span>
            </div>
        @endif
        <div>
            <label for="email">Email</label>
            <input wire:model="email" class="w-full rounded-lg py-2 px-4 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-purple-300 transition
            @error('email')
                {{ "ring-2 ring-red-200" }}
            @enderror
            " type="text" name="email" id="email">
            @error('email') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password"> Password</label>
            <input wire:model="password" class="w-full rounded-lg py-2 px-4 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-purple-300 transition
            @error('password')
                {{ "ring-2 ring-red-200" }}
            @enderror
            " type="password" name="password" id="password">
            @error('password') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <button class="rounded-lg bg-purple-500 hover:bg-purple-700 transition w-full p-3 text-gray-200 hover:text-white">
                Log In
            </button>
        </div>

        <div class="text-center">
            <a href="/register" class="underline hover:text-purple-700 transition">
                Need and account? Register here
            </a>
        </div>
    </form>

</div>
