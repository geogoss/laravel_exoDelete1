<section class="w-50 mx-auto">
    <h1 class="text-center">Women</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($women as $item)
                <tr>
                    <th scope="row">{{ $item->id }} </th>
                    <td>{{ $item->name }} </td>
                    <td>{{ $item->gender }} </td>
                    <td>{{ $item->age }} </td>
                    <td>
                        <form action="/delete/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
