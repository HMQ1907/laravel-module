<div>
    {{ $users->links() }}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Avatar</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <livewire:iam::user.record wire:key="{{ 'user-' . $user->id }}" :$user />
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
    <script>
        window.addEventListener('close-modal', event => {
            var modalElement = document.getElementById('addEditUserModal');
            var modalInstance = bootstrap.Modal.getInstance(modalElement);
            if (modalInstance) {
                modalInstance.hide();
            }
        });
        window.addEventListener('user-added', event => {
            PNotify.alert({
                text: event.__livewire.params[0].message,
                type: 'success',
                delay: 1000,
            });
        })

        window.addEventListener('deleted-user', event => {
            PNotify.alert({
                text: event.__livewire.params[0].message,
                type: 'success',
                delay: 1000,
            });
        })
    </script>
    {{-- @script
        <script>
            $wire.on('close-modal', (event) => {
                console.log('close modal');
                var modalElement = document.getElementById('addEditUserModal');
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                if (modalInstance) {
                    modalInstance.hide();
                }
            });

            $wire.on('user-added', (event) => {
                console.log('user-added');
                PNotify.alert({
                    text: event.__livewire.params[0].message,
                    type: 'success',
                    delay: 1000,
                });
            });

            $wire.on('deleted-user', (event) => {
                console.log('deleted user');
                PNotify.alert({
                    text: event.__livewire.params[0].message,
                    type: 'error',
                    delay: 1000,
                });
            });
        </script>
    @endscript --}}
</div>
