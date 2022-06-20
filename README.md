# AdilSkWebhookProject

The project is used to save webhooks from dropbox in the database and return the unread messages.

## Setup
- Install LAMP
- Create database webhookDb
- Configure details in `inc/config.php`

## API endpoints

### Webhook URL to be saved in dropbox
Webhook : Method POST : `/api/webhook/dropbox`
### To be used in desktop app
Fetch data : Method GET : `/api/webhook/list`
