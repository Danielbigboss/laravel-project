
  <h1>Hi dear!, {{ $details['username'] }} </h1>

    We are glad you inform you that your account has been successfully created, below are your account details.
    <p> <b>Username</b>: {{ $details['username'] }} </p>
    <p> <b>Phone Number</b>: {{ $details['phone'] }} </p>
    <p> <b>Password</b>: {{ $details['password'] }} </p>
    <p> <b>Registration Date</b>: {{ now()->diffForHumans() }} </p>
Thanks,<br>
{{ config('app.name') }}
