<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('common.app-name') }}</title>
    <style>
        /* Estilos CSS inline para maior compatibilidade */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-top: 0;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>{{ __('user.mail.subject.email-confirmation') }}</h1>

    <b>{!! __('user.mail.messages.email-confirmation') !!}</b>
    <a href="{{ url('/') . '/email-confirmation/' . $token }}" class="button">{{ __('common.activate') }}</a>

    <p>{{ __('common.thank-you') }}!</p>

    <p>{!! __('common.mail.please-ignore') !!}</p>
</body>
</html>
