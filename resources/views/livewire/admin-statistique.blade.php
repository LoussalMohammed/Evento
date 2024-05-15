<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="flex justify-between mb-6">
                    <div>
                        <div class="flex items-center mb-1">
                            <div class="text-2xl font-semibold">{{ $users }}</div>
                        </div>
                        <div class="text-sm font-medium text-gray-400">Users</div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="flex justify-between mb-4">
                    <div>
                        <div class="flex items-center mb-1">
                            <div class="text-2xl font-semibold">{{ $event }}</div>
                        </div>
                        <div class="text-sm font-medium text-gray-400">
                            <h4>Events</h4>
                        </div>
                    </div>

                </div>
            </div>
            <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="flex justify-between mb-6">
                    <div>
                        <div class="text-2xl font-semibold mb-1">{{ $category }}</div>
                        <div class="text-sm font-medium text-gray-400">Category</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
