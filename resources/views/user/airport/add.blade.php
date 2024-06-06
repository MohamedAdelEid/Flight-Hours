@extends('layouts.admin.main')

@section('alerts')
    {{-- alert add AirCraft success --}}
    @if (Session::has('successCreate'))
        <script>
            iziToast.success({
                title: "{{ session('successCreate') }}",
                position: 'topRight',
            });
        </script>
    @endif
@endsection

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">

            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                اضافة مطار
            </h2>

            <div class="px-7 pt-8 pb-10 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="{{ route('airport.store') }}" method="POST">

                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-x-6 gap-y-4">

                        {{-- aircraft_name --}}
                        <label class="block text-xl">
                            <span class="text-gray-700 dark:text-white block mb-2">اسم المطار </span>
                            <input name="airport_name"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                        </label>

                        <label class="block text-xl">
                            <span class="text-gray-700 dark:text-white block mb-2">كود المطار </span>
                            <input name="airport_code"
                                   class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-400 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                        </label>
                    </div>

                    <button
                        class="px-9 py-3 mt-6 font-medium leading-5 text-white transition duration-200 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue focus:ring-2 focus:ring-offset-2 focus:ring-custom-blue">
                        إضافة
                    </button>

                </form>
            </div>

        </div>
    </main>
@endsection
