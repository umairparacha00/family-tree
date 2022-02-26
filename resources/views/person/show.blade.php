<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Person') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class='flex items-center justify-between px-4 py-5 sm:px-6'>
                    <div>
                        <h3 class="text-lg leading-6 font-bold text-gray-900">Details</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details about person.</p>
                    </div>
                    <div>
                        <a href='{{ route('person.edit', $person->id) }}' class='inline-flex items-center px-4 py-2 bg-gray-800
                           border border-transparent rounded-md font-semibold text-xs text-white uppercase
                           tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900
                           focus:ring focus:ring-gray-300 disabled:opacity-25 transition'>Edit Details</a>
                    </div>
                </div>
                <div class="border-t border-gray-200">
                    <div class="divide-y divide-slate-200">
                        <div class="bg-bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <div class="text-sm font-bold text-gray-900">Full name</div>
                            <div class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $person->name }}
                            </div>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <div class="text-sm font-bold text-gray-900">Father name</div>
                            <div
                                class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $person->father->name ?? 'No Data' }}
                            </div>
                        </div>
                        <div class="bg-bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <div class="text-sm font-bold text-gray-900">Phone</div>
                            <div
                                class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $person->phone ?? 'No Data' }}
                            </div>
                        </div>
                        <div class="bg-bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <div class="text-sm font-bold text-gray-900">Caste</div>
                            <div class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $person->caste }}
                            </div>
                        </div>
                        <div class="bg-bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <div class="text-sm font-bold text-gray-900">Bio</div>
                            <div class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $person->bio }}
                            </div>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <div class="text-sm font-bold text-gray-900">City</div>
                            <div class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $person->city }}
                            </div>
                        </div>
                        <div class="bg-bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <div class="text-sm font-bold text-gray-900">country</div>
                            <div class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $person->country }}
                            </div>
                        </div>
                        <div class="bg-bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <div class="text-sm font-bold text-gray-900">Address</div>
                            <div class="mt-1 text-sm text-gray-500 sm:mt-0 sm:col-span-2">{{ $person->address }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-6">
                <div class='px-4 py-5 sm:px-6'>
                    <div>
                        <h3 class="text-lg leading-6 font-bold text-gray-900">Children</h3>
                    </div>
                </div>
                <div class="border-t border-gray-200">
                    <div class='px-4 py-5 sm:px-6'>
                        @include('person.tree', ['person' => $person])
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
