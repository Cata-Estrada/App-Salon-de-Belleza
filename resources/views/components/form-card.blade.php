<div class="max-w-lg mx-auto bg-white rounded-2xl shadow-lg p-6">

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-red-700">
            {{ $title }}
        </h2>

        <a href="{{ url()->previous() }}" class="text-gray-500 hover:text-black text-xl">
            ✕
        </a>
    </div>

    {{ $slot }}

</div>