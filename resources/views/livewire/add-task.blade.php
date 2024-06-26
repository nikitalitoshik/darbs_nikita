<div>
    <button wire:click="$toggle('confirmingAddingTask')"
            class="flex items-center justify-center w-6 h-6 ml-auto text-indigo-500 rounded hover:bg-indigo-500 hover:text-indigo-100">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
    </button>

    <x-confirmation-modal wire:model="confirmingAddingTask">
        <x-slot name="title">
            Add Column
        </x-slot>

        <x-slot name="content">
            <x-label for="title" value="{{ __('Title') }}" />
            <x-input wire:model="title" id="title" class="block mt-1 w-full" type="text" name="title"  required autofocus autocomplete="title" />

            <div class="col-span-6 sm:col-span-4">
                <x-label for="name" value="{{ __('Content') }}" />
                <textarea wire:model="content" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  ref="input"></textarea>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingAddingTask')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-button class="ml-2" wire:click="addTask" wire:loading.attr="disabled">
                Add Task
            </x-button>
        </x-slot>
    </x-confirmation-modal>
</div>
