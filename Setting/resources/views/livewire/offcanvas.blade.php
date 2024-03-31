<div>
    <button class="btn btn-light rounded-0 opacity-50 rounded-end-circle position-fixed top-50 start-0" type="button"
        data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"
        style="z-index: 1000">
        <i class="fas fa-chevron-right"></i>
    </button>
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="p-3">
            <img src="{{ Module::asset('setting:images/webike-logo.png') }}" class="w-100">
        </div>
        <div class="offcanvas-body p-0">
            <div class="list-group">
                @foreach ($modules as $module)
                    <a wire:key="{{ $module->id }}" href="{{ $module->uri }}"
                        class="list-group-item list-group-item-action" aria-current="true" wire:navigate>
                        <img src="{{ Module::asset('setting:images/' . $module->icon) }}" style="width: 30px;">
                        <h5 class="d-inline align-middle ms-2">{{ $module->title }}</h5>
                    </a>
                @endforeach
            </div>
            <div class="position-fixed bottom-0 p-2" style="width: 400px">
                <div class="d-flex">
                    <img src="{{ Module::asset('setting:images/avatar-default.jpg') }}" class="rounded-3"
                        style="width: 50px; height: 50px">
                    <div class="d-inline ms-3">
                        <div class="tw-text-lg">{{ Auth::user()->name }}</div>
                        <div class="tw-text-base">{{ Auth::user()->email }}</div>
                    </div>
                    <i class="fas fa-sign-out-alt ms-auto fs-4 tw-cursor-pointer tw-leading-[50px]"
                        wire:click="logout"></i>
                </div>

            </div>
        </div>
        <button class="btn btn-light rounded-0 rounded-end-circle position-absolute top-50" style="right: -32px"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="fas fa-chevron-left"></i>
        </button>
    </div>
</div>
