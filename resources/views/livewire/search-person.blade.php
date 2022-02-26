<div>
    <div class='flex items-center justify-end mb-4'>
        <div class='w-1/4'>
            <form method="get">
                <input
                    class='w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                    type="text" placeholder="Search People" wire:model="term">
            </form>
        </div>
    </div>
    <!-- Table code -->
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @if($people->isEmpty())
            <div class="p-5">
                <div class="pt-5 pb-16 xl:mx-auto">
                    <div class="flex items-center justify-center flex-col-reverse w-full">
                        <div>
                            <div class="flex flex-col items-center max-w-sm">
                                <div class="text-center">
                                    <p class="text-lg font-normal">Manage people details</p>
                                </div>
                                <div class="mt-2 pb-1.5 text-center">
                                    <p class="text-xs">This is where you can manage your people information and view
                                        their
                                        purchase history.</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mt-4">
                                <div>
                                    <a href="{{ route('person.create') }}"
                                       class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                        Add person</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/customers-not-found.svg') }}"
                                 alt="Customers not found">
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        Father Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        Phone
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        City
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($people as $person)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">{{ $person->id }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">{{ $person->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div
                                                class="text-sm text-gray-900">{{ $person->father->name ?? 'No Data' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div
                                                class="text-sm text-gray-900">{{ $person->phone ?? 'No Data' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div
                                                class="text-sm text-gray-900">{{ $person->city }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex items-center justify-start space-x-1">
                                                <a href="{{ route('person.show', $person->id) }}"
                                                   class="hover:text-green-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2"
                                                         stroke-linecap="round"
                                                         stroke-linejoin="round" id="invoice-row-5036-preview-icon"
                                                         class="mx-1 feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </a>
                                                <a href="{{ route('person.edit', $person->id) }}"
                                                   class="hover:text-green-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2"
                                                         stroke-linecap="round"
                                                         stroke-linejoin="round" class="feather feather-edit">
                                                        <path
                                                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path
                                                            d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    @if(!$people->isEmpty())
        <div class='mt-4'>
            {{ $people->links() }}
        </div>
    @endif
</div>
