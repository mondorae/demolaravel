    <h1>From test</h1>
    <form action="{{route('postForm')}}" method="post">
        @csrf
        <input type="text" name="HoTen">
        <input type="text" name="tuoi">
        <input type="submit">
    </form>