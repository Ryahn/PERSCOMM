{% if auth %}
    <p>Hello {{ auth.getFullNameOrUsername() }},</p>
{% else %}
    <p>Hello There,</p>
{% endif %}

{% block content %}{% endblock %}
