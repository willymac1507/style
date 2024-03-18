<x-app-layout>
    <x-slot name="scripts">
        <script type="importmap">
            {
                "imports": {
                    "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.11",
                    "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.11",
                    "@fullcalendar/timegrid": "https://cdn.skypack.dev/@fullcalendar/timegrid@6.1.11",
                    "@fullcalendar/list": "https://cdn.skypack.dev/@fullcalendar/list@6.1.11"
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
        <script type="module">
            import {Calendar} from "@fullcalendar/core";
            import dayGridPlugin from "@fullcalendar/daygrid";
            import timeGridPlugin from "@fullcalendar/timegrid";
            import listPlugin from "@fullcalendar/list";

            document.addEventListener('DOMContentLoaded', function () {
                const calendarEl = document.getElementById('calendar')
                const calendar = new Calendar(calendarEl, {
                    plugins: [dayGridPlugin, timeGridPlugin, listPlugin],
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                    },
                    events: @json($events)
                });
                calendar.render();
            });
        </script>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{--                <div class="p-6 text-gray-900 dark:text-gray-100">--}}
                {{--                    {{ __("You're logged in!") }}--}}
                {{--                </div>--}}
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</x-app-layout>
