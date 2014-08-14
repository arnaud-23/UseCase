<?php

namespace OpenClassrooms\UseCase\BusinessRules\Entities;

/**
 * @author Romain Kuzniak <romain.kuzniak@openclassrooms.com>
 */
abstract class PaginatedCollection
{
    /**
     * @var array
     */
    protected $items;

    /**
     * @var int
     */
    protected $itemsPerPage;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var integer
     */
    protected $totalItems;

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return (int) ceil($this->totalItems / $this->itemsPerPage);
    }

}
