<h2>Bàn cờ {{ $n }} x {{ $n }}</h2>

<table border="1" cellpadding="10">
@for($i=0; $i<$n; $i++)
<tr>
    @for($j=0; $j<$n; $j++)
        <td>&nbsp;</td>
    @endfor
</tr>
@endfor
</table>
