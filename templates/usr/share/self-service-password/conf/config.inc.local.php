<?php
# Managed by Ansible

# LTB Self Service Password
# =========================

# Environment
# -----------

# Debug mode
$debug = {{ ldaptoolbox_ssp_debug }};

# LDAP Settings
{% for key, value in ldaptoolbox_ssp_ldap_settings.items() %}
${{ key }} = {{ value }};
{% endfor %}

# Local password policy
{% for key, value in ldaptoolbox_ssp_local_password_policy_settings.items() %}
${{ key }} = {{ value }};
{% endfor %}

# Mail settings
{% for key, value in ldaptoolbox_ssp_mail_settings.items() %}
${{ key }} = {{ value }};
{% endfor %}

# Customization
{% for key, value in ldaptoolbox_ssp_customization_settings.items() %}
${{ key }} = {{ value }};
{% endfor %}


# Reset Methods
# -------------

# Reset by mail
{% for key, value in ldaptoolbox_ssp_reset_by_mail_settings.items() %}
${{ key }} = {{ value }};
{% endfor %}

# Reset by sms
{% for key, value in ldaptoolbox_ssp_reset_by_sms_settings.items() %}
${{ key }} = {{ value }};
{% endfor %}

# Reset by question
{% for key, value in ldaptoolbox_ssp_reset_by_question_settings.items() %}
${{ key }} = {{ value }};
{% endfor %}


# Additional overrides
# --------------------

{% for key, value in ldaptoolbox_ssp_overrides.items() %}
${{ key }} = {{ value }};
{% endfor %}


?>
