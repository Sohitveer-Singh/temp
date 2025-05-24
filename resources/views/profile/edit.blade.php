<x-main-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit User Information</h2>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="" method="POST">
                @csrf
                @method('PUT') <!-- Use PUT method for updating -->

                

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Gender -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Gender</label>
                        <div class="flex items-center mt-1">
                            <label class="mr-4">
                                <input type="radio" name="gender" value="1" {{ $user->gender == 1 ? 'checked' : '' }} class="mr-1">
                                Male
                            </label>
                            <label>
                                <input type="radio" name="gender" value="2" {{ $user->gender == 2 ? 'checked' : '' }} class="mr-1">
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
                        <input type="date" name="dob" id="dob" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('dob', $user->dob ? $user->dob->format('Y-m-d') : '') }}">
                        @error('dob')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Height -->
                    <div class="mb-4">
                        <label for="height" class="block text-sm font-medium text-gray-700">Height (cm)</label>
                        <input type="number" name="height" id="height" placeholder="180" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('height', $user->height) }}" >
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
                                    <input type="radio" name="color" value="{{ $hex }}" {{ $user->color == $hex ? 'checked' : '' }} class="sr-only peer">
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
                        <input type="text" name="profession" id="profession" placeholder="Enter about your profession" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('profession', $user->profession) }}" >
                        @error('profession')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Income -->
                    <div class="mb-4">
                        <label for="income" class="block text-sm font-medium text-gray-700">Income</label>
                        <input type="number" name="income" id="income" placeholder="10000" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('income', $user->income) }}" >
                        @error('income')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Education -->
                    <div class="mb-4">
                        <label for="education" class="block text-sm font-medium text-gray-700">Education</label>
                        <input type="text" name="education" id="income" placeholder="Enter about your education" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('education', $user->education) }}" >
                        @error('education')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Parents Details -->
                    <div class="mb-4">
                        <label for="parents_details" class="block text-sm font-medium text-gray-700">Parents' Details</label>
                        <textarea name="parents_details" id="parents_details" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter details about parents">{{ old('parents_details', $user->parents_details) }}</textarea>
                        @error('parents_details')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Siblings Details -->
                    <div class="mb-4">
                        <label for="siblings_details" class="block text-sm font-medium text-gray-700">Siblings' Details</label>
                        <textarea name="siblings_details" id="siblings_details" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter details about siblings">{{ old('siblings_details', $user->siblings_details) }}</textarea>
                        @error('siblings_details')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Other -->
                    <div class="mb-4">
                        <label for="other" class="block text-sm font-medium text-gray-700">Other</label>
                        <textarea name="other" id="other" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Enter any other information">{{ old('other', $user->other) }}</textarea>
                        @error('other')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Miscellaneous -->
                    <div class="mb-4">
                        <label for="miscellaneous" class="block text-sm font-medium text-gray-700">Miscellaneous</label>
                        <textarea name="miscellaneous" id="miscellaneous" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Additional notes or details">{{ old('miscellaneous', $user->miscellaneous) }}</textarea>
                        @error('miscellaneous')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update Info
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-main-layout>
