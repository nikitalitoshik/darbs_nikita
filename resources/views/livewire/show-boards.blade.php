<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Boards') }}
    </h2>
</x-slot>

<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mt-10 space-y-16 border-t border-gray-200 pt-10">
                <x-secondary-button type="button" class="mt-2" wire:click="addBoard">
                    {{ __('Add Board') }}
                </x-secondary-button>
                @forelse($this->boards as $board)
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="{{route('boards.show',$board)}}">
                                    <span class="absolute inset-0"></span>
                                    {{ $board->name }}
                                </a>
                            </h3>
                        </div>
                    </article>
                @empty
                    <p>No Boards Found</p>
                @endforelse
                <!-- Load More -->
            </div>

        </div>
    </div>
</div>
