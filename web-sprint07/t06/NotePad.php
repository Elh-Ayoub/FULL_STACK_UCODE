<?php

class NotePad
{
    public $notes;

    public function __construct($notes)
    {
        $this->notes = $notes;
    }

    public function __serialize(): array
    {
        $serializeArr = [];
        foreach ($this->notes as $note) {
            array_push($serializeArr, serialize($note));
        }
        return $serializeArr;
    }

    public function __unserialize(array $data): void
    {
        $this->notes = [];
        if ($data) {
            foreach ($data as $note) {
                array_push($this->notes, unserialize($note));
            }
            $this->nodes = $data["nodes"];
        }
    }

    public function getNote($name)
    {
        foreach ($this->notes as $note) {
            if ($name == $note->getName()) {
                return $note;
            }
        }
        return null;
    }

}
?>