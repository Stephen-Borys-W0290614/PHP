<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
interface iFilmDataModel
{
    public function connectToDB();

    public function closeDB();

    public function selectFilms();
    
    public function selectCustomerById($custID);

    public function fetchActor();
    
    public function updateCustomer($custID,$first_name,$last_name);

    // field access functions
    public function fetchMovieName($row);

    public function fetchMovieDescription($row);

    public function fetchCustomerID($row);

    public function fetchActorID($row);

    public function fetchActorFName($row);

    public function fetchActorLName($row);

    public function fetchActorLastUpdate($row);

    public function fetchCustomerFirstName($row);

    public function fetchCustomerLastName($row);
    
    public function fetchAddressID($row);

    public function fetchAddress1($row);

    public function fetchAddress2($row);
}
?>
