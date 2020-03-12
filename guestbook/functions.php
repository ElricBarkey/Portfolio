<?php


    /* Define functions to validate data */

    function validName($name)
    {
        return !empty(trim($name));
    }


    function validMet($selection)
    {
        $validSelections = array("none", "Meet up", "Job fair", "Other", "We haven't meet");
        return in_array($selection, $validSelections);
    }