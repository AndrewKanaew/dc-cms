<?php

namespace Engine\Core\Database;


class Connection
{

    /**
     * @var $link
     */
    private $link;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * @return $this
     */
    private function connect()
    {
        $config = require_once  __DIR__ . '/../../Config/Database.php';

        $dns = "mysql:host=".$config['db_host'].";dbname=".$config['db_name'].";charset=".$config['charset'];

        $this->link = new \PDO($dns, $config['db_user'], $config['db_pass']);

        return $this;
    }

    /**
     * @param $sql
     *
     * @return mixed
     */
    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);
        return $sth->exequte();
    }

    /**
     * @param $sql
     *
     * @return array
     */
    public function query($sql)
    {
        $sth = $this->link->prepare($sql);
        $sth->exequte();

        $result = $sth->fetchArray(\PDO::FETCH_ASSOC);
        if ($result === false) {
            return [];
        }

        return $result;
    }

}