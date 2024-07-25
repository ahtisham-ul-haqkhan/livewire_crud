<div class="mt-4 mb-4">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Message</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
