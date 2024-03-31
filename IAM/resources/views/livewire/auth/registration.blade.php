<div class="d-flex flex-column justify-content-center" style="height: calc(100vh - 114px)">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 40%;">
            <div class="card-body">
                <h3 class="card-title">Registration</h3>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <form class="mt-4" wire:submit="save">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" wire:model="form.name" id="name"
                                        required autofocus>
                                    @error('form.name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" wire:model="form.email" id="email"
                                        required>
                                    @error('form.email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" wire:model="form.password"
                                        id="password" required>
                                    @error('form.password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label for="password_confirmation" class="form-label">
                                        Confirm Password
                                    </label>
                                    <input type="password" class="form-control" wire:model="form.passwordConfirmation"
                                        id="password_confirmation" required>
                                    @error('form.passwordConfirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
