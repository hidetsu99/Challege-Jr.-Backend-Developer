<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      @for ($i=1; $i < 100; $i++)
        @if ($i%5==0&&$i%3==0)
          {{'Linianos '}}
        @elseif ($i%3==0)
        {{'Linio '}}
        @elseif ($i%5==0)
        {{'IT '}}
          @else
          {{$i . '  '}}
          @endif
      @endfor
    </p>
  </body>
</html>
