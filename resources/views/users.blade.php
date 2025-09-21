<x-layouts.app :title="__('Users')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-red-700 dark:text-white">Manager's User Management</h1>
            <!-- <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md transition-colors duration-200">
                Add New User
            </button> -->
        </div>
        
        <!-- User Statistics -->
        <div class="flex gap-4">
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Total Users</h3>
                <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">156</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">+8 this month</p>
            </div>
            
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Active Users</h3>
                <p class="text-3xl font-bold text-green-600 dark:text-green-400">142</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">91% of total users</p>
            </div>
            
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Agents</h3>
                <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">12</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">Support team members</p>
            </div>
            
            <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">Admins</h3>
                <p class="text-3xl font-bold text-red-600 dark:text-red-400">4</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">System administrators</p>
            </div>
        </div>
        
        <!-- Search and Filters -->
        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <input type="text" placeholder="Search users..." class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                </div>
                <div>
                    <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                        <option>All Roles</option>
                        <option>Admin</option>
                        <option>Agent</option>
                        <option>User</option>
                    </select>
                </div>
                <div>
                    <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                        <option>Suspended</option>
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Users Table -->
        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-6">
            <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-gray-200">All Users</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">User</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Role</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Last Login</th>
                            <th class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                        SJ
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">John Doe</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">ID: #001</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">sarah.johnson@rogers.com</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full dark:bg-red-900 dark:text-red-300">Admin</span></td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">Active</span></td>
                            <td class="px-6 py-4">2 hours ago</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">Edit</button>
                                    <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                        MC
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">Mike Chen</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">ID: #002</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">mike.chen@rogers.com</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">Agent</span></td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">Active</span></td>
                            <td class="px-6 py-4">4 hours ago</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">Edit</button>
                                    <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                        ER
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">Sam Khan</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">ID: #003</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">sam.khan@rogers.com</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">Agent</span></td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Away</span></td>
                            <td class="px-6 py-4">Yesterday</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">Edit</button>
                                    <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                        JS
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">John Smith</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">ID: #004</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">john.smith@rogers.com</td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-gray-800 bg-gray-100 rounded-full dark:bg-gray-900 dark:text-gray-300">User</span></td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">Active</span></td>
                            <td class="px-6 py-4">1 week ago</td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">Edit</button>
                                    <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>
