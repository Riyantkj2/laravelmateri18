<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : passing data controller ke view laravel- www.malasngoding.com</title>
</head>
<body>
 <h1>Tutorial laravel</h1>
 <a href="https://www.malasngoding.com/category/laravel">www.malas ngoding.com</a>
 <br>

 <p>Nama : {{ $nama }}</p>
 
 <p> Pelajaran</p>
 <ul>

	 @foreach($matkul as $m)

	 <li>{{ $m }}</li>

	 @endforeach
	 
 </ul>

</body>
</html>

 