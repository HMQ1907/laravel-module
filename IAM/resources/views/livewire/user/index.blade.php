<div>
    <div class="tw-p-3 tw-bg-gradient-to-r tw-from-cyan-300 tw-text-white tw-mb-3">
        <h2>User Management</h2>
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="tw-flex tw-justify-between tw-mb-3">
                    <div>
                        <button data-bs-toggle="modal" data-bs-target="#filterUserModal" type="button"
                            class="btn btn-outline-primary"><i class="fa-solid fa-filter tw-mr-2"></i>Filter</button>
                    </div>
                    <div>
                        <button data-bs-toggle="modal" data-bs-target="#addEditUserModal" type="button"
                            class="btn btn-outline-success tw-mr-2"><i class="fa-solid fa-user-plus tw-mr-2"></i>Add
                            New</button>
                        <button data-bs-toggle="modal" data-bs-target="#logHistoryModal" type="button"
                            class="btn btn-outline-warning"><i
                                class="fa-solid fa-arrow-rotate-left tw-mr-2"></i>History</button>
                    </div>
                </div>
                <div>
                    <livewire:iam::user.table />
                </div>
            </div>
        </div>
    </div>
    <livewire:iam::user.create-edit />
</div>
