<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <br>
                    @if(!auth()->user()->is_punched_in)
                    <form method="POST" action="{{ route('punch-in') }}">
                        @csrf
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Punch In
                        </button>
                    </form>
                    @else
                    <form method="POST" action="{{ route('punch-out') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Punch Out
                        </button>
                    </form>
                    @endif
                    <br>
                    <h3 class="font-semibold text-lg text-gray-800 leading-tight mt-6">
                        {{ __('Your Time Logs') }}
                    </h3>
                    <ul>
                        <ul>
                            @foreach(auth()->user()->timeLogs as $log)
                            <li>
                                Punch In: {{ $log->punch_in_time }}
                                @if($log->punch_out_time)
                                - Punch Out: {{ $log->punch_out_time }}
                                - Total Time: {{ $log->punch_out_time->diffForHumans($log->punch_in_time) }}
                                @else
                                - Punch Out: N/A
                                - Total Time: {{ now()->diffForHumans($log->punch_in_time) }}
                                @endif
                            </li>
                            @endforeach
                        </ul>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>