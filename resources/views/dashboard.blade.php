<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto text-left m-3 w-full">
                    <tbody>
                        <tr>
                            <td class="font-bold">Earnings today</td>
                            <td>${{$earningsToday}}</td>

                        </tr>
                        <tr>
                            <td class="font-bold">Earnings yesterday</td>
                            <td>${{$earningsYesterday}}</td>
                        </tr>

                        <tr>
                            <td class="font-bold">Earnings this month</td>
                            <td>${{$earningsThisMonth}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Earnings last month</td>
                            <td>${{$earningsLastMonth}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3 mt-5">
                <form method="post" action="/dashboard">
                    <div class="block">
                        <input type="checkbox" id="registration_enabled">
                        <label for="registration_enabled">Allow registration of new users</label>
                    </div>
                    <input type="submit" value="Save changes" class="block p-2 mt-4 bg-green-300 hover:bg-green-400 cursor-pointer rounded-md">
                </form>

                </label>
            </div>

        </div>
    </div>
</x-app-layout>
