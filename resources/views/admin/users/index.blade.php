<h2>Manajemen User</h2>
<a href="{{ route('admin.users.create') }}">+ Tambah User</a>

<table border="1" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $i => $u)
        <tr>
            <td>{{ $users->firstItem() + $i }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ ucfirst($u->role) }}</td>
            <td>
                <a href="{{ route('admin.users.show', $u->id) }}">Detail</a> |
                <a href="{{ route('admin.users.edit', $u->id) }}">Edit</a> |
                <form action="{{ route('admin.users.destroy', $u->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}