<x-action-section submit="updateProfileInformation">
    <x-slot name="title">
        <h2 class="text-lg font-bold">
            {{ __('Update General Details') }}
        </h2>
    </x-slot>

    <x-slot name="description">
        <p class="text-sm text-gray-600">
            {{ __('View your general account details here. To make changes, please click the button below.') }}
        </p>
    </x-slot>

    <x-slot name="content">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Gender -->
            <div>
                <x-label :value="__('Gender')" />
                <p class="mt-1">{{ $user->gender == 1 ? 'Male' : ($user->gender == 2 ? 'Female' : 'N/A') }}</p>
            </div>

            <!-- Date of Birth -->
            <div>
                <x-label :value="__('Date of Birth')" />
                <p class="mt-1">{{ $user->dob ? $user->dob->format('Y-m-d') : 'N/A' }}</p>
            </div>

            <!-- Height -->
            <div>
                <x-label :value="__('Height')" />
                <p class="mt-1">{{ $user->height ? $user->height . ' cm' : 'N/A' }}</p>
            </div>
            <!-- Color -->
            <div>
                <x-label :value="__('Skin Color')" />
                <div class="flex items-center mt-1">
                    @if($user->color)
                        <!-- Display the color circle and its hex value -->
                        <span style="display:inline-block; width: 20px; height: 20px; background-color: {{$user->color}}; border-radius: 50%; margin-right: 8px;"></span>
                    @else
                        <span>N/A</span>
                    @endif
                </div>
            </div>



            <!-- Education -->
            <div>
                <x-label :value="__('Education')" />
                <p class="mt-1">{{ $user->education ?? 'N/A' }}</p>
            </div>

            <!-- Profession -->
            <div>
                <x-label :value="__('Profession')" />
                <p class="mt-1">{{ $user->profession ?? 'N/A' }}</p>
            </div>

            <!-- Income -->
            <div>
                <x-label :value="__('Income')" />
                <p class="mt-1">{{ $user->income ? '₹' . number_format($user->income) : 'N/A' }}</p>
            </div>

            <!-- Parents Details -->
            <div>
                <x-label :value="__('Parents Details')" />
                <p class="mt-1">{{ $user->parents_details ?? 'N/A' }}</p>
            </div>

            <!-- Siblings Details -->
            <div>
                <x-label :value="__('Siblings Details')" />
                <p class="mt-1">{{ $user->siblings_details ?? 'N/A' }}</p>
            </div>

            <!-- Other -->
            <div>
                <x-label :value="__('Other')" />
                <p class="mt-1">{{ $user->other ?? 'N/A' }}</p>
            </div>

            <!-- Miscellaneous -->
            <div>
                <x-label :value="__('Miscellaneous')" />
                <p class="mt-1">{{ $user->miscellaneous ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="mt-6">
            <x-button wire:click="redirectToEditPage">
                {{ __('Update Info') }}
            </x-button>
        </div>
    </x-slot>
</x-action-section>
