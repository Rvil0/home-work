@section("title-name")Изменить@endsection
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('update-info') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Имя')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ Auth::user()->name }}" required autofocus />
            </div>

            <!-- Surname -->
            <div>
                <x-label for="surname" :value="__('Фамилия')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" value="{{ Auth::user()->surname }}" required autofocus />
            </div>

            <div>
                <x-label for="aboutme" :value="__('О себе')" />

                <x-input id="aboutme" class="block mt-1 w-full" type="text" name="aboutme" value="{{ Auth::user()->aboutme }}" required autofocus />
            </div>


            <!-- number -->
            <div>
                <x-label for="number" :value="__('Номер')" />

                <x-input id="number" class="block mt-1 w-full" type="tel" name="number" value="{{ Auth::user()->number }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ Auth::user()->email }}" required />
            </div>
            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Изменить') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
