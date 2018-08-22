<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      @for ($i=0; $i < 100; $i++)
        @if ($i%5==0&&$i%3==0)
          {{ $multiples . '  '}}
        @elseif ($i%3==0)
        {{$number3 . '  '}}
        @elseif ($i%5==0)
        {{$number5 . '  '}}
          @else
          {{$i . '  '}}
          @endif
      @endfor
    </p>
  </body>
</html>
