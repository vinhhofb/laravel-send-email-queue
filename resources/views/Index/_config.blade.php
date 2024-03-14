<div id="config-tab" class="p-4">
    <form action="{{url('mail-config/add')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mail
                Server</label>
            <input id="mail-server"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@flowbite.com" name="mail_server" value="{{$mailConfig->mail_server}}">
            @error('mail_server')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gate</label>
            <input id="gate"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="gate" value="{{$mailConfig->gate}}">
            @error('gate')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="email" value="{{$mailConfig->email}}">
            @error('email')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="password" value="{{$mailConfig->password}}">
            @error('password')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
    </form>
</div>