<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/spotify.css') }}">
    <title>Spotify</title>
</head>
<body>
    <div class="spotify-container"> 
        <a href="{{ route('songs.index') }}"><img src="{{ asset('assets/images/spotifyLogo.jpg') }}" alt="imagen"></a>
    </div>    
</body>
</html>