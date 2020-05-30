<div>
    <div class="relative mb-5">
        <input wire:model="search" type="text" class="bg-gray-700 text-sm rounded-full focus:outline-none focus:shadow-outline w-64 px-3 py-1 pl-8" placeholder="Search Domains...">
        <div class="absolute top-0 flex items-center h-full ml-2">
            <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
        </div>
    </div>
    <table class="min-w-full">
        <thead>
        <tr>
            <th class="px-3 py-3 border-b border-gray-700 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Name
            </th>
            <th class="px-3 py-3 border-b border-gray-700 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Server Name
            </th>
            <th class="px-3 py-3 border-b border-gray-700 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                IP Address
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($domains as $d)
            <tr>
                <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-700">
                    <a href="{{ $d->link }}" target="_blank" class="text-sm leading-5 text-gray-500 hover:text-white">{{ $d->name }}</a>
                </td>
                <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-700">
                    <a href="{{ $d->server->link }}" target="_blank" class="text-sm leading-5 text-gray-500 hover:text-white">{{ $d->server->name }}</a>
                </td>
                <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-700">
                    <a href="{{ $d->server->link }}" target="_blank" class="text-sm leading-5 text-gray-500 hover:text-white">{{ $d->server->ip }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $domains->links() }}
</div>
