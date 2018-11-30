@if (count($errors) > 0)
    <div class="text-center text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style-type: none;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif