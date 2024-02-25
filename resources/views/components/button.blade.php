<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2  transition ease-in-out duration-150 hover:bg-gray-700']) }} style="background-color:#ffffff; color:#bb95dc; border-radius:10%; ">
    {{ $slot }}
</button>
