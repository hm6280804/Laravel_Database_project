@php
    $user = "Muhammad Hanif";
    $fruits = ['apple', 'orange', 'grapes'];
@endphp


<script>
    var data = @json($fruits);
    data.forEach(function(entry) {
        console.log(entry);
    });
</script>