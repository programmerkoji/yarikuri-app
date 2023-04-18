<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <form action="{{ route('months.store') }}" method="post" class="lg:w-3/4 mx-auto devide devide-y">
                        @csrf
                        <div class="flex flex-col lg:flex-row gap-4">
                            <div class="w-full">
                                <label for="year" class="leading-7 text-sm text-gray-600">年（西暦）</label>
                                <input type="text" id="year" name="year" value="{{ old('year') }}" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                @error('year')
                                    <span class="block text-rose-700 mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="month" class="leading-7 text-sm text-gray-600">月</label>
                                <input type="text" id="month" name="month" value="{{ old('month') }}" class="w-full bg-white rounded border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                @error('month')
                                    <span class="block text-rose-700 mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button class="text-white bg-blue-500 border-0 mt-4 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">登録する</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
