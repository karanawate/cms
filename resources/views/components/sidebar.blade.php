<!-- component -->
<div class="min-h-screen flex flex-column bg-gray-100">
    <div class="flex w-full max-w-min p-4 bg-white">
        <ul class="flex flex-col w-full">
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 bg-gray-100">
                    <span class="flex items-center justify-center text-gray-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Dashboard</span>
                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">3</span>
                </a>
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-400 px-3 my-4 uppercase">Resources</span>
            </li>
            <li class="my-px" x-data="{ isCollapsed: false }">
                <a href="#"
                    @click.prevent="isCollapsed = !isCollapsed"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-green-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Settings</span>
                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold  h-6 px-2 rounded-full ml-auto">
                        <i class="fa fa-chevron-down"></i>
                    </span>
                </a>
                <ul class="pl-4" x-show="isCollapsed">
                    <li class="my-px">
                        <a href="general"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">General</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="anaylsis"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Anaylsis</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Notifications</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Options</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="my-px" x-data="{ isCollapsed: false }">
                <a href="#"
                    @click.prevent="isCollapsed = !isCollapsed"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-green-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">People</span>
                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold  h-6 px-2 rounded-full ml-auto">
                        <i class="fa fa-chevron-down"></i>
                    </span>
                </a>
                <ul class="pl-4" x-show="isCollapsed">
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Customers</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="admin"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Admins</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="role"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Roles</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Permissions</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">E-mail subsribers</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="my-px" x-data="{ isCollapsed: false }">
                <a href="#"
                    @click.prevent="isCollapsed = !isCollapsed"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-green-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Catlogs</span>
                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold  h-6 px-2 rounded-full ml-auto">
                        <i class="fa fa-chevron-down"></i>
                    </span>
                </a>
                <ul class="pl-4" x-show="isCollapsed">
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Items</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Categories</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Tags</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Attributes</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="my-px">
                <a href="{{route('galleries.index')}}"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-gray-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Meassages leads</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{route('testimonials.index')}}"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-gray-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Testimonials</span>
                </a>
            </li>
            <li class="my-px" x-data="{ isCollapsed: false }">
                <a href="#"
                    @click.prevent="isCollapsed = !isCollapsed"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-green-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Resources</span>
                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold  h-6 px-2 rounded-full ml-auto">
                        <i class="fa fa-chevron-down"></i>
                    </span>
                </a>
                <ul class="pl-4" x-show="isCollapsed">
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Services</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Menus</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">pages</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                        class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                            <span class="ml-3 text-sm mr-2">Posts</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-400 px-3 my-4 uppercase">Account</span>
            </li>
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-gray-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Profile</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-gray-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Notifications</span>
                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">10</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-gray-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Settings</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                    class="flex flex-row items-center py-2 px-3 rounded-lg text-gray-600 hover:bg-gray-100">
                    <span class="flex items-center justify-center text-red-400">
                        <svg fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-4 w-4">
                            <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                        </svg>
                    </span>
                    <span class="ml-3 text-sm mr-2">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    {{ $slot }}
</div>
