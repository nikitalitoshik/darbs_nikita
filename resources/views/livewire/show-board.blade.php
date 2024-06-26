<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Board') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mt-10 space-y-16 border-t border-gray-200 pt-10 p-2">
                <!-- Component Start -->
                <livewire:add-column :board="$board" ></livewire:add-column>
                <div
                    class="flex flex-col w-screen h-screen overflow-auto text-gray-700 bg-gradient-to-tr from-blue-200 via-indigo-200 to-pink-200">

                    <div class="flex flex-grow px-10 mt-4 space-x-6 overflow-auto">
                        @foreach($board->columns as $column)
                            <div class="flex flex-col flex-shrink-0 w-72">
                                <div class="flex items-center flex-shrink-0 h-10 px-2">
                                    <x-danger-button class="btn btn-sm " wire:click="deleteColumn('{{$column->id}}')"
                                                     wire:confirm="Are you sure you want to delete this column?">-
                                    </x-danger-button>

                                    <span class="ml-2 block text-sm font-semibold">{{$column->title}}</span>
                                    <livewire:add-task :key="$column->id" :column="$column" ></livewire:add-task>

                                </div>
                                <div class="flex flex-col pb-2 overflow-auto">
                                    @foreach($column->tasks as $task)
                                        <div
                                            class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100"
                                            draggable="true">
                                            <button
                                                class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                                </svg>
                                            </button>
                                            <h4 class="mt-3 text-sm font-medium">{{$task->title}}</h4>
                                            <div
                                                class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                                                <div class="flex items-center">
                                                    <svg class="w-4 h-4 text-gray-300 fill-current"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                         fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                              clip-rule="evenodd"/>
                                                    </svg>
                                                    <span
                                                        class="ml-1 leading-none">{{$task->created_at->diffForHumans()}}</span>
                                                </div>
                                                <div class="relative flex items-center ml-4">

                                                </div>

                                                <img class="w-6 h-6 ml-auto rounded-full"
                                                     src='https://randomuser.me/api/portraits/women/{{auth()->user()->id}}.jpg'/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        @endforeach

                        <div class="flex-shrink-0 w-6"></div>
                    </div>
                </div>
                <!-- Component End -->
            </div>
        </div>
    </div>
    <x-confirmation-modal wire:model="confirmingUserDeletion">
        <x-slot name="title">
            Add Column
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                Delete Account
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
