<div class="modal fade" id="addEditUserModal" tabindex="-1" aria-labelledby="addEditUserModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEditUserModal">{{ $modalTitle }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="create">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="userName" placeholder="Name" required autofocus
                            wire:model="createForm.name">
                        @error('createForm.name')
                            <span class="text-red-500 block sm:inline text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Email" required
                            wire:model="createForm.email">
                        @error('createForm.email')
                            <span class="text-red-500 block sm:inline text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" placeholder="Password" required
                            wire:model="createForm.password">
                        @error('createForm.password')
                            <span class="text-red-500 block sm:inline text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirm" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            placeholder="Confirm password" required wire:model="createForm.passwordConfirmation">
                        @error('createForm.passwordConfirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label for="userAvatar" class="form-label">Avatar</label>
                        <input class="form-control" type="file" id="userAvatar" aria-label="Choose file"
                            wire:model="createForm">
                        @error('userAvatar')
                            <span class="text-red-500 block sm:inline text-xs">{{ $message }}</span>
                        @enderror
                    </div> --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fa-solid fa-x"></i>
                            <span class="ms-2 text-white">Cancel</span>
                        </button>
                        <button wire.click="create" type="submit" class="btn btn-success">
                            <i class="fa-solid fa-share-from-square text-white"></i>
                            <span class="ms-2 text-white">Save</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
