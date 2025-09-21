<x-layouts.app :title="__('Analytics')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <h1 class="text-2xl font-bold mb-4 text-red-700 dark:text-white">Analytics</h1>
        
        <div class="flex gap-4">
            <!-- Key Metrics -->
            <div class="flex-1 rounded-lg  border border-gray-200 dark:border-gray-700 p-6 text-gray-800 bg-gray-200 dark:text-gray-200 dark:bg-gray-700">
                <h3 class="text-lg font-semibold mb-2">Total Tickets</h3>
                <p class="text-3xl font-bold">1,247</p>
                <p class="text-sm opacity-80">+12% from last month</p>
            </div>
            
            <div class="flex-1 rounded-lg  border border-gray-200 dark:border-gray-700 p-6 text-gray-800 bg-gray-200 dark:text-gray-200 dark:bg-gray-700">
                <h3 class="text-lg font-semibold mb-2">Resolution Rate</h3>
                <p class="text-3xl font-bold">94.2%</p>
                <p class="text-sm opacity-80">+2.1% from last month</p>
            </div>
            
            <div class="flex-1 rounded-lg border border-gray-200 dark:border-gray-700 p-6 text-gray-800 bg-gray-200 dark:text-gray-200 dark:bg-gray-700">
                <h3 class="text-lg font-semibold mb-2">Avg. Handle Time</h3>
                <p class="text-3xl font-bold">18 min</p>
                <p class="text-sm opacity-80">-5 min from last month</p>
            </div>
            
            <div class="flex-1 rounded-lg border border-gray-200 dark:border-gray-700 p-6 text-gray-800 bg-gray-200 dark:text-gray-200 dark:bg-gray-700">
                <h3 class="text-lg font-semibold mb-2">Customer Satisfaction</h3>
                <p class="text-3xl font-bold">4.8/5</p>
                <p class="text-sm opacity-80">+0.2 from last month</p>
            </div>
        </div>
        
        <!-- Charts Section -->
        <div class="flex gap-4 md:grid-cols-2">
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-gray-200">Ticket Volume Trends</h3>
                <div class="h-64 flex items-center justify-center bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <p class="text-gray-500 dark:text-gray-400">Chart visualization would be here</p>
                </div>
            </div>
            
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-gray-200">Category Distribution</h3>
                <div class="h-64 flex items-center justify-center bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <p class="text-gray-500 dark:text-gray-400">Pie chart would be here</p>
                </div>
            </div>
        </div>
        
        <!-- Performance Summary -->
        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
            <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-gray-200">Team Performance</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">Agent Name</th>
                            <th class="px-6 py-3">Tickets Resolved</th>
                            <th class="px-6 py-3">Avg. Response Time</th>
                            <th class="px-6 py-3">Customer Rating</th>
                            <th class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">John Doe</td>
                            <td class="px-6 py-4">142</td>
                            <td class="px-6 py-4">1.8h</td>
                            <td class="px-6 py-4">4.9/5</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">Active</span></td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Mike Chen</td>
                            <td class="px-6 py-4">128</td>
                            <td class="px-6 py-4">2.1h</td>
                            <td class="px-6 py-4">4.7/5</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">Active</span></td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Sam Khan</td>
                            <td class="px-6 py-4">134</td>
                            <td class="px-6 py-4">2.0h</td>
                            <td class="px-6 py-4">4.8/5</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Away</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>
