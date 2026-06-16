<label {{ $attributes->merge(['class' => 'input bg-[#d9d9d9] rounded-none w-full md:max-w-sm']) }}>
    <svg class="h-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none" stroke="currentColor">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.3-4.3"></path>
        </g>
    </svg>
    <input type="search" required placeholder="Search" class="placeholder:text-right" />
</label>