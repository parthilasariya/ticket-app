<x-layouts.app :title="__('Tickets')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-bold mb-4 text-red-700 dark:text-white">Ticket Management</h1>
        
        <div class="flex gap-4">
            <!-- Ticket Statistics -->
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Open Tickets</h3>
                <p class="text-3xl font-bold text-red-600 dark:text-red-400">24</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">Currently active tickets</p>
            </div>
            
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Resolved Today</h3>
                <p class="text-3xl font-bold text-green-600 dark:text-green-400">8</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">Tickets closed today</p>
            </div>
            
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Priority Issues</h3>
                <p class="text-3xl font-bold text-yellow-600 dark:text-yellow-400">3</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">High priority tickets</p>
            </div>
        </div>
        
        <!-- Recent Tickets Table -->
        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
            <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-gray-200">Recent Tickets</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">Ticket ID</th>
                            <th class="px-6 py-3">Subject</th>
                            <th class="px-6 py-3">Priority</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">#TK001</td>
                            <td class="px-6 py-4">Billing issue</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full dark:bg-red-900 dark:text-red-300">High</span></td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full dark:bg-yellow-900 dark:text-yellow-300">In Progress</span></td>
                            <td class="px-6 py-4">2 hours ago</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">#TK002</td>
                            <td class="px-6 py-4">Roming issue</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Medium</span></td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">Open</span></td>
                            <td class="px-6 py-4">4 hours ago</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">#TK003</td>
                            <td class="px-6 py-4">Unreturned equipment</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">Low</span></td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">Resolved</span></td>
                            <td class="px-6 py-4">1 day ago</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>
