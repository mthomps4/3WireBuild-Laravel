<p>
  You have received a new message from your website contact form.
</p>
<p>
  Here are the details:
</p>
<ul>
  <li>Name: <strong>{{ $name }}</strong></li>
  <li>Email: <strong>{{ $email }}</strong></li>
</ul>
<hr>
<p>
  @foreach ($messageLines as $messageLine)
    {{ $messageLine }}<br>
  @endforeach
</p>
<hr>


<!-- http://laravelcoding.com/blog/laravel-5-beauty-sending-mail-and-using-queues -->
