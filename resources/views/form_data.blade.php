<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>
<body>
    <h1>{{ $request->name }}</h1>
    <p style="text-align:right;">Email: {{ $request->email }}</p>
    <p style="text-align:right;">CNIC: {{ $request->cnic }}</p>
    <p style="text-align:right;">Phone: {{ $request->phone }}</p>
    <hr></hr>
    <h2>Skills</h2>
    <ul>
        <li>{{ $request->skill_1 }}</li>
        <li>{{ $request->skill_2 }}</li>
        <li>{{ $request->skill_3 }}</li>
        <li>{{ $request->skill_4 }}</li>
    </ul>
</body>
</html>