<h3>For Loop</h3>
@for ($i = 1; $i <= 10; $i++)
    <p>{{ $i }}</p>
@endfor

<h3>While Loop</h3>
@php $i = 1; @endphp
@while ($i <= 10)
    <p>{{ $i }}</p>
    @php $i++; @endphp
@endwhile

<h3>Foreach Loop</h3>
@foreach ($data as $d)
    <p>{{ $d }}</p>
@endforeach
