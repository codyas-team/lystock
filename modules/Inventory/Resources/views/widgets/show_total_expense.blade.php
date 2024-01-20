<ul id="widget-{{ $class->model->id }}" role="list" class="lg:w-1/3 mt-10 ml-5">
    <li class="col-span-1 flex shadow-sm rounded-md">
        <div class="flex-shrink-0 flex items-center justify-center w-16 bg-status-partial text-white text-sm font-medium rounded-l-md">
            <span class="material-icons-outlined">
                payments
            </span>
        </div>
        <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
            <div class="flex-1 px-4 py-2 text-sm truncate">
                <p class="text-gray-900 font-medium hover:text-gray-600">
                    {{ trans('inventory::widgets.total_expense') }}
                </p>

                <p class="text-gray-500">
                    <x-money :amount="$total_expense" :currency="setting('default.currency')" convert />
                </p>
            </div>
        </div>
    </li>
</ul>
