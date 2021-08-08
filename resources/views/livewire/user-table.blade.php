<div>

<div class="grid grid-cols-6 gap-6 mb-6">

    <div class="col-span-2">
        <label for="email-address" class="block text-sm font-medium text-gray-700">Search</label>
        <input wire:model="search" type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>
</div>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th wire:click="sortBy('name')" scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th wire:click="sortBy('email')" scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Email
                </th>
                <th wire:click="sortBy('created_at')" scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Created At
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">


                @foreach ($users as $user)
                <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                    <div>
                      <div class="text-sm font-medium text-gray-900">
                        {{ $user->name }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ $user->email }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $user->created_at->diffForHumans() }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
              </tr>
              @endforeach


            </tbody>
          </table>
        </div>
        <div class="mt-2">
            {!! $users->links() !!}
        </div>
      </div>
    </div>
  </div>

</div>
