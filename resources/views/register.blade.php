<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <div class="min-w-0 flex items-center justify-center min-h-[calc(100vh-15rem)]">
        <fieldset class="fieldset bg-transparent w-xs border p-4">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Email</label>
            <input type="email" class="input bg-altgray rounded-none" placeholder="Email" />

            <label class="label">Password</label>
            <input type="password" class="input bg-altgray rounded-none" placeholder="Password" />

            <button class="btn bg-altgray mt-4 rounded-none">Register</button>
        </fieldset>
    </div>
</x-layout>