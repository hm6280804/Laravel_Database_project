<h1>Employee Detail</h1>
<style>
    #box{
        background: pink;
        border: 2px solid black;
        padding-left: 20px;
        width: 25%;
    }
</style>
<div id="box">
    @foreach ($data as $id => $user )
    <h3>Name: {{ $user->name }}</h3>
    <h3>email: {{ $user->email }}</h3>
    <h3>age: {{ $user->age }}</h3>
    <h3>city: {{ $user->city }}</h3>
@endforeach
</div>