<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
   <div class="space-y-2">
   @foreach ($groups as $group)
        <h2 class="bg-green-500 text-white text-xl">{{ $group->name }}</h2>
        @foreach ($group->users as $user)
            <p> {{ $user->name }}</p>
            <div class="">{{ $user->pivot->active ? 'Active' : 'Not active'}}</div>
            <span class="text-xs">Joined Date: {{ $user->pivot->created_at->format('d/m/y') }}</span>
        @endforeach
    @endforeach
   </div>
</body>

</html>