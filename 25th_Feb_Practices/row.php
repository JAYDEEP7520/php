<?php

    class Row
    {
        protected $config = 
        [
            'host' => "localhost",
            'user' => "root",
            'password' => "",
            'dbName' => "project"
        ];

        protected $connect = null;
        protected $query = null;

        protected $primaryKey = null;
        protected $tableName = null;
        protected $data = [];
        protected $rowChanged = false;

        public function setConfig($config)
        {
            $this->config = array_merge($this->config, $config);
            return $this->config;
        }

        public function getConfig()
        {
            return $this->config;
        }

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
            if($this->getConfig() == null) {
                $this->config = $this->setConfig($this->config);
            }
            $connect = new mysqli(  $this->config['host'], 
                                    $this->config['user'],
                                    $this->config['password'],
                                    $this->config['dbName'] );

            return $this->connect = $this->setConnect($connect);
        }

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
            if($this->getConnect() == null) {
                $this->connect = $this->setConnect($this->connect);
            } 

            if($this->getQuery() == null) {
                $this->query = $this->setQuery($this->query);
            }
            return $this->query = $this->getConnect()->query($query); 
        }

        public function setPrimaryKey($primaryKey)
        {
            $this->primaryKey = $primaryKey;
            return $this->primaryKey;
        }

        public function getPrimaryKey()
        {
            return $this->primaryKey;
        }

        public function setTableName($tableName)
        {
            $this->tableName = $tableName;
            return $this->tableName;
        }

        public function getTableName()
        {
            return $this->tableName;
        }

        public function setData($data)
        {
            $this->data = $data;
            return $this->data;
        }

        public function getData()
        {
            return $this->data;
        }

        public function __set($dataKey, $dataValue)
        {
            $this->data[$dataKey] = $dataValue;
            return $this->data;
        }

        public function __get($dataKey)
        {
            return $this->data[$dataKey];
        }

        public function setRowChanged($rowChanged)
        {
            $this->rowChanged = $rowChanged;
            return $this->rowChanged;
        }

        public function getRowChanged()
        {
            return $this->rowChanged;
        }

        public function load()
        {
            if($this->getRowChanged() == false) {
                return null;
            }
            $this->primaryKey = $this->getPrimaryKey();
            $result = $this->query("SELECT * FROM `product` WHERE `ID` = {$this->primaryKey}");
            while($row = $result->fetch_array(MYSQLI_BOTH)) {
                $this->data = $this->setData($row);
            }
            return $this->data;
        }

        public function insert($query)
        {
            $result = $this->query($query);
            if($result == null) {
                return null;
            }
            return $this->getConnect()->insert_id;
        }
        
        public function update($query)
        {
            $result = $this->query($query);
            if($result == null) {
                return null;
            }
            $this->rowChanged = $this->setRowChanged(true);
            return $this->getConnect()->affected_rows;
        }

        public function delete($query)
        {
            $result = $this->query($query);
            if(!$result) {
                return null;
            }
            return $this->getConnect()->affected_rows;
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

    $row = new Row();

    $row->connect();
    $row->load();

    $ID = $row->ID = '1';
    $row->setPrimaryKey($ID);

    $Name = $row->Name = 'Laptop';

    $insertName = $row->insertName = 'Headphone';
    $insertPrice = $row->insertPrice = 899;
    $insertQuantity = $row->insertQuantity = 54;
    $insertCategory = $row->insertCategory = 'Electronics';

    $row->insert("INSERT INTO 
                  `product`(`Name`, `Price`, `Quantity`, `Category`) 
                  VALUES ('{$insertName}', {$insertPrice}, {$insertQuantity}, '{$insertCategory}')");

    $row->update("UPDATE `product` SET `Name` = '{$Name}' WHERE `ID` = {$ID}"); 

    $row->delete("DELETE FROM `product` WHERE `Price` = {$insertPrice}");

    $row->fetchAll("SELECT * FROM `product` WHERE `ID` = {$ID}");

    $row->fetchRow("SELECT * FROM `Product` WHERE `ID` = {$ID}");

    $row->fetchOne("SELECT COUNT(`Name`) FROM `product`");

    $row->fetchPairs("SELECT `ID`, `Name` FROM `product`");

    echo "<pre>";
    print_r($row);

?>