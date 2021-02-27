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

        </ul>
    </div>
    {{ $slot }}
</div>
