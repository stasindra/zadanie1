<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{route('profile.update')}}">
                        @method('PUT')
                        @csrf
                        <div class="gird gird-cols-2 gap-6">
                            <div class="gird gird-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{auth()->user()->name}}"  autofocus/>
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{auth()->user()->email}}" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                            {{ __('Update') }}
                            </x-button>
                            
                        </div>
                    </form>
                    <a href="{{route('profile.delet')}}"><button class="bth btn-del">Удалить</button></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
