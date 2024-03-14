<div id="process-tab" class="hidden p-4">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Send Time
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($process as $process)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$process->email}}
                    </th>
                    <td class="px-6 py-4">
                        @if($process->status == 0)
                        <p class="text-yellow-400">Pending</p>
                        @elseif($process->status == 1)
                        <p class="text-green-400">Send</p>
                        @else
                        <p class="text-red-400">error</p>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        {{ \Carbon\Carbon::createFromTimestamp($process->send_time)->format('Y-m-d H:i:s') }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>