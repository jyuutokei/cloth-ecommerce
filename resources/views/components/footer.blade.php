<footer class="{{ str_contains(url()->current(), "product") ? "hidden" : "block" }} relative bg-altgray p-60 mt-55">
    <div>
        <div>
            <p class="text-gray-500 mb-5 font-light">INFO</p>
            <ul>
                <li>ABOUT</li>
                <li>CONTACT</li>
            </ul>
        </div>
        <div class="mt-20">
            <p class="text-gray-500 mb-5 font-light">LANGUAGES</p>
            <ul>
                <li>ENG</li>
                <li>ESP</li>
                <li>SVE</li>
            </ul>
        </div>
    </div>
    <p class="text-xs text-gray-500 absolute bottom-0 left-1/2 -translate-x-1/2">@2024 -- Copyright</p>
</footer>