<?php exit('No direct script access allowed'); ?>
# InvoicePlane Configuration File

### START HERE
# Set your URL without trailing slash here, e.g. http://your-domain.com
# If you use a subdomain, use http://subdomain.your-domain.com
# If you use a subfolder, use http://your-domain.com/subfolder
IP_URL=http://localhost:8000/

# Having problems? Enable debug by changing the value to 'true' to enable advanced logging
ENABLE_DEBUG=true

# Set this setting to 'true' if you want to disable the setup for security purposes
DISABLE_SETUP=false

# To remove index.php from the URL, set this setting to 'true'.
# Please notice the additional instructions in the htaccess file!
REMOVE_INDEXPHP=true

# These database settings are set during the initial setup
DB_HOSTNAME=172.20.0.2
DB_USERNAME=ipdevdb
DB_PASSWORD=ipdevdb
DB_DATABASE=ipdevdb
DB_PORT=3306

# If you want to be logged out after closing your browser window, set this setting to 0 (ZERO).
# The number represents the amount of minutes after that IP will automatically log out users,
# the default is 10 days.
SESS_EXPIRATION=864000

# Enable the deletion of invoices
ENABLE_INVOICE_DELETION=false

# Disable the read-only mode for invoices
DISABLE_READ_ONLY=false

##
## DO NOT CHANGE ANY CONFIGURATION VALUES BELOW THIS LINE!
## =======================================================
##

# This key is automatically set after the first setup. Do not change it manually!
ENCRYPTION_KEY=base64:fNvmLzdPNGhAEOkF3taTSJXf0rsnCaqY/97+uFIcydo=
ENCRYPTION_CIPHER=AES-256

# Set to true after the initial setup
SETUP_COMPLETED=true
