<div class="d-flex flex-column justify-content-center" style="height: calc(100vh - 114px)">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 60%;">
            <div class="card-body">
                <h3 class="card-title text-red-900">Login</h3>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex flex-column justify-content-center" style="height: 410px">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ config('app.logo') }}" alt="Webike Thailand">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column justify-content-center" style="height: 380px">
                                <form class="mt-4" wire:submit="login">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email_address" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email_address"
                                            aria-describedby="emailHelp" wire:model="form.email" required autofocus>
                                        @error('form.email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div id="emailHelp" class="form-text">
                                            We'll never share your email with anyoneelse.
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            wire:model="form.password" required>
                                        @error('form.password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-4 form-check">
                                        <input class="form-check-input" type="checkbox" id="remember_me"
                                            wire:model="form.rememberMe">
                                        <label class="form-check-label" for="remember_me">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
