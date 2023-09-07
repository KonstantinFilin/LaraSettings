<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>LaraSettings</title>

    </head>
    <body>
        <h1>LaraSettings</h1>
        
        <form action="{{ route('larasettings.save') }}" method="post">
            @csrf
            <table>
            @foreach ($items as $item)
            <tr>
                <th style="text-align: left;">{{ $item->label }}</th>
                <td>
                    <input type=text name="{{ $item->id }}" value="{{ $item->value }}" />
                </td>
            </tr>
            @endforeach
            </table>
            <button type="submit">Сохранить</button>
        </form>
        
    </body>
</html>
