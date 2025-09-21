<x-layouts.app :title="__('Dashboard')">
    
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-bold mb-4 text-red-700 dark:text-white">Welcome to your Dashboard Lounge!</h1>
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                <!-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> -->
                <div class="relative z-10 h-full flex flex-col justify-center">
                    <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Agent Info</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                <!-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> -->
                <div class="relative z-10 h-full flex flex-col justify-center">
                    <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Quick Stats</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
               <!-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> -->
                <div class="relative z-10 h-full flex flex-col justify-center">
                    <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Notifications</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-6">
            <!-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> -->
            <div class="relative z-10 h-full flex flex-col">
                <h3 class="text-lg font-bold mb-2 text-gray-800 dark:text-gray-200">Main Content Area</h3>
                <div class="flex-1 overflow-y-auto">
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">
                        Esse nostrud commodo non dolor eiusmod ad cillum ad. Nulla esse ad magna laborum ullamco excepteur excepteur velit 
                        Lorem qui duis. Aute velit eiusmod pariatur pariatur cillum enim dolore mollit excepteur quis. Mollit ut nisi incididunt quis aute veniam nulla minim.
                    </p>
                    <p class="text-gray-700 dark:text-gray-300">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                        qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-6">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>
