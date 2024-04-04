<?php

namespace MediaProject;

class MediaItemDatabaseOps {
    private \PDO $DBH;

    public function __construct($DBH) {
        $this->DBH = $DBH;
    }

    public function getMediaItems() {
        $sql = 'SELECT * FROM MediaItems;';
        $STH = $this->DBH->query($sql);
        $STH->setFetchMode(\PDO::FETCH_ASSOC);
        $mediaItems = [];
        while ($row = $STH->fetch()) {
            $mediaItems[] = new MediaItem($row);
        }
        return $mediaItems;
    }
}