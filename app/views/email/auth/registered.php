{% extends 'email/templates/default.php' %}

{% block content %}
<p>You have registered!</p>

<p>Activate your account: {{ baseUrl }}{{ urlFor('activate') }}?email={{ user.email }}&identifier={{ identifier|url_encode }}</p>
{% endblock %}