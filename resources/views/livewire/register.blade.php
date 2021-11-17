<div class="bg-white border-2 border-purple-300 rounded-xl w-1/3 p-10 shadow-lg">
    <h2 class="mb-5 font-bold text-purple-700 text-center text-3xl">Let's Register your EasyTax account</h2>
    <form class="space-y-4" wire:submit.prevent="register">
        <div>
            <label for="first_name">First Name</label>
            <input wire:model="first_name" class="w-full rounded-lg py-2 px-4 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-purple-300 transition
            @error('first_name')
                {{ "ring-2 ring-red-200" }}
            @enderror
            " type="text" name="first_name" id="first_name">
            @error('first_name') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input wire:model="last_name" class="w-full rounded-lg py-2 px-4 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-purple-300 transition
            @error('last_name')
                {{ "ring-2 ring-red-200" }}
            @enderror
            " type="text" name="last_name" id="last_name">
            @error('last_name') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
        </div>

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
            <label for="passwordConfirmation">Confirm Password</label>
            <input wire:model="password_confirmation" class="w-full rounded-lg py-2 px-4 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-purple-300 transition
            @error('password')
                {{ "ring-2 ring-red-200" }}
            @enderror
            " type="password" name="passwordConfirmation" id="passwordConfirmation">
            @error('password') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="text-center">
            <input wire:model="agreeTerms" class="rounded-lg py-2 px-4 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-purple-300 transition
            @error('password')
            {{ "ring-2 ring-red-200" }}
            @enderror
            " type="checkbox" name="terms" id="terms">
            <label for="terms">I accept the <a href="#" class="underline text-blue-600">terms, conditions and privacy policy</a> of EasyTax </label>
            @error('agreeTerms') <span  class="block text-red-300 text-sm">{{ $message }}</span> @enderror
        </div>


        <div>
            <button class="rounded-lg bg-purple-500 hover:bg-purple-700 transition w-full p-3 text-gray-200 hover:text-white">
                Sign Up
            </button>
        </div>

        <div class="text-center">
            <a href="/login" class="underline hover:text-purple-700 transition">
                Already have an account? Log In here
            </a>
        </div>
    </form>

</div>
