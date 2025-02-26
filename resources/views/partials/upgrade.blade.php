<upgrade :central-type="{{ Koodilab\Models\Building::TYPE_CENTRAL }}"
         url="{{ route('api_upgrade', '__grid__') }}"
         store-url="{{ route('api_upgrade_store', '__grid__') }}"
         destroy-url="{{ route('api_upgrade_destroy', '__grid__') }}" inline-template>
    <div class="upgrade modal fade" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        @{{ building.name }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    @include('partials.building')
                </div>

                @include('partials.producer')
                @include('partials.scout')
                @include('partials.trader')
                @include('partials.trainer')
            </div>
        </div>
    </div>
</upgrade>
