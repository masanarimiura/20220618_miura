<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>top</title>
</head>

<body>
  @if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/" method="post">
    @csrf
        <p>氏名</p>
        <div><input type="text" name="name"></div>
        <p>メールアドレス</p>
        <div><input type="email" name="email"></div>
        <div><input type="submit" value="送信"></div>
  </table>
</form>
</body>
</html>