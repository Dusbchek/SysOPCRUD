@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-red-300  text-red-200 focus:border-red-500 focus:ring-red-400  hover:bg-neutral-800 rounded-md shadow-sm bg-stone-950']) }}>
