<aside id="default-sidebar" class="fixed m-0 top-20 left-0 z-40 w-1/6 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-200">
        <ul class="space-y-2 text-gray-800 font-medium">
            <li>
                <a href="{{route('student.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg text-gray-800 hover:text-amber-50 hover:bg-gray-100 dark:hover:bg-gray-800 group">
                    <img class="nav w-7" src="{{Vite::asset('resources/images/student_icon.png')}}"/>
                    <span class="ml-3">Student</span>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.index')}}" class="flex text-gray-800 items-center p-2 text-gray-900 rounded-lg hover:text-amber-50 hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.7em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Admin</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
