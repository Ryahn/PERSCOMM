{% if auth %}
<p>Hello, {{ auth.first_name }}</p>
{% endif %}
<ul>
<li><a href="{{ urlFor('home') }}">Home</a></li>
    
    {% if auth %}
    Logged in
    {% else %}
<li><a href="{{ urlFor('register') }}">Register</a></li>
<li><a href="{{ urlFor('login') }}">Login</a></li>
    {% endif %}
</ul>