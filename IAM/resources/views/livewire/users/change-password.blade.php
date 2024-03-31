<div class="container mx-auto px-4 bg-white min-w-full min-h-lvh">
    <form wire:submit.prevent="submit" class="mt-8 mb-4 max-w-lg bg-[#ebedef]  mx-auto px-5 py-4">
        <div class="mb-8 grid grid-cols-3 items-center gap-2">
            <label class="block text-gray-700 text-sm font-bold col-span-1" for="current_password">
                Current Password *
            </label>
            <div class="col-span-2">
                <input wire:model="currentPassword"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700
                    leading-tight focus:outline-none focus:shadow-outline"
                    id="current_password" type="password" placeholder="Current Password">
                @error('currentPassword')
                    <span class="text-red-500 block sm:inline text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-4 grid grid-cols-3 items-center gap-2">
            <label class="block text-gray-700 text-sm font-bold col-span-1" for="password">
                Password *
            </label>
            <div class="col-span-2">
                <input wire:model="password"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3
                    leading-tight focus:outline-none focus:shadow-outline col-span-2"
                    id="password" type="password" placeholder="Password">
                @error('password')
                    <span class="text-red-500 block text-xs sm:inline">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-4 grid grid-cols-3 items-center gap-2">
            <label class="block text-gray-700 text-sm font-bold col-span-1" for="password-confirmation">
                Password Confirmation *
            </label>
            <div class="col-span-2">
                <input wire:model="password_confirmation"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700
                    leading-tight focus:outline-none focus:shadow-outline col-span-2"
                    id="password-confirmation" type="password" placeholder="Confirm Password">
                @error('password_confirmation')
                    <span class="text-red-500 block text-xs sm:inline">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-4 grid grid-cols-3 items-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold
                py-2 px-2 rounded"
                type="submit">
                Submit
            </button>
        </div>
        @if ($successMessage)
            <div class="text-green-900 block sm:inline">
                {{ $successMessage }}
            </div>
        @endif
    </form>
</div>
