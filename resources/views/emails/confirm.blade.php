<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Confirm your registeration in Delishows</title>
</head>

<body>
    <h1>Thanks for signing up in Delishows！</h1>
    <p>
        Please click following link to finish your registration：
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>
    <p>
        Please ignore this email if this is not regarding your operation.
    </p>
</body>

</html>
