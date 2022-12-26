@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Employees List</h2><br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($records as $record)
                        <tr>
                            <th scope="row">{{ $record->id }}</th>
                            <td>{{ $record->username }}</td>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->email }}</td>
                            <td>
                                <a href="/employees/edit/{{ $record->id }}">Edit</a>&nbsp;&nbsp;&nbsp;
                                <button data-id="{{ $record->id }}" class="btn btn-danger delete-employees">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('body').on('click', '.delete-employees', function () {
                let id = $(this).data('id');
                $.ajax({
                    url : '/employees/' + id,
                    method : 'delete',
                    data: {
                        "_token": "{{ csrf_token()  }}",
                        '_method':'DELETE'
                    },
                    error: function(xhr, status, error) {
                        alert(error);
                    },
                    success: function () {
                        alert("Done!");
                        location.reload();
                    }
                })
            });

        });
    </script>
@endsection
