<div class="w-full sm:w-600 h-screen">
    <div class="w-full sm:w-600 h-screen">
        <div
            class="flex justify-between items-center border-b px-4 py-3 sticky top-0 bg-white dark:bg-dim-900 border-l border-r border-gray-200 dark:border-gray-700"
        >
            <h2 class="text-gray-800 dark:text-gray-100 font-bold font-sm">
                Notifications
            </h2>
        </div>

        <div wire:poll>
            @foreach($this->getNotifications() as $notification)
                <livewire:components.notification :notification="$notification" :key="$notification->id" />
            @endforeach
        </div>
    </div>
</div>
