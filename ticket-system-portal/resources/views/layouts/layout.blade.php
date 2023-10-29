<!doctype html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('filter')
    <script type="module">
        //toggle function
        $(".toggle").on('change', function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var ticket_id = $(this).data('id');

            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: '{{route('update.status')}}',
                data: {
                    'status': status,
                    'ticket_id': ticket_id
                },
                success: function (data) {
                    $('#notiDiv').fadeIn();
                }
            })
        })
        // filter function to find user with text input
        {{--$(document).ready(function () {--}}
        {{--    var table = $('#dateable').DataTable({--}}
        {{--        'processing':true,--}}
        {{--        'serverSide':true,--}}
        {{--        'ajax': "{{route('dashboard.index')}}",--}}
        {{--        'columns': [--}}
        {{--            {'data': 'first_name'},--}}
        {{--            {'data': 'last_name'},--}}
        {{--            {'data': 'email'}--}}
        {{--        ]--}}
        {{--    });--}}

        {{--    $('.filter-input').keyup(function () {--}}
        {{--        table.column($(this).data('column'))--}}
        {{--            .search($(this).val()).draw();--}}
        {{--    });--}}
        {{--})--}}
        //filter function to find selected category
        $(".category").on('change', function () {
            var category = $('#category_id').val();


            $.ajax({
                type: 'GET',
                dataType: 'JSON',
                url: '{{route('filter.ticket')}}',
                data: {
                    'category': category
                },
                success: function (data) {
                    var tickets = data.tickets;
                    console.log(tickets)
                    var html = '';
                    if (tickets.length > 0) {
                        for (let index = 0; index < tickets.length; index++) {
                            html += '<tr>\
                        <td>' + tickets[index]['id'] + '</td>\
                        <td>' + tickets[index]['title'] + '</td>\
                        \<td>' + tickets[index]['category'] + '</td>\
                        <td>' + tickets[index]['priority'] + '</td>\
                         <td>' + tickets[index]['created_by'] + '</td>\
                         \ <td>' + "<label class='relative inline-flex items-center cursor-pointer'>" +
                                "<input type='checkbox' data-id='"+ tickets[index]['id']+"' class='sr-only peer toggle'/>" +  // need to fix the toggle is checked when status is true
                                "<div class='w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-["+' '+"] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600'></div>"
                                "</label> " + '</td>\
                        </tr>';
                        }

                    } else {
                        html += '<tr>\
                        <td>No tickets found</td>\
                        </tr>';
                    }
                    $('#tbody').html(html);
                }
            })
        })
    </script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket portal</title>
</head>
<body>
<nav class="fixed w-full flex items-center justify-between flex-wrap bg-indigo-950 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <img class="nav w-11" src="{{Vite::asset('resources/images/supporthelpdesk-logo.png')}}"/>
        <span class="font-semibold text-xl tracking-tight">Ticket system portal</span>
    </div>
    <div class="block lg:hidden">
        <button
            class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Overview
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                About us
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                Contact
            </a>
        </div>
        @guest
            @if (Route::has('login'))
                <li class="nav-item list-none">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item list-none pr-10 ml-10">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown list-none flex content-around">
                <a href="#responsive-header"
                   class="mr-10 block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </div>
</nav>
<div class="sidebar">
    @include('partials.sidebar.sidebar');
</div>
<main class="main-content">
    @yield('content')
</main>
<footer>

</footer>
</body>
</html>
