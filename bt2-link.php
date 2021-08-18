<?php

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNote = null;
        $this->lastNote = null;
        $this->count = 0;
    }

    public function insertFirst($data): void
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }

        $this->count++;
    }

    public function insertLast($data): void
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function totalNodes(): int
    {
        return $this->count;
    }

    // public function readList(): array
    // {
    //     $listData = [];
    //     $current = $this->firstNode;

    //     while (!is_null($current)) {
    //         array_push($listData, $current->readNode());
    //         $current = $current->next;
    //     }
    //     return $listData;
    // }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function add($index, $data)
    {
        $node = new Node($index, $data);
        $c = $this->next;
        $p = $this->node->next;
        $count = 0;

        if ($index < 0 || $index > $this->count) {
            echo "khong the chen";
        }elseif ($index == 0) {
            // $this->ham-add-dau();
            $this->insertFirst($data);
            

        } elseif ($index == $this->count) {
            // $this->ham_add_cuoi();
            $this->insertLast($data);
            
        } 
        else {
            for ($i = 0; $i < $index; $i++) {
                $c = $this->note;
                $p = $this->next;
            }
            $this->count++;
        }
    }
}
