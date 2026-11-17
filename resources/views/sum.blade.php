<h2> SUMM </h2>

<form method="POST" action="/sum">
    @csrf

    <input type="number" name="a" placeholder="first">

    <input type="number" name="b" placeholder="Second">

    <button type="submit">Add the numbers</button>

</form>

@if(isset($result))
    <h3> SUMM: {{$result}} </h3>
@endif
