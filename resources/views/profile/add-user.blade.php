<x-main-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Fill User Information</h2>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="/add" method="POST" enctype="multipart/form-data" >
                @csrf
                {{-- @method('PUT') <!-- Use PUT method for updating --> --}}

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>

                        
                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                            <!-- Profile Photo File Input -->
                            <input type="file" id="photo"
                             class="hidden"
                                        wire:model.live="photo"
                                        name="profile_photo"
                                        x-ref="photo"
                                        x-on:change="
                                                photoName = $refs.photo.files[0].name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => {
                                                    photoPreview = e.target.result;
                                                };
                                                reader.readAsDataURL($refs.photo.files[0]);
                                        " />
            
                            <x-label for="photo" value="{{ __('Photo') }}" />
            
                            <!-- Current Profile Photo -->
                            <div class="mt-2" x-show="! photoPreview">
                                <img src="" alt="" class="rounded-full h-20 w-20 object-cover">
                            </div>
            
                            <!-- New Profile Photo Preview -->
                            <div class="mt-2" x-show="photoPreview" style="display: none;">
                                <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                      x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div>
            
                            <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A New Photo') }}
                            </x-secondary-button>
            
                            <x-input-error for="photo" class="mt-2" />
                        </div>
               
            
                                </div>
                                

                    {{-- Name --}}

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="profession" placeholder="Enter Your Name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Profile Picture --}}
                    {{-- <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="file" name="name" id="profession" placeholder="Enter Your Name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
                        @error('profession')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div> --}}

                    {{-- email --}}
                
                    <div class="mb-4">
                        <x-label for="email" value="{{ __('Phone No') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autocomplete="email" />
                        @error('email')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="hidden ">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" value="123456789" type="password" name="password" required autocomplete="new-password" />
                        @error('password')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <div class="hidden  ">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" value="123456789" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                    

                    <!-- Gender -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Gender</label>
                        <div class="flex items-center mt-1">
                            <label class="mr-4">
                                <input type="radio" name="gender" value="1" class="mr-1">
                                Male
                            </label>
                            <label>
                                <input type="radio" name="gender" value="2" class="mr-1">
                                Female
                            </label>
                        </div>
                        @error('gender')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Date of Birth -->
                    <div class="mb-4">
                        <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
                        @error('dob')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Height -->
                    <div class="mb-4">
                        <label for="height" class="block text-sm font-medium text-gray-700">Height (cm)</label>
                        <input type="number" name="height" id="height" placeholder="180" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"  >
                        @error('height')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Skin Color -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Skin Color</label>
                        <div class="flex items-center space-x-2 mt-2">
                            @php
                                $skinColors = [
                                    '#FFDFC4' => 'Light',
                                    '#F0D5BE' => 'Light Medium',
                                    '#E1B899' => 'Medium',
                                    '#C68642' => 'Tan',
                                    '#8D5524' => 'Dark Tan',
                                    '#7D491F' => 'Dark',
                                    '#5F3216' => 'Very Dark'
                                ];
                            @endphp
                            @foreach ($skinColors as $hex => $label)
                                <label class="relative inline-block cursor-pointer">
                                    <input type="radio" name="color" value="{{ $hex }}" class="sr-only peer">
                                    <div class="w-8 h-8 rounded-full" style="background-color: {{ $hex }};"></div>
                                    <div class="absolute inset-0 w-8 h-8 rounded-full border-2 peer-checked:border-blue-500"></div>
                                </label>
                            @endforeach
                        </div>
                        @error('color')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Profession -->
                    <div class="mb-4">
                        <label for="profession" class="block text-sm font-medium text-gray-700">Profession</label>
                        <input type="text" name="profession" id="profession" placeholder="Enter about your profession" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
                        @error('profession')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Income -->
                    <div class="mb-4">
                        <label for="income" class="block text-sm font-medium text-gray-700">Income</label>
                        <input type="number" name="income" id="income" placeholder="10000" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
                        @error('income')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Education -->
                    <div class="mb-4">
                        <label for="education" class="block text-sm font-medium text-gray-700">Education</label>
                        <input type="text" name="education" id="income" placeholder="Enter about your education" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"  >
                        @error('education')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Parents Details -->
                    <div class="mb-4">
                        <label for="parents_details" class="block text-sm font-medium text-gray-700">Parents' Details</label>
                        <textarea name="parents_details" id="parents_details" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter details about parents"></textarea>
                        @error('parents_details')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Siblings Details -->
                    <div class="mb-4">
                        <label for="siblings_details" class="block text-sm font-medium text-gray-700">Siblings' Details</label>
                        <textarea name="siblings_details" id="siblings_details" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter details about siblings"></textarea>
                        @error('siblings_details')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Other -->
                    <div class="mb-4">
                        <label for="other" class="block text-sm font-medium text-gray-700">Other</label>
                        <textarea name="other" id="other" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter any other information"></textarea>
                        @error('other')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Miscellaneous -->
                    <div class="mb-4">
                        <label for="miscellaneous" class="block text-sm font-medium text-gray-700">Miscellaneous</label>
                        <textarea name="miscellaneous" id="miscellaneous" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Additional notes or details"></textarea>
                        @error('miscellaneous')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Add Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-main-layout>
