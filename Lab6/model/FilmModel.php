<?php

require_once '../model/Films.php';
//require_once '../model/Address.php';


//choose which of the two available methods we have to
//communicate with the mysql db by commenting out the
//other method...you will use your chosen data access
//method in the constructor below

//require_once '../model/data/MySQLiCustomerDataModel.php';
require_once '../model/data/PDOMySQLFilmsDataModel.php';



class FilmModel
{

    private $m_DataAccess;
    
    public function __construct()
    {
        //here we can choose between two option of how we wish to connect
        //to our database - via PDO or via MYSQLi
        //toggle between your choice by commenting out one of the options

        //$this->m_DataAccess = new MySQLiCustomerDataModel();
        $this->m_DataAccess = new PDOMySQLFilmsDataModel();

    }
    
    public function __destruct()
    {
        // not doing anything at the moment
    }
            
    public function getAllFilms()
    {
        //this will be executed based on which method we have enabled
        //PDO with MySQL -or- MYSQLI with MySQL in the constructor
        $this->m_DataAccess->connectToDB();

        //because in this function we get all the customers,
        //we create an empty array which will eventually hold all
        //of the customer objects that will be returned by our model.
        //initially, it will be empty..we will fill it with customer
        //objects with ensuing code
        $arrayOfFilmObjects = array();

        //attempt a select query within the model to get all the customers
        $this->m_DataAccess->selectFilms();
        //loop to get each customer row that is now available from the query
        //it's possible that no rows were returned if there are no customer records
        while($FilmRow = $this->m_DataAccess->fetchActor())
        {
            //for each row of customer of data that we get back,
            //we will

            //create a new address object and fill with address data from
            //the current db record
            //$address = new Address(
              //      $this->m_DataAccess->fetchAddressID($customerRow),
                //    $this->m_DataAccess->fetchAddress1($customerRow),
                  //  $this->m_DataAccess->fetchAddress2($customerRow)
                    //);
            //create a new customer object and fill with customer data
            //from the current db record and include the address object
            //just created before
            $currentFilm = new Films($this->m_DataAccess->fetchActorID($FilmRow),
                    $this->m_DataAccess->fetchActorFName($FilmRow),
                    $this->m_DataAccess->fetchActorLName($FilmRow),
                    $this->m_DataAccess->fetchActorLastUpdate($FilmRow));




                //append the newly created customer object to the array
            //of customer objects to fill up the array one by one
            $arrayOfFilmObjects[] = $currentFilm;
        }
        
        $this->m_DataAccess->closeDB();

        //array has been filled up with all the available customer objects
        //return back the array of objects to the calling function
        //in the controller
        return $arrayOfFilmObjects;
    }

    //retrieves a specific customer record from the database and
    //creates a customer object with the data that is then returned to the caller
    public function getCustomer($custID)
    {
        $this->m_DataAccess->connectToDB();

        //execute the query to retrieve the specific customer
        //record by id.
        $this->m_DataAccess->selectCustomerById($custID);
        //we only need to call fetch customer once
        //because there should only be one record to return
        //because we queried by ID
        $record =  $this->m_DataAccess->fetchActor();

        //build the customer object with all of the data
        //that was retrieved from the fetched record....
        //this will include both customer and address data
        //create a new address object and fill with address data from the db record

        //create a new customer object and fill with customer data from
        //the db record and also include the newly created address
        //object created just above
        $fetchedCustomer = new Films($this->m_DataAccess->fetchActorID($record),
                 $this->m_DataAccess->fetchActorFName($record),
                 $this->m_DataAccess->fetchActorLName($record),
            $this->m_DataAccess->fetchActorLastUpdate($record));
            

        $this->m_DataAccess->closeDB();

        //return the created customer object containing all the customer
        //and address data back to the calling function in the controller
        return $fetchedCustomer;
    }

    public function getSearchedCustomer($name){

        $this->m_DataAccess->connectToDB();

        //execute the query to retrieve the specific customer
        //record by id.
        $this->m_DataAccess->selectCustomerByName($name);
        //we only need to call fetch customer once
        //because there should only be one record to return
        //because we queried by ID
        $arrayOfActor = array();
        $record =  $this->m_DataAccess->fetchActor();

        //build the customer object with all of the data
        //that was retrieved from the fetched record....
        //this will include both customer and address data
        //create a new address object and fill with address data from the db record

        //create a new customer object and fill with customer data from
        //the db record and also include the newly created address
        //object created just above
        while($FilmRow = $this->m_DataAccess->fetchActor()) {

            $fetchedCustomer = new Films($this->m_DataAccess->fetchActorID($FilmRow),
                $this->m_DataAccess->fetchActorFName($FilmRow),
                $this->m_DataAccess->fetchActorLName($FilmRow),
                $this->m_DataAccess->fetchActorLastUpdate($FilmRow));

            $arrayOfActor[] = $fetchedCustomer;

        }

        $this->m_DataAccess->closeDB();

        //return the created customer object containing all the customer
        //and address data back to the calling function in the controller
        return $arrayOfActor;

    }

    //receives the newly updated customer object from the controller
    //the data is then extracted and sent to the db's updateCustomer
    //in order to save the updates in the database
    public function updateCustomer($customerToUpdate)
    {
        $this->m_DataAccess->connectToDB();

        //pass along the newly updated customer object to the
        //data layer's updateCustomer function so that it can
        //go ahead and perform an UPDATE statement with the new data
        //if the update was successful, the $recordsAffected should be set to 1
        $recordsAffected = $this->m_DataAccess->updateCustomer($customerToUpdate->getID(),
                $customerToUpdate->getFName(),
                $customerToUpdate->getLName());

        //return message describing the result of update
        return "$recordsAffected record(s) updated succesfully!";
    }

    public function addActor($customerToAdd){
        $this->m_DataAccess->connectToDB();

        //pass along the newly updated customer object to the
        //data layer's updateCustomer function so that it can
        //go ahead and perform an UPDATE statement with the new data
        //if the update was successful, the $recordsAffected should be set to 1
        $recordsAffected = $this->m_DataAccess->addCustomer($customerToAdd->getID(),
            $customerToAdd->getFName(),
            $customerToAdd->getLName());

        //return message describing the result of update
        return "$recordsAffected record(s) updated succesfully!";
    }

    public function deleteCustomer($customerToUpdate)
    {
        $this->m_DataAccess->connectToDB();

        //pass along the newly updated customer object to the
        //data layer's updateCustomer function so that it can
        //go ahead and perform an UPDATE statement with the new data
        //if the update was successful, the $recordsAffected should be set to 1
        $recordsAffected = $this->m_DataAccess->deleteCustomer($customerToUpdate->getID());

        //return message describing the result of update
        return "$recordsAffected record(s) updated succesfully!";
    }
}

?>
