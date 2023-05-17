@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif
<div class="text-end mb-2">
  <a class="btn btn-success" href="{{ route('positions.create') }}"> Add Positions</a>
</div>
<div class="text-end mb-2">
  <a class="btn btn-success" href="{{ route('users.create') }}"> Add Positions</a>
</div>
<table class="table">
  <thead>
    <tr style="background-color: #0000FF;">
      <th scope="col" style="color: #FFFFFF;">No</th>
      <th scope="col" style="color: #FFFFFF;">Nama</th>
      <th scope="col" style="color: #FFFFFF;">Email</th>
      <th scope="col" style="color: #FFFFFF;">Departement</th>
      <th scope="col" style="color: #FFFFFF;">Position</th>
      <th scope="col" style="color: #FFFFFF;">Action</th>
    </tr>
  </thead>
  <tbody style="background-color: #D4EFDF;">
    @php $no = 1 @endphp
    @foreach($users as $user)
    <tr>
      <td>{{ $no ++ }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->departement ? $user->departement->manager_id : '-' }}</td>
      <td>{{ $user->position ? $user->position->name : '-' }}</td>
      <td>
        <form action="{{ route('users.destroy',$user->id) }}" method="Post">
          <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>