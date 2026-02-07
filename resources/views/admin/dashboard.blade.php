<x-app-layout>
    <x-slot:heading>
        Dashboard
    </x-slot:heading>

<div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100 whitespace-nowrap">
          <tr>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider">
              Name
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider">
              Email
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider">
              Role
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider">
              Joined At
            </th>
            <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider">
              Actions
            </th>
          </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
          <tr>
            <td class="px-4 py-4 text-sm text-slate-900 font-medium">
              John Doe
            </td>
            <td class="px-4 py-4 text-sm text-slate-600 font-medium">
              john@example.com
            </td>
            <td class="px-4 py-4 text-sm text-slate-600 font-medium">
              Admin
            </td>
            <td class="px-4 py-4 text-sm text-slate-600 font-medium">
              2022-05-15
            </td>
            <td class="px-4 py-4 text-sm">
              <button class="cursor-pointer text-blue-600 font-medium mr-4">Edit</button>
              <button class="cursor-pointer text-red-600 font-medium">Delete</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

</x-app-layout>
