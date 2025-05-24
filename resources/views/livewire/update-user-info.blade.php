<x-form-section submit="updateUserInformation">
    <x-slot name="title">
        {{ __('Additional Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update additional details about your profile.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Gender Radio Buttons -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="gender" value="{{ __('Gender') }}" />
            <div class="mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" value="1" wire:model.defer="state.gender" class="form-radio">
                    <span class="ml-2">{{ __('Male') }}</span>
                </label>
                <label class="inline-flex items-center ml-4">
                    <input type="radio" name="gender" value="2" wire:model.defer="state.gender" class="form-radio">
                    <span class="ml-2">{{ __('Female') }}</span>
                </label>
            </div>
            <x-input-error for="gender" class="mt-2" />
        </div>


        <!-- Date of Birth -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="dob" value="{{ __('Date of Birth') }}" />
            <x-input id="dob" type="date" class="mt-1 block w-full" wire:model.defer="state.dob" />

            <x-input-error for="dob" class="mt-2" />
        </div>





        <!-- Height -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="height" value="{{ __('Height (in cm)') }}" />
            <x-input id="height" type="number" step="0.01" class="mt-1 block w-full" wire:model="state.height"  />
            <x-input-error for="height" class="mt-2" />
        </div>

        <!-- Skin Color Swatches -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="color" value="{{ __('Skin Color') }}" />

            <div class="mt-1 flex space-x-2">
                <!-- Swatch 1 -->
                <button
                    type="button"
                    class="w-10 h-10 relative rounded-full border-2"
                    style="background-color: #FFDFC4;"
                    wire:click="$set('state.color', '#FFDFC4')"
                    class="{{ $state['color'] === '#FFDFC4' ? 'border-4 border-green-500' : '' }}">
                    @if($state['color'] === '#FFDFC4')
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414-1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </button>

                <!-- Swatch 2 -->
                <button
                    type="button"
                    class="w-10 h-10 relative rounded-full border-2"
                    style="background-color: #F0D5BE;"
                    wire:click="$set('state.color', '#F0D5BE')"
                    class="{{ $state['color'] === '#F0D5BE' ? 'border-4 border-green-500' : '' }}">
                    @if($state['color'] === '#F0D5BE')
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414-1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </button>

                <!-- Swatch 3 -->
                <button
                    type="button"
                    class="w-10 h-10 relative rounded-full border-2"
                    style="background-color: #E1B899;"
                    wire:click="$set('state.color', '#E1B899')"
                    class="{{ $state['color'] === '#E1B899' ? 'border-4 border-green-500' : '' }}">
                    @if($state['color'] === '#E1B899')
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414-1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </button>

                <!-- Swatch 4 -->
                <button
                    type="button"
                    class="w-10 h-10 relative rounded-full border-2"
                    style="background-color: #C68642;"
                    wire:click="$set('state.color', '#C68642')"
                    class="{{ $state['color'] === '#C68642' ? 'border-4 border-green-500' : '' }}">
                    @if($state['color'] === '#C68642')
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414-1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </button>

                <!-- Swatch 5 -->
                <button
                    type="button"
                    class="w-10 h-10 relative rounded-full border-2"
                    style="background-color: #8D5524;"
                    wire:click="$set('state.color', '#8D5524')"
                    class="{{ $state['color'] === '#8D5524' ? 'border-4 border-green-500' : '' }}">
                    @if($state['color'] === '#8D5524')
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414-1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </button>

                <!-- Swatch 6 -->
                <button
                    type="button"
                    class="w-10 h-10 relative rounded-full border-2"
                    style="background-color: #7D491F;"
                    wire:click="$set('state.color', '#7D491F')"
                    class="{{ $state['color'] === '#7D491F' ? 'border-4 border-green-500' : '' }}">
                    @if($state['color'] === '#7D491F')
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414-1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </button>


                <!-- Swatch 7 -->
                <button
                    type="button"
                    class="w-10 h-10 relative rounded-full border-2"
                    style="background-color: #5F3216;"
                    wire:click="$set('state.color', '#5F3216')"
                    class="{{ $state['color'] === '#5F3216' ? 'border-4 border-green-500' : '' }}">
                    @if($state['color'] === '#5F3216')
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414-1.414l-7 7a1 1 0 01-1.414 0l-3-3a1 1 0 00-1.414 1.414l3.707 3.707a1 1 0 001.414 0l7.707-7.707z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </button>

            </div>

            <x-input-error for="color" class="mt-2" />
        </div>
        
{{--        @php--}}
{{--            dd($state); // Dumps the array and stops execution--}}
{{--        @endphp--}}


            <!-- Education -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="education" value="{{ __('Education') }}" />
            <x-input id="education" class="mt-1 block w-full" wire:model="state.education" />
            <x-input-error for="education" class="mt-2" />
        </div>
        <!-- Profession -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="profession" value="{{ __('Profession') }}" />
            <div class="mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" name="profession" value="1" wire:model.defer="state.profession" class="form-radio">
                    <span class="ml-2">{{ __('Business') }}</span>
                </label>
                <label class="inline-flex items-center ml-4">
                    <input type="radio" name="profession" value="2" wire:model.defer="state.profession" class="form-radio">
                    <span class="ml-2">{{ __('Government') }}</span>
                </label>
            </div>
            <x-input-error for="profession" class="mt-2" />
        </div>


        <!-- Income -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="income" value="{{ __('Annual Income') }}" />
            <x-input id="income" type="number" step="0.01" class="mt-1 block w-full" wire:model="state.income"  />
            <x-input-error for="income" class="mt-2" />
        </div>

        <!-- Parents Details -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="parents_details" value="{{ __('Parents Details') }}" />
            <x-input id="parents_details" class="mt-1 block w-full" wire:model="state.parents_details" />
            <x-input-error for="parents_details" class="mt-2" />
        </div>

        <!-- Siblings Details -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="siblings_details" value="{{ __('Siblings Details')}}" />
            <x-input id="siblings_details" class="mt-1 block w-full" wire:model="state.siblings_details" />
            <x-input-error for="siblings_details" class="mt-2" />
        </div>

        <!-- Other -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="other" value="{{ __('Other Details') }}" />
            <x-input id="other" type="text" class="mt-1 block w-full" wire:model="state.other" />
            <x-input-error for="other" class="mt-2" />
        </div>

        <!-- Miscellaneous -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="miscellaneous" value="{{ __('Miscellaneous Details') }}" />
            <x-input id="miscellaneous" type="text" class="mt-1 block w-full" wire:model="state.miscellaneous" />
            <x-input-error for="miscellaneous" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
    <!-- Add this at the end of your Blade file or in a separate JavaScript file -->
    <script>
        document.addEventListener('livewire:load', function () {
            flatpickr('#dob', {
                dateFormat: 'Y-m-d', // This will ensure the date is formatted as yyyy-MM-dd
                onChange: function(selectedDates, dateStr, instance) {
                @this.set('state.dob', dateStr); // Update Livewire state with the correctly formatted date
                }
            });
        });
    </script>

</x-form-section>
