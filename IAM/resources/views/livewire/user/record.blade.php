<tr>
    <th>{{ $user->id }}</th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->avatar }}</td>
    <td>{{ $user->email }}</td>
    <td class="tw-w-[107px]">
        <div class="tw-flex tw-flex-col">
            <button data-bs-toggle="modal" data-bs-target="#addEditUserModal"
                class="btn btn-success btn-sm tw-text-white tw-w-[115px] tw-mb-1" type="button">
                <i class="fa-solid tw-mr-1 fa-pen-to-square"
                    wire:click="edit"></i>
                Edit
            </button>
            <button class="btn btn-secondary btn-sm tw-text-white tw-w-[115px] tw-mb-1">
                <i class="fa-solid tw-mr-1 fa-lock"></i>
                Permission
            </button>
            <button class="btn btn-danger btn-sm tw-text-white tw-w-[115px]" wire:click="delete"
                wire:confirm="Are you sure you want to delete this user?">
                <i class="fa-solid tw-mr-1 fa-circle-minus"></i>
                Delete
            </button>
        </div>
    </td>
</tr>
