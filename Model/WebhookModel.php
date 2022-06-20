<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";

class WebhookModel extends Database
{
    public function getWebhooks($limit)
    {
        return $this->select("SELECT `id`, `device_key`, `data` FROM webhooks WHERE device_key = 'device_key_1' AND `is_read` = 0 ORDER BY id ASC LIMIT ?", ["i", $limit]);
    }

    public function storeWebhookData($data)
    {
        $this->insert("INSERT INTO `webhooks` ( `device_key`, `data`) VALUES ('device_key_1', ?)", ["s", $data]);
    }

    public function markAsRead($ids)
    {
        $ids = "(" . implode(", ", $ids) . ")";
        $this->update("UPDATE `webhooks` SET `is_read` = '1' WHERE `webhooks`.`id` in $ids;", []);
    }
}