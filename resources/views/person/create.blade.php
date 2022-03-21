<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Person') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="mt-10 sm:mt-0">
                    <div>
                        <div class="mt-4">
                            <form action="{{ route('person.store') }}" method="POST">
                                @csrf
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="name" class="block text-sm font-medium text-gray-700">Full
                                                    Name</label>
                                                <input type="text" name="name" id="name" value='{{ old('name') }}'
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <x-jet-input-error for="name" />
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="father_id" class="block text-sm font-medium text-gray-700">Father</label>
                                                <select id="father_id" name="father_id"
                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option>-- select father --</option>
                                                    @foreach($fathers as $father)
                                                        <option
                                                            value="{{ $father->id }}" @selected($father->id == request('father'))>{{ $father->id. ' | ' . $father->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="phone"
                                                       class="block text-sm font-medium text-gray-700">Phone</label>
                                                <input type="text" name="phone" id="phone" value='{{ old('phone') }}'
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <x-jet-input-error for="phone" />
                                            </div>

                                            <div class="col-span-6">
                                                <label for="bio"
                                                       class="block text-sm font-medium text-gray-700">Bio</label>
                                                <textarea id="bio" name="bio" rows="3"
                                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                          placeholder="Enter the bio of the Person">{{ old('bio') }}</textarea>
                                                <x-jet-input-error for="bio" />
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="caste"
                                                       class="block text-sm font-medium text-gray-700">Caste</label>
                                                <input type="text" name="caste" id="caste" value='{{ old('caste') }}'
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <x-jet-input-error for="caste" />
                                            </div>
                                            <div class="col-span-6">
                                                <label for="address"
                                                       class="block text-sm font-medium text-gray-700">Street
                                                    address</label>
                                                <input type="text" name="address" id="address"
                                                       value='{{ old('address') }}'
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <x-jet-input-error for="address" />

                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="city"
                                                       class="block text-sm font-medium text-gray-700">City</label>
                                                <input type="text" name="city" id="city" autocomplete="address-level2"
                                                       value='{{ old('city') }}'
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <x-jet-input-error for="city" />

                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="country"
                                                       class="block text-sm font-medium text-gray-700">Country</label>
                                                <input type="text" name="country" id="country"
                                                       value='{{ old('country') }}'
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                <x-jet-input-error for="country" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Store
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
