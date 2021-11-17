<div class="bg-white border-2 border-purple-300 rounded-xl w-1/3 p-10 shadow-lg">
    <h2 class="mb-5 font-bold text-purple-700 text-center text-3xl">Update your Profile</h2>


    @if (session()->has('error'))
        <div class="text-center">
            <span class="text-red-300 text-sm">{{ session('error') }}</span>
        </div>
    @endif

    @if (session()->has('updated'))
        <div class="text-center">
            <span class="text-green-300 text-sm">{{ session('updated') }}</span>
        </div>
    @endif

    <form class="space-y-4" wire:submit.prevent="update">
        <div>
            <label for="first_name">First Name</label>
            <input wire:model="user.first_name" class="w-full rounded-lg py-2 px-4 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-purple-300 transition
            @error('first_name')
                {{ "ring-2 ring-red-200" }}
            @enderror
            " type="text" name="first_name" id="first_name">
            @error('first_name') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input wire:model="user.last_name" class="w-full rounded-lg py-2 px-4 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-purple-300 transition
            @error('last_name')
                {{ "ring-2 ring-red-200" }}
            @enderror
            " type="text" name="last_name" id="last_name">
            @error('last_name') <span class="text-red-300 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- <div>
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
        </div> --}}



        <div>
            <button class="rounded-lg bg-purple-500 hover:bg-purple-700 transition w-full p-3 text-gray-200 hover:text-white">
                Update
            </button>
        </div>

    </form>

</div>
