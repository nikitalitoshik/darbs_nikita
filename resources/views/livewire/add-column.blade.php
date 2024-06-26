<div>
    <x-secondary-button type="button" class="mt-2"  wire:click="$toggle('confirmingAddingColumn')">
        {{ __('Add Column') }}
    </x-secondary-button>
    <x-confirmation-modal wire:model="confirmingAddingColumn">
        <x-slot name="title">
            Add Column
        </x-slot>

        <x-slot name="content">
                <x-label for="title" value="{{ __('Title') }}" />
                <x-input wire:model="title" id="title" class="block mt-1 w-full" type="text" name="title"  required autofocus autocomplete="title" />
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingAddingColumn')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-button class="ml-2" wire:click="addColumn" wire:loading.attr="disabled">
                Add Column
            </x-button>
        </x-slot>
    </x-confirmation-modal>
</div>
