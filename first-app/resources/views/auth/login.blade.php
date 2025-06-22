<x-guest-layout>
    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf
        <div class="mb-12">
            <h1 class="text-slate-900 text-3xl font-semibold ml-32">Sign in</h1>
            <p class="text-slate-600 text-[15px] mt-6 leading-relaxed ml-20">Sign into your account.</p>
        </div>
        <div>
            <label class="text-slate-900 text-sm font-medium mb-2 block">Email</label>
            <div class="relative flex items-center">
                <input for="email" :value="__('Email')" name="email" type="email" required
                    class="w-full text-sm text-slate-900 border border-slate-300 pl-4 pr-10 py-3 rounded-lg outline-blue-600"
                    placeholder="Enter user name" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                    class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                    <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                    <path
                        d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                        data-original="#000000"></path>
                </svg>
            </div>
            <div class="mt-2">
                @if ($errors->has('email'))
                    <div class="text-red-600/100">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
        </div>

        <div>
            <label class="text-slate-900 text-sm font-medium mb-2 block">Password</label>
            <div x-data="{ show: true }" class="relative flex items-center">
                <input id="password" name="password" :type="show ? 'password' : 'text'" required
                    class="w-full text-sm text-slate-900 border border-slate-300 pl-4 pr-10 py-3 rounded-lg outline-blue-600"
                    placeholder="Enter password" />
                <button type="button" class="flex absolute inset-y-0 right-0 items-center pr-3" @click="show = !show"
                    :class="{ 'hidden': !show, 'block': show }">
                    <!-- Heroicon name: eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
                <button type="button" class="flex absolute inset-y-0 right-0 items-center pr-3" @click="show = !show"
                    :class="{ 'block': !show, 'hidden': show }">
                    <!-- Heroicon name: eye-slash -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </button>
            </div>
            <div class="mt-2">
                @if ($errors->has('password'))
                    <div class="text-red-600/100">
                        {{ $errors->first('password') }}
                @endif
            </div>
        </div>

        <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox"
                    class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-slate-300 rounded" />
                <label for="remember-me" class="ml-3 block text-sm text-slate-900">
                    Remember me
                </label>
            </div>
            <div class="text-sm">
                <a href="jajvascript:void(0);" class="text-blue-600 hover:underline font-medium">
                    Forgot your password?
                </a>
            </div>
            <div class="!mt-12">
                <button type="submit"
                    class="w-96 flex-auto shadow-xl py-2.5 px-4 text-[15px] font-medium tracking-wide rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                    Sign in
                </button>
                <p class="text-sm !mt-6 text-center text-slate-600">Don't have an account <a href="{{ route('register') }}"
                        class="text-blue-600 font-medium hover:underline ml-1 whitespace-nowrap">Register here</a></p>
            </div>
        </div>
    </form>
</x-guest-layout>
