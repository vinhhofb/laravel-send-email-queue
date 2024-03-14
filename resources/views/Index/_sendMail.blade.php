<div id="send-mail-tab" class="hidden p-4">
    <div class="content">
        <form method="post" action="{{url('send-mail')}}">
            @csrf
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customers</label>
            <select name="list_email[]" class="js-select2-multi" multiple="multiple">
                @foreach ($customers as $customer)
                <option value="{{$customer->customer_email}}">{{$customer->customer_name}} -
                    {{$customer->customer_email}}</option>
                @endforeach
            </select>
            @error('list_email')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
            <button type="submit"
                class="mt-3 mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send</button>
        </form>
    </div>
</div>
