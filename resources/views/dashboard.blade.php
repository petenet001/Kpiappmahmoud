<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div x-data="{ tab: window.location.hash ? window.location.hash : '#vente' }"  class="max-w-7xl mx-auto sm:px-6 lg:px-8 place-content-between">

            <div class="bg-white">
                <nav class="tabs flex flex-col sm:flex-row">
                    <button data-target="panel-1"  x-on:click.prevent="tab='#vente'"
                            class="tab active text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
                        Ventes
                    </button>
                    <button data-target="panel-2"  x-on:click.prevent="tab='#devis'"
                            class="tab ext-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                        Devis
                    </button>
                    <button data-target="panel-3"  x-on:click.prevent="tab='#stocks'"
                            class="tab text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                        Stocks
                    </button>
                </nav>
            </div>

            <div id="panels">
                <div class="panel-1 tab-content active p-8"  x-show="tab == '#vente'" x-cloak>
                    <div>
                        <div class="flex  items-center justify-start bg-grey-lighter">
                            <label class="bg-blue-500 hover:bg-blue-700 text-white  hover:bg-gray-400 font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
                                </svg>
                                <span>Importer vos donées de ventes</span>
                                <form wire:submit.prevent="save">
                                    <input type="file" id="input"  class="hidden" />
                                </form>
                                
                            </label>
                        </div>

                    </div>

                <div class="py-8">
                    <div id="spreadsheet"></div>
                   {{-- <table class="table-auto " id="tbl-data"></table> --}}
                </div>
                <div class="panel-2 tab-content py-5" x-show="tab == '#devis'" x-cloak>
                    <h1>Devis</h1>
                </div>
                <div class="panel-3 tab-content py-5" x-show="tab == '#stocks'" x-cloak>
                    <h1>Stocks</h1>
                </div>
            </div>

        </div>
    </div>

    <style>
        html,
        body {
            height: 100%;
        }

        @media (min-width: 640px) {
            table {
                display: inline-table !important;
            }

            thead tr:not(:first-child) {
                display: none;
            }
        }

        td:not(:last-child) {
            border-bottom: 0;
        }

        th:not(:last-child) {
            border-bottom: 2px solid rgba(0, 0, 0, .1);
        }
    </style>
</x-app-layout>
