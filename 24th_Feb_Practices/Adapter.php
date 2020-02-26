<?php

    $config = 
    [
        'host' => "localhost",
        'user' => "root",
        'password' => "",
        'dbName' => "project"
    ];

    class Adapter
    {
        protected $config = 
        [
            'host' => "localhost",
            'user' => "root",
            'password' => "",
            'dbName' => "project"
        ];

        public function setConfig($config)
        {
            $this->config = array_merge($this->config, $config);
            return $this->config;
        }

        public function getConfig()
        {
            return $this->config;
        }

        protected $connect;

        public function setConnect($connect)
        {
            $this->connect = $connect;
            return $this->connect;
        }

        public function getConnect()
        {
            return $this->connect;
        }

        public function connect()
        {
            if(!$this->getConfig()) {
                $this->config = $this->setConfig($this->config);
            }
            $connect = new mysqli($this->config['host'], $this->config['user'], $this->config['password'], 
                                                                                $this->config['dbName']);
            $this->connect = $this->setConnect($connect);
        }

        protected $query;

        public function setQuery($query)
        {
            $this->query = $query;
            return $this->query;
        }

        public function getQuery()
        {
            return $this->query;
        }

        public function query($query)
        {
            if(!$this->getConnect()) {
                $this->connect = $this->setConnect($this->connect);
            }
            if(!$this->getQuery()) {
                $this->query = $this->setQuery($query);
            }
            return $this->$query = $this->getConnect()->query($query);
        }

        public function insert($query)
        {
            $result = $this->query($query);
            if(!$result) {
                return null;
            }
            echo "Inserted Data at $result[insert_id]";
            return $result['insert_id'];
        }

        public function update($query)
        {
            $result = $this->query($query);
            if(!$result) {
                return null;
            }
            echo "No. of Updated Rows $result[affected_rows]";
            return $result['affected_rows'];
        }

        public function delete($query)
        {
            $result = $this->query($query);
            if(!$result) {
                return null;
            }
            echo "No. of Deleted Records $result[affected_rows]";
            return $result['affected_rows'];
        }

        public function fetchAll($query)
        {
            $result = $this->query($query);
            if(!$result) {
                return null;
            }
            echo "<table border=1>
                      <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Price </th>
                        <th> Quantity </th>
                        <th> Category </th>
                      </tr>";
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                echo "<tr>
                        <td> $row[ID] </td> 
                        <td> $row[Name] </td>
                        <td> $row[Price] </td>
                        <td> $row[Quantity] </td>
                        <td> $row[Category] </td>
                      </tr>";
            }
            echo "</table>";
            return $result;
        }

        public function fetchRow($query)
        {
            $result = $this->query($query);
            if(!$result) {
                return null;
            }
            echo "<table border=1>
                      <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Price </th>
                        <th> Quantity </th>
                        <th> Category </th>
                      </tr>";
           $row = $result->fetch_array(MYSQLI_ASSOC);
                echo "<tr>
                        <td> $row[ID] </td> 
                        <td> $row[Name] </td>
                        <td> $row[Price] </td>
                        <td> $row[Quantity] </td>
                        <td> $row[Category] </td>
                      </tr>";
            echo "</table>";
            return $result;
        }

        public function fetchOne($query)
        {
            $result = $this->query($query);
            if(!$result) {
                return null;
            }
            return $result;
        }

        public function fetchPairs($query)
        {
            $key = [];
            $result = $this->query($query);
            if(!$result) {
                return null;
            }
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $key[$row['ID']] = $row['Name'];
            }
            echo "<pre>";
            print_r($key);
        }
    }

    $adapter = new Adapter();

    $adapter->connect();

    $adapter->insert("INSERT INTO `product`(`Name`, `Price`, `Quantity`, `Category`) 
                      VALUES ('Cricket Bat',500,16,'Sports')");

    $adapter->update("UPDATE `product` SET `Name`='Desktop PC' WHERE `ID`=2");

    $adapter->delete("DELETE FROM `product` WHERE `ID`=1");

    $adapter->fetchAll("SELECT * FROM `product`");

    $adapter->fetchRow("SELECT * FROM `product` WHERE `ID`=2");

    $adapter->fetchOne("SELECT COUNT(`Name`) FROM `product`");

    $adapter->fetchPairs("SELECT `ID`, `Name` FROM `product`");

    echo "<pre>";
    print_r($adapter);
?>