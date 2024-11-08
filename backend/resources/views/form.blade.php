<!DOCTYPE html>
<html>

<head>
    <title>Send Message</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
</head>

<body>
    <form action="/bot/send-message" method="POST">
        @csrf
        {{ csrf_token() }}
        <label for="chat_id">Chat ID:</label>
        <input type="text" id="chat_id" name="chat_id" value="5499264854"><br><br>
        <label for="message">Message:</label>
        <input type="text" id="message" name="message" value="Hello, World!"><br><br>
        <input type="submit" value="Send Message">
    </form>
</body>

</html>
