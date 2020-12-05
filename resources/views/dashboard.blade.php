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
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Earnings yesterday</td>
                            <td>$0.00</td>
                        </tr>

                        <tr>
                            <td class="font-bold">Earnings this month</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Earnings last month</td>
                            <td>$0.00</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
